<?php
/* @var $this UsuarisNoRegController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuaris No Regs',
);

$this->menu=array(
	array('label'=>'Create UsuarisNoReg', 'url'=>array('create')),
	array('label'=>'Manage UsuarisNoReg', 'url'=>array('admin')),
);
?>

<h1>Usuaris No Regs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
