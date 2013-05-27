<?php
/* @var $this MunicipiosController */
/* @var $model Municipios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provincias_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'provincias_id',CHtml::listData(Provincias::model()->findAll(),'id','provincia')); 
                ?>
		<?php echo $form->error($model,'provincias_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php echo $form->textField($model,'municipio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->