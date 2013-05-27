<?php
/* @var $this LlocsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Llocs',
);

$this->menu=array(
	array('label'=>'Create Llocs', 'url'=>array('create')),
	array('label'=>'Manage Llocs', 'url'=>array('admin')),
);
?>

<h1>Llocs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
