<?php
/* @var $this LlocsController */
/* @var $model Llocs */

$this->breadcrumbs=array(
	'Llocs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Llocs', 'url'=>array('index')),
	array('label'=>'Create Llocs', 'url'=>array('create')),
	array('label'=>'View Llocs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Llocs', 'url'=>array('admin')),
);
?>

<h1>Update Llocs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>