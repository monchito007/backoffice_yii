<?php
/* @var $this UsuarisController */
/* @var $model Usuaris */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuaris-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_usuari'); ?>
		<?php echo $form->textField($model,'nom_usuari',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nom_usuari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clau'); ?>
		<?php echo $form->textField($model,'clau',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'clau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
        

<?php $this->endWidget(); ?>

</div><!-- form -->