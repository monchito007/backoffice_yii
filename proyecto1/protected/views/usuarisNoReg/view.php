<?php
/* @var $this UsuarisNoRegController */
/* @var $model UsuarisNoReg */

$this->breadcrumbs=array(
	'Usuaris No Regs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarisNoReg', 'url'=>array('index')),
	array('label'=>'Create UsuarisNoReg', 'url'=>array('create')),
	array('label'=>'Update UsuarisNoReg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarisNoReg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarisNoReg', 'url'=>array('admin')),
);
?>

<h1>View UsuarisNoReg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom_usuari',
		'clau',
		'mail',
	),
)); ?>
