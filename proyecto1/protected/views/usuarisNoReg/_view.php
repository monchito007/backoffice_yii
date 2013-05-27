<?php
/* @var $this UsuarisNoRegController */
/* @var $data UsuarisNoReg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_usuari')); ?>:</b>
	<?php echo CHtml::encode($data->nom_usuari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clau')); ?>:</b>
	<?php echo CHtml::encode($data->clau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />


</div>