<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">
	<div class="panel panel-primary">
		<div class="panel-body">
			<?php if ($data->segundoApellido!=null) {?>
				<h4><?php echo $data->nombre." ".$data->primerApellido." ".$data->segundoApellido; ?></h4>
			<?php } else {?>
				<h4><?php echo $data->nombre." ".$data->primerApellido; ?></h4>
			<?php } ?>
			<hr class="hrb">
			<b>ID: </b><?php echo CHtml::link(CHtml::encode($data->dni), array('view', 'id'=>$data->dni)); ?>
			<br>
			<?php if($data->organizacion!=null) {?>
				<b>Organización: </b><?php echo $data->organizacion0->nombre ;?>
			<?php } ?>
		</div>
	</div>
</div>