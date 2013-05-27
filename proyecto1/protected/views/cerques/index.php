<?php
/* @var $this CerquesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadistiques',
);

$this->menu=array(
	array('label'=>'Create Cerques', 'url'=>array('create')),
	array('label'=>'Manage Cerques', 'url'=>array('admin')),
);
?>

<h1>Estadistiques</h1>

<?php
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
*/ 
?>

<?php

$this->widget('jqBarGraph',array(
    
    'color1'=>'#000000',
    'color2'=>'#000000',
    'width'=>900,
    'space'=>10,
    'title'=>'Chart',
    'values'=>''
    
    
));


//$list=Yii::app()->db->createCommand('SELECT id,cerca FROM cerques')->queryAll();
$list=Yii::app()->db->createCommand('SELECT count(cerca) as num_cerques,cerca FROM cerques GROUP BY cerca')->queryAll();
                
            $rs=array();
            $cont=0;
            foreach($list as $item){
                //process each item here
                $rs[$cont][0]=$item['num_cerques'];
                $rs[$cont][1]=$item['cerca'];
                $cont++;
            }

//$array=array(array(200,'june'),array(129,'july'),array(143,'august'),array(159,'september'));
$array2=$rs;
$this->widget('jqBarGraph',
array('values'=>$array2,
'type'=>'simple',
'width'=>900,
'color1'=>'#122A47',
'color2'=>'#1B3E69',
'space'=>5,
'title'=>'Grafic de cerques totals'));

/*
//Gràfica de cerques per ciutat
$list=Yii::app()->db->createCommand('SELECT count(a.cerca) as num_cerques,b.municipio FROM cerques as a,municipios as b WHERE b.municipios=a.municipios_id GROUP BY cerca')->queryAll();
                
            $rs=array();
            $cont=0;
            foreach($list as $item){
                //process each item here
                //$rs[$cont]=array($item['id'],$item['cerca']);
                //print_r($item);echo"<br><br>";
                $rs[$cont][0]=$item['num_cerques'];
                $rs[$cont][1]=$item['cerca'];
                $cont++;
            }

//$array=array(array(200,'june'),array(129,'july'),array(143,'august'),array(159,'september'));
$array2=$rs;
$this->widget('jqBarGraph',
array('values'=>$array2,
'type'=>'simple',
'width'=>900,
'color1'=>'#122A47',
'color2'=>'#1B3E69',
'space'=>5,
'title'=>'Grafic de cerques totals'));
*/





/*this is how you can create a multi graph */
/*

$array2=array(array(array(5,15,26),2008),array(array(14,6,26),2009),array(array(17,3,26),2010));
$colors=array('#3D0017','#6B0E1D','#AB2522');
$legends=array('legend1','legend2','legend3');
$this->widget('jqBarGraph',
array('values'=>$array2,
'type'=>'multi',
'width'=>900,
'colors'=>$colors,
'legend'=>true,
'legends'=>$legends,
'title'=>'multi graph'));
 
/*this is how you can create a stacked graph */
/*
$array3=array(array(array(5,15,26),2008),array(array(14,6,26),2009),array(array(17,3,29),2010));
$colors2=array('#242424','#437346','#97D95C');
$legends2=array('legend1','legend2','legend3');
$this->widget('jqBarGraph',
array('values'=>$array3,
'type'=>'stacked',
'width'=>900,
'colors'=>$colors2,
'legend'=>true,
'legends'=>$legends2,
'title'=>'stacked graph'));
*/

?>