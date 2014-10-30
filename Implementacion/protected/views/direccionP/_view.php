<?php
/* @var $this DireccionPController */
/* @var $data DireccionP */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('apartadoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->apartadoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoPostal')); ?>:</b>
	<?php echo CHtml::encode($data->codigoPostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sitioWeb')); ?>:</b>
	<?php echo CHtml::encode($data->sitioWeb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	*/ ?>

</div>