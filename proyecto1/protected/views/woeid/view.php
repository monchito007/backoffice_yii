<?php
/* @var $this WoeidController */
/* @var $model Woeid */

$this->breadcrumbs=array(
	'Woeids'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Woeid', 'url'=>array('index')),
	array('label'=>'Create Woeid', 'url'=>array('create')),
	array('label'=>'Update Woeid', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Woeid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Woeid', 'url'=>array('admin')),
);
?>

<h1>View Woeid #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'municipios_id',
		'woeid',
	),
)); ?>
