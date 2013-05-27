<?php
/* @var $this LlocsController */
/* @var $model Llocs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regiones_id'); ?>
		<?php echo $form->textField($model,'regiones_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provincias_id'); ?>
		<?php echo $form->textField($model,'provincias_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'municipios_id'); ?>
		<?php echo $form->textField($model,'municipios_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrer'); ?>
		<?php echo $form->textField($model,'carrer',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccio'); ?>
		<?php echo $form->textField($model,'direccio',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->