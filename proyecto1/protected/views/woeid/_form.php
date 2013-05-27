<?php
/* @var $this WoeidController */
/* @var $model Woeid */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'woeid-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'municipios_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'municipios_id',CHtml::listData(Municipios::model()->findAll(),'id','municipio')); 
                ?>
		<?php echo $form->error($model,'municipios_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'woeid'); ?>
		<?php echo $form->textField($model,'woeid'); ?>
		<?php echo $form->error($model,'woeid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->