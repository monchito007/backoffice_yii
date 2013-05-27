<?php
/* @var $this WoeidController */
/* @var $model Woeid */

$this->breadcrumbs=array(
	'Woeids'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Woeid', 'url'=>array('index')),
	array('label'=>'Create Woeid', 'url'=>array('create')),
	array('label'=>'View Woeid', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Woeid', 'url'=>array('admin')),
);
?>

<h1>Update Woeid <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>