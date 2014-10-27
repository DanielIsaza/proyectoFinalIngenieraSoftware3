<?php
/* @var $this GrupoController */
/* @var $data Grupo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programaPrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->programaPrincipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programaSecundario')); ?>:</b>
	<?php echo CHtml::encode($data->programaSecundario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areaConocimiento')); ?>:</b>
	<?php echo CHtml::encode($data->areaConocimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
	<?php echo CHtml::encode($data->director); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('codirector')); ?>:</b>
	<?php echo CHtml::encode($data->codirector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('granArea')); ?>:</b>
	<?php echo CHtml::encode($data->granArea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	*/ ?>

</div>