<?php
/* @var $this EventoController */
/* @var $model Evento */

$this->breadcrumbs=array(
	'Eventos'=>array('index'),
	$model->id,
);
?>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>Información del expositor</h4>
					<hr class="hrb">
					<?php echo $model->expositor0->nombre.' '.$model->expositor0->primerApellido.' '.$model->expositor0->segundoApellido.', '.$model->expositor0->organizacion0->nombre ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>Información del evento</h4>
					<hr class="hrb">
					<?php echo $model->informacion; ?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>Miembro de</h4>
					<hr class="hrb">
					<?php 
						for ($i=0; $i < count($model->expositor0->grupos2); $i++) { 
							echo $model->expositor0->grupos2[$i]->nombre;
						}
					?>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h4>Último evento</h4>
					<hr class="hrb">
					<?php 
					if(count($model->expositor0->eventos)>0){
						echo $model->expositor0->eventos[count($model->expositor0->eventos)-1]->nombre;
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div align="center">
		<button class="btn btn-default" type="submit">Asistir</button>
	</div>
</div>
