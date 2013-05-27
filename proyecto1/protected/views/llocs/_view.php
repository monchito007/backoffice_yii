<?php
/* @var $this LlocsController */
/* @var $data Llocs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regiones_id')); ?>:</b>
	<?php echo CHtml::encode($data->regiones->region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincias_id')); ?>:</b>
	<?php echo CHtml::encode($data->provincias->provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipios_id')); ?>:</b>
	<?php echo CHtml::encode($data->municipios->municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
	<?php echo CHtml::encode($data->longitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('carrer')); ?>:</b>
	<?php echo CHtml::encode($data->carrer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccio')); ?>:</b>
	<?php echo CHtml::encode($data->direccio); ?>
	<br />

	*/ ?>

</div>