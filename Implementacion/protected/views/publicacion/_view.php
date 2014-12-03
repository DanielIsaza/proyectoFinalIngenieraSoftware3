<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4><?php echo CHtml::encode($data->nombre); ?></h4>
			<hr class="hrb">
			<b>Código: </b><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<br>
			<b>Revista: </b><?php echo CHtml::encode($data->revista); ?>
		</div>
	</div>
</div>