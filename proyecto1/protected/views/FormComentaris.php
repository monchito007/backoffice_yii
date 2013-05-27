<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentaris-FormComentaris-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'llocs_id'); ?>
		<?php echo $form->textField($model,'llocs_id'); ?>
		<?php echo $form->error($model,'llocs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuaris_id'); ?>
		<?php echo $form->textField($model,'usuaris_id'); ?>
		<?php echo $form->error($model,'usuaris_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_hora'); ?>
		<?php echo $form->textField($model,'data_hora'); ?>
		<?php echo $form->error($model,'data_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentari'); ?>
		<?php echo $form->textField($model,'comentari'); ?>
		<?php echo $form->error($model,'comentari'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->