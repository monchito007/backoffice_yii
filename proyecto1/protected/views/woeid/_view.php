<?php
/* @var $this WoeidController */
/* @var $data Woeid */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipios_id')); ?>:</b>
	<?php echo CHtml::encode($data->municipios->municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('woeid')); ?>:</b>
	<?php echo CHtml::encode($data->woeid); ?>
	<br />


</div>