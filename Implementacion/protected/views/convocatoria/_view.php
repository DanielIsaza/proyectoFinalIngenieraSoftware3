<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objeto')); ?>:</b>
	<?php echo CHtml::encode($data->objeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirigido')); ?>:</b>
	<?php echo CHtml::encode($data->dirigido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaApertura')); ?>:</b>
	<?php echo CHtml::encode($data->fechaApertura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCierre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPreliminar')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPreliminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDefinitiva')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDefinitiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximoFinanciacion')); ?>:</b>
	<?php echo CHtml::encode($data->maximoFinanciacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimoFinanciacion')); ?>:</b>
	<?php echo CHtml::encode($data->minimoFinanciacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxMontoFinanciacion')); ?>:</b>
	<?php echo CHtml::encode($data->maxMontoFinanciacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximoMeses')); ?>:</b>
	<?php echo CHtml::encode($data->maximoMeses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoTotal')); ?>:</b>
	<?php echo CHtml::encode($data->montoTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtipo')); ?>:</b>
	<?php echo CHtml::encode($data->subtipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areaConocimiento')); ?>:</b>
	<?php echo CHtml::encode($data->areaConocimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persona')); ?>:</b>
	<?php echo CHtml::encode($data->persona); ?>
	<br />

	*/ ?>

</div>