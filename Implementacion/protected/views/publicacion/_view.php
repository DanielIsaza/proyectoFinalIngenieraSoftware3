<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('revista')); ?>:</b>
	<?php echo CHtml::encode($data->revista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paginas')); ?>:</b>
	<?php echo CHtml::encode($data->paginas); ?>
	<br />


</div>