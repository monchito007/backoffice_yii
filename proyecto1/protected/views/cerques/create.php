<?php
/* @var $this CerquesController */
/* @var $model Cerques */

$this->breadcrumbs=array(
	'Cerques'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cerques', 'url'=>array('index')),
	array('label'=>'Manage Cerques', 'url'=>array('admin')),
);
?>

<h1>Create Cerques</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>