<?php
/* @var $this UsuarisNoRegController */
/* @var $model UsuarisNoReg */

$this->breadcrumbs=array(
	'Usuaris No Regs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UsuarisNoReg', 'url'=>array('index')),
	array('label'=>'Create UsuarisNoReg', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuaris-no-reg-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usuaris No Regs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Exportar a Excel -->
<?php echo CHtml::link('Exportar a Excel',array('UsuarisNoReg/excel')); ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuaris-no-reg-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nom_usuari',
		'clau',
		'mail',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
