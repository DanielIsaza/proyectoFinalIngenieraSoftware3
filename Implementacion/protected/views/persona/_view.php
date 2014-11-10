<?php
/* @var $this PersonaController */
/* @var $data Persona */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreBibliografico')); ?>:</b>
	<?php echo CHtml::encode($data->nombreBibliografico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionR')); ?>:</b>
	<?php echo CHtml::encode($data->direccionR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionP')); ?>:</b>
	<?php echo CHtml::encode($data->direccionP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario0->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadExpedicion')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadExpedicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion')); ?>:</b>
	<?php echo CHtml::encode($data->organizacion); ?>
	<br />
	<br>

</div>