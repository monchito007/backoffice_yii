<?php
/* @var $this RecomanacionsController */
/* @var $model Recomanacions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recomanacions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuaris_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'usuaris_id',CHtml::listData(Usuaris::model()->findAll(),'id','nom_usuari')); 
                ?>
		<?php echo $form->error($model,'usuaris_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'llocs_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'llocs_id',CHtml::listData(Llocs::model()->findAll(),'id','nom')); 
                ?>
		<?php echo $form->error($model,'llocs_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->