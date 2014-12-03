<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->pageTitle='Proyecto - '.$model->id;
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->id,
);
?>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h3><?php echo $model->nombre; ?></h3>
			<hr class="hrb">
			<p><?php echo $model->personas[0]->nombre." ".$model->personas[0]->primerApellido; ?></p>
			<p><?php echo $model->organizacion0->nombre ;?></p>
			<p>Fecha inicio: <?php echo $model->fechaInicio ?></p>
			<p>Fecha fin: <?php echo $model->fechaFin ?></p>
		</div>
	</div>
</div>