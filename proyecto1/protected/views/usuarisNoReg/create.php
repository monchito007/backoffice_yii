<?php
/* @var $this UsuarisNoRegController */
/* @var $model UsuarisNoReg */

$this->breadcrumbs=array(
	'Usuaris No Regs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarisNoReg', 'url'=>array('index')),
	array('label'=>'Manage UsuarisNoReg', 'url'=>array('admin')),
);
?>

<h1>Create UsuarisNoReg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>