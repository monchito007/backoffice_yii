<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */

$this->breadcrumbs=array(
	'Recomanacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recomanacions', 'url'=>array('index')),
	array('label'=>'Create Recomanacions', 'url'=>array('create')),
	array('label'=>'View Recomanacions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recomanacions', 'url'=>array('admin')),
);
?>

<h1>Update Recomanacions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>