<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentarises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comentaris', 'url'=>array('index')),
	array('label'=>'Manage Comentaris', 'url'=>array('admin')),
);
?>

<h1>Create Comentaris</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>