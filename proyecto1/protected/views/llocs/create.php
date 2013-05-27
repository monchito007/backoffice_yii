<?php
/* @var $this LlocsController */
/* @var $model Llocs */

$this->breadcrumbs=array(
	'Llocs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Llocs', 'url'=>array('index')),
	array('label'=>'Manage Llocs', 'url'=>array('admin')),
);
?>

<h1>Create Llocs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>