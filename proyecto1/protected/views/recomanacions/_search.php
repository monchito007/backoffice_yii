<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */
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
		<?php echo $form->label($model,'usuaris_id'); ?>
		<?php echo $form->textField($model,'usuaris_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'llocs_id'); ?>
		<?php echo $form->textField($model,'llocs_id',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->