<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */

$this->breadcrumbs=array(
	'Comentarises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Comentaris', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Comentaris', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comentaris-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app','Manage'); ?> Comentarises</h1>

<p>
<?php
$indicadors = '<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b>';
echo Yii::t('app',"You may optionally enter a comparison operator () at the beginning of each of your search values to specify how the comparison should be done. # {INDICADORS}",array('{INDICADORS}'=>$indicadors)); 
?>

    
    
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Exportar a Excel -->
<?php echo CHtml::link('Exportar a Excel',array('comentaris/excel')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comentaris-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                    'name'=>'llocs_id',
                    'header'=>'Llocs',
                    'value'=>'$data->llocs->nom',
      
                ),
		array(
                    'name'=>'usuaris_id',
                    'header'=>'Usuaris',
                    'value'=>'$data->usuaris->nom_usuari',
      
                ),
		'data_hora',
		'comentari',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
