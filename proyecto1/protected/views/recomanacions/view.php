<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */

$this->breadcrumbs=array(
	'Recomanacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Recomanacions', 'url'=>array('index')),
	array('label'=>'Create Recomanacions', 'url'=>array('create')),
	array('label'=>'Update Recomanacions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recomanacions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recomanacions', 'url'=>array('admin')),
);
?>

<h1>View Recomanacions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuaris_id',
		'llocs_id',
	),
)); ?>
