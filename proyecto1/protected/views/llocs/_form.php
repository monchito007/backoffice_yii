<?php
/* @var $this LlocsController */
/* @var $model Llocs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'llocs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'regiones_id'); ?>
		<?php   //Llista desplegable
                      echo $form->dropDownList($model,'regiones_id',CHtml::listData(Regiones::model()->findAll(),'id','region')); 
                ?>
                <?php echo $form->error($model,'regiones_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provincias_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'provincias_id',CHtml::listData(Provincias::model()->findAll(),'id','provincia')); 
                ?>
		<?php echo $form->error($model,'provincias_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'municipios_id'); ?>
		<?php  //Llista desplegable
                      echo $form->dropDownList($model,'municipios_id',CHtml::listData(Municipios::model()->findAll(),'id','municipio')); 
                ?>
		<?php echo $form->error($model,'municipios_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrer'); ?>
		<?php echo $form->textField($model,'carrer',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'carrer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccio'); ?>
		<?php echo $form->textField($model,'direccio',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->