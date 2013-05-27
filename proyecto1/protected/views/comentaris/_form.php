<?php
/* @var $this ComentarisController */
/* @var $model Comentaris */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentaris-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'llocs_id'); ?>
		<?php echo $form->textField($model,'llocs_id',array("disabled"=>"disabled")); ?>
            	<?php echo $form->error($model,'llocs_id'); ?>
                
                 <?php   //Nota: és opcional array('empty'=>"Tria ciutat")
                      echo $form->dropDownList($model,'llocs_id',CHtml::listData(Llocs::model()->findAll(),'id','nom')); 
                  ?>
            
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuaris_id'); ?>
		<?php echo $form->textField($model,'usuaris_id',array("disabled"=>"disabled")); ?>
		<?php echo $form->error($model,'usuaris_id'); ?>
                <?php   //Nota: és opcional array('empty'=>"Tria ciutat")
                      echo $form->dropDownList($model,'usuaris_id',CHtml::listData(Usuaris::model()->findAll(),'id','nom_usuari')); 
                  ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_hora'); ?>
		<?php echo $form->textField($model,'data_hora'); ?>
		<?php echo $form->error($model,'data_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentari'); ?>
		<?php echo $form->textArea($model,'comentari',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentari'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->