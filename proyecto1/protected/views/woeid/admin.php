<?php
/* @var $this WoeidController */
/* @var $model Woeid */

$this->breadcrumbs=array(
	'Woeids'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Woeid', 'url'=>array('index')),
	array('label'=>'Create Woeid', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#woeid-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Woeids</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Exportar a Excel -->
<?php echo CHtml::link('Exportar a Excel',array('woeid/excel')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'woeid-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                    'name'=>'municipios_id',
                    'header'=>'Municipios',
                    'value'=>'$data->municipios->municipio',
                ),
		'woeid',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
