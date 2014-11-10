<?php
/* @var $this EventoController */
/* @var $data Evento */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<b>Nombre: </b>
			<?php echo CHtml::encode($data->nombre); ?>
			<br />
			<b>Identificación: </b>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<br />
			<b>Fecha: </b>
			<?php echo CHtml::encode($data->fecha); ?>
			<br />
			<b>Expositor: </b>
			<?php echo CHtml::encode($data->expositor0->nombre).' ('.CHtml::link($data->expositor0->dni,array('persona/view','id'=>$data->expositor0->dni)).')'; ?>
		</div>
	</div>
</div>