<?php
/* @var $this LlocsController */
/* @var $model Llocs */

$this->breadcrumbs=array(
	'Llocs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Llocs', 'url'=>array('index')),
	array('label'=>'Create Llocs', 'url'=>array('create')),
	array('label'=>'Update Llocs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Llocs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Llocs', 'url'=>array('admin')),
);
?>

<h1>View Llocs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'regiones_id',
		'provincias_id',
		'municipios_id',
		'latitud',
		'longitud',
		'nom',
		'carrer',
		'direccio',
	),
)); ?>
