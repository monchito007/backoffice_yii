<?php
/* @var $this RecomanacionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recomanacions',
);

$this->menu=array(
	array('label'=>'Create Recomanacions', 'url'=>array('create')),
	array('label'=>'Manage Recomanacions', 'url'=>array('admin')),
);
?>

<h1>Recomanacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
