<?php
/* @var $this OrganizacionController */
/* @var $data Organizacion */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4><?php echo CHtml::encode($data->nombre); ?></h4>
			<hr class="hrb">
			<b>NIT: </b><?php echo CHtml::link(CHtml::encode($data->nit), array('view', 'id'=>$data->nit)); ?>
			<br>
			<b>Sigla: </b><?php echo CHtml::encode($data->sigla); ?>
			<br>
			<b>Dirección: </b><?php echo CHtml::encode($data->direccion); ?>
			<br>
			<b>Teléfono: </b><?php echo CHtml::encode($data->telefono); ?>
			<br>
			<b>Email: </b><?php echo CHtml::encode($data->email); ?>
		</div>
	</div>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sitioWeb')); ?>:</b>
	<?php echo CHtml::encode($data->sitioWeb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	*/ ?>

</div>