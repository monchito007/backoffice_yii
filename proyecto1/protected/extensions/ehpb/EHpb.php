<?php
/*
* funnel chart extention
* author : pegel.linuxs@gmail.com
*/
class EHpb extends CWidget
{
	/*
	* @var array data 
	*/
	public $label=array();
	public $value=array();
	public $color=array();
		
	public $width=600;
	public $height=80;
	public $unit="%";
	public $zeroStart=true;
	
	private $jsLabel;
	private $jsValue;
	private $jsColor;
	private $total;
	private $tips;
			
	public function init()
	{
		// default value
		if (count($this->label)<1 || count($this->value)<1 || count($this->label)<>count($this->value)):
			$this->label = array('Please','Fixed','Params');
			$this->value = array(50,30,20);
			$this->color = array('red','green','blue');
		endif;

		$this->jsLabel = $this->js_array($this->label);
		$this->jsValue = $this->js_array($this->value);
		$this->jsColor = $this->js_array($this->color);
		
		$this->total = $this->getTotal($this->value);
		$this->tips = $this->setToolTips($this->label,$this->value);

		$asset=Yii::app()->assetManager->publish(dirname(__FILE__).'/assets');
    	$cs=Yii::app()->clientScript;
		// publish asset    	
		$cs->registerScriptFile($asset."/RGraph.common.core.js");
		$cs->registerScriptFile($asset."/RGraph.common.context.js");
		$cs->registerScriptFile($asset."/RGraph.common.annotate.js");
		$cs->registerScriptFile($asset."/RGraph.common.tooltips.js");
		$cs->registerScriptFile($asset."/RGraph.common.zoom.js");
		$cs->registerScriptFile($asset."/RGraph.common.resizing.js");
		$cs->registerScriptFile($asset."/RGraph.hprogress.js");

		$cs->registerScript(__CLASS__.$this->id,"
            var progress{$this->id} = new RGraph.HProgress('{$this->id}', {$this->jsValue}, {$this->total});
            progress{$this->id}.Set('chart.colors', {$this->jsColor});
            progress{$this->id}.Set('chart.key', {$this->jsLabel});
            progress{$this->id}.Set('chart.tooltips', {$this->tips});
            progress{$this->id}.Set('chart.units.post', '{$this->unit}');
            progress{$this->id}.Set('chart.tickmarks.zerostart', {$this->zeroStart});
            progress{$this->id}.Draw();
            
		",CClientScript::POS_READY);
	}
	
	public function run()
	{
		echo " <canvas id='{$this->id}' width='{$this->width}' height='{$this->height}'>[No canvas support]</canvas>";
	}
	
	private function getTotal($arr)
	{
		$tot=0;
		foreach ($arr as $a)
			$tot+=$a;
		return $tot;	
	}
	
	private function setToolTips($label,$value)
	{
		$temp=array();
		foreach ($label as $i=>$l)
			$temp[] = "'".addcslashes($l, "\0..\37\"\\")." (".$value[$i].")'";
		return '['.implode(',', $temp).']';
	}
	
	private function js_str($s)
	{
		if (is_numeric($s)) return $s;
	  	return "'".addcslashes($s, "\0..\37\"\\")."'";
	}

	private function js_array($array) {
	  $temp=array();
	  foreach ($array as $value)
		$temp[] = $this->js_str($value);
	  return '['.implode(',', $temp).']';
	}
}
