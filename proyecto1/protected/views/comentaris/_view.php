<?php
/* @var $this ComentarisController */
/* @var $data Comentaris */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('llocs_id')); ?>:</b>
	<?php echo CHtml::encode($data->llocs->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuaris_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuaris->nom_usuari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_hora')); ?>:</b>
	<?php echo CHtml::encode($data->data_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentari')); ?>:</b>
	<?php echo CHtml::encode($data->comentari); ?>
	<br />


</div>