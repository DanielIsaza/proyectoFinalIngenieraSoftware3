<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h3><?php echo CHtml::link(CHtml::encode($data->nombre), array('view', 'id'=>$data->id)); ?></h3>
			<hr class="hrb">
			<?php if (count($data->personas)>0) {?>
				<p><?php echo $data->personas[0]->nombre." ".$data->personas[0]->primerApellido; ?></p>
			<?php } ?>
			<?php echo $data->organizacion0->nombre ;?>
		</div>
	</div>
</div>