<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */

$this->breadcrumbs=array(
	'Recomanacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recomanacions', 'url'=>array('index')),
	array('label'=>'Manage Recomanacions', 'url'=>array('admin')),
);
?>

<h1>Create Recomanacions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>