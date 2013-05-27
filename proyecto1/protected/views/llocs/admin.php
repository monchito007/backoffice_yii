<?php
/* @var $this LlocsController */
/* @var $model Llocs */

$this->breadcrumbs=array(
	'Llocs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Llocs', 'url'=>array('index')),
	array('label'=>'Create Llocs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#llocs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Llocs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Exportar a Excel -->
<?php echo CHtml::link('Exportar a Excel',array('llocs/excel')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'llocs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                    'name'=>'regiones_id',
                    'header'=>'Regiones',
                    'value'=>'$data->regiones->region',
      
                ),
		array(
                    'name'=>'provincias_id',
                    'header'=>'Provicinas',
                    'value'=>'$data->provincias->provincia',
      
                ),
		array(
                    'name'=>'municipios_id',
                    'header'=>'Muncipios',
                    'value'=>'$data->municipios->municipio',
      
                ),
		'latitud',
		'longitud',		
		'nom',
		'carrer',
		'direccio',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
