<?php
/* @var $this CerquesController */
/* @var $model Cerques */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cerques-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cerca'); ?>
		<?php echo $form->textField($model,'cerca'); ?>
		<?php echo $form->error($model,'cerca'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'regiones_id'); ?>
		<?php echo $form->textField($model,'regiones_id'); ?>
		<?php echo $form->error($model,'regiones_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provincias_id'); ?>
		<?php echo $form->textField($model,'provincias_id'); ?>
		<?php echo $form->error($model,'provincias_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'municipios_id'); ?>
		<?php echo $form->textField($model,'municipios_id'); ?>
		<?php echo $form->error($model,'municipios_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->