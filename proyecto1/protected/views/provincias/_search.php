<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regiones_id'); ?>
		<?php echo $form->textField($model,'regiones_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provincia'); ?>
		<?php echo $form->textField($model,'provincia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->