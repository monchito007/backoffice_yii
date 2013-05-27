<?php
/* @var $this RegionesController */
/* @var $model Regiones */

$this->breadcrumbs=array(
	'Regiones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'View Regiones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<h1>Update Regiones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>