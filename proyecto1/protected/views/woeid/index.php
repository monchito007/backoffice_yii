<?php
/* @var $this WoeidController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Woeids',
);

$this->menu=array(
	array('label'=>'Create Woeid', 'url'=>array('create')),
	array('label'=>'Manage Woeid', 'url'=>array('admin')),
);
?>

<h1>Woeids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
