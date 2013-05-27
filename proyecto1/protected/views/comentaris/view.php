<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentarises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comentaris', 'url'=>array('index')),
	array('label'=>'Create Comentaris', 'url'=>array('create')),
	array('label'=>'Update Comentaris', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comentaris', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentaris', 'url'=>array('admin')),
);
?>

<h1>View Comentaris #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'llocs_id',
		'usuaris_id',
		'data_hora',
		'comentari',
	),
)); ?>
