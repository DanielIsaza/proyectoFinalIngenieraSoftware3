<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dni), array('view', 'id'=>$data->dni)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerApellido')); ?>:</b>
	<?php echo CHtml::encode($data->primerApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoApellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundoApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telFijo')); ?>:</b>
	<?php echo CHtml::encode($data->telFijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion')); ?>:</b>
	<?php echo CHtml::encode($data->organizacion); ?>
	<br />

	*/ ?>

</div>