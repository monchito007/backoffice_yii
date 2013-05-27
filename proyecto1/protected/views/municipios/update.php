<?php
/* @var $this MunicipiosController */
/* @var $model Municipios */

$this->breadcrumbs=array(
	'Municipioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Municipios', 'url'=>array('index')),
	array('label'=>'Create Municipios', 'url'=>array('create')),
	array('label'=>'View Municipios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Municipios', 'url'=>array('admin')),
);
?>

<h1>Update Municipios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>