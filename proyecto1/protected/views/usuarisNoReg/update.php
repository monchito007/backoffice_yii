<?php
/* @var $this UsuarisNoRegController */
/* @var $model UsuarisNoReg */

$this->breadcrumbs=array(
	'Usuaris No Regs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarisNoReg', 'url'=>array('index')),
	array('label'=>'Create UsuarisNoReg', 'url'=>array('create')),
	array('label'=>'View UsuarisNoReg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarisNoReg', 'url'=>array('admin')),
);
?>

<h1>Update UsuarisNoReg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>