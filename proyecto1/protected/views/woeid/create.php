<?php
/* @var $this WoeidController */
/* @var $model Woeid */

$this->breadcrumbs=array(
	'Woeids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Woeid', 'url'=>array('index')),
	array('label'=>'Manage Woeid', 'url'=>array('admin')),
);
?>

<h1>Create Woeid</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>