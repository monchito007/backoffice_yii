<?php
/* @var $this CerquesController */
/* @var $model Cerques */

$this->breadcrumbs=array(
	'Cerques'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cerques', 'url'=>array('index')),
	array('label'=>'Create Cerques', 'url'=>array('create')),
	array('label'=>'Update Cerques', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cerques', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cerques', 'url'=>array('admin')),
);
?>

<h1>View Cerques #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cerca',
		'regiones_id',
		'provincias_id',
		'municipios_id',
	),
)); ?>
