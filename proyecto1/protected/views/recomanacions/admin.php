<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */

$this->breadcrumbs=array(
	'Recomanacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Recomanacions', 'url'=>array('index')),
	array('label'=>'Create Recomanacions', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#recomanacions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recomanacions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Exportar a Excel -->
<?php echo CHtml::link('Exportar a Excel',array('recomanacions/excel')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recomanacions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                    'name'=>'usuaris_id',
                    'header'=>'Usuaris',
                    'value'=>'$data->usuaris->nom_usuari',
                ),
		array(
                    'name'=>'llocs_id',
                    'header'=>'Llocs',
                    'value'=>'$data->llocs->nom',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
