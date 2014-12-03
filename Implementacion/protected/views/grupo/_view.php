<?php
/* @var $this GrupoController */
/* @var $data Grupo */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4><?php echo CHtml::encode($data->nombre); ?></h4>
			<hr class="hrb">
			<b>ID: </b><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<br>
			<b>Fecha creación: </b><?php echo CHtml::encode($data->fechaCreacion); ?>
			<br>
			<b>Programa principal: </b><?php echo CHtml::encode($data->programaPrincipal); ?>
			<br>
			<b>Área de conocimiento: </b><?php echo CHtml::encode($data->areaConocimiento0->nombre); ?>
		</div>
	</div>
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