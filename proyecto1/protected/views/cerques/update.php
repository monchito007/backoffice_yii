<?php
/* @var $this CerquesController */
/* @var $model Cerques */

$this->breadcrumbs=array(
	'Cerques'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cerques', 'url'=>array('index')),
	array('label'=>'Create Cerques', 'url'=>array('create')),
	array('label'=>'View Cerques', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cerques', 'url'=>array('admin')),
);
?>

<h1>Update Cerques <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>