<?php
/* @var $this CerquesController */
/* @var $data Cerques */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regiones_id')); ?>:</b>
	<?php echo CHtml::encode($data->regiones_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincias_id')); ?>:</b>
	<?php echo CHtml::encode($data->provincias_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipios_id')); ?>:</b>
	<?php echo CHtml::encode($data->municipios_id); ?>
	<br />


</div>