<?php
/* @var $this DireccionRController */
/* @var $data DireccionR */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telFijo')); ?>:</b>
	<?php echo CHtml::encode($data->telFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telMovil')); ?>:</b>
	<?php echo CHtml::encode($data->telMovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->apartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codPostal')); ?>:</b>
	<?php echo CHtml::encode($data->codPostal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SitioWeb')); ?>:</b>
	<?php echo CHtml::encode($data->SitioWeb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	*/ ?>

</div>