<?php
/* @var $this OrganizacionController */
/* @var $model Organizacion */

$this->pageTitle='Organizaci&oacuten - '.$model->nit;
$this->breadcrumbs=array(
	'Organizacions'=>array('index'),
	$model->nit,
);
?>

<div class="container">
	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'grupo-view', 'enableAjaxValidation'=>true,)); ?>
	<div class="row-fluid">
		<div class="span3">
			<h4>Datos básicos</h4>
			<div class="well">
				<p>
					<?php echo $model->direccion; ?></br>
					<?php echo 'Tel: '.$model->telefono; ?></br>
					<?php echo 'Rector: '.$model->administradors[0]->nombre.' '.$model->administradors[0]->primerApellido ;?></br>
					<?php echo 'Web: '.$model->sitioWeb; ?></br>
					<?php echo 'Mail: '.$model->email; ?>
				</p>
			</div>
		</div>
		<div class="span1">
			
		</div>
		<div class="row-fluid">
			<h4><?php echo $model->nombre; ?></h4>
		<div class="span4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<h4>Publicaciones recientes</h4>
					<?php $publicaciones; $grupos; ?>
					<?php for ($i=0; $i < count($model->personas); $i++) { 
						for($j=0; $j < count($model->personas[$i]->publicacions); $j++){
							$publicaciones[]=$model->personas[$i]->publicacions[$j];
						}
					} ?>
					<?php 
						$aux;
						if (count($publicaciones)>=4) {
							$aux=4;
						}
						else{
							$aux=count($publicaciones);
						}
					?>
					<?php for ($i=0; $i < $aux; $i++) { ?>
						<hr class="hrb">
						<h4><i class="icon-file"></i><?php echo ' '.$publicaciones[$i]->nombre; ?></h4>
					<?php } ?>
					<a href=""><p align="right">Todas las publicaciones</p></a>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<?php for ($i=0; $i < count($model->personas); $i++) { 
						for($j=0; $j < count($model->personas[$i]->grupos2); $j++){
							$grupos[]=$model->personas[$i]->grupos2[$j];
						}
					} ?>
					<?php 
						$aux1;
						if (count($grupos)>=5) {
							$aux1=4;
						}
						else{
							$aux1=count($grupos);
						}
					?>
					<h4>Grupos</h4>
					<hr class="hrb">
					<?php for ($i=0; $i < $aux1; $i++) { ?>
						<?php echo ' '.$grupos[$i]->nombre."\n"; ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<?php
						$grupos;
						$gruposnombre;
						for ($i=0; $i < count($model->personas); $i++) { 
							for ($j=0; $j < count($model->personas[$i]->grupos2); $j++) { 
								$grupos[]=$model->personas[$i]->grupos2[$j];
							}
						}
						for ($i=0; $i < count($grupos); $i++) { 
							if($grupos[$i]!=null){
								$gruposnombre[]=$grupos[$i]->nombre;
							}
						}
						$gruposnombre=array_unique($gruposnombre);
						$gruposnombre=array_values($gruposnombre); ?>
						<h4><?php echo count($gruposnombre).' grupos' ?></h4>
						<hr class="hrb">
						<?php for ($i=0; $i < count($gruposnombre); $i++) { 
							if($i!=(count($gruposnombre)-1)){
								echo $gruposnombre[$i].' | ';
							}
							else{
								echo $gruposnombre[$i];
							}
						}
					?>
					
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<h4><?php echo count($model->personas).' miembros' ?></h4>
					<hr class="hrb">
					<?php
						for ($i=0; $i < count($model->personas); $i++) { 
							if($i!=(count($model->personas)-1)){
								echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido.' | ';
							}
							else{
								echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido;
							}
						}
					?>
				</div>
			</div>
		</div>
		</div>
	</div>
<!--
	<div class="span12">
		<h2 align="center"><?php echo $model->nombre ?></h2>
	</div>
	<div class="row-fluid">
		<div class="span3">
			<h4>Datos basicos</h4>
			<div>
				<UL type="circle">
					<LI><?php echo $model->direccion;?></LI>
					<?php echo '  '.CHtml::value(ciudad::model()->findByPk($model->ciudad),"nombre");?>
					<br/>
					<br/>
					<LI><?php echo $model->sitioWeb;?></LI>
					<br/>
					<LI><?php echo $model->email;?></LI>
					<br/>
					<LI><?php echo $model->telefono;?></LI>
					<br/>
				</UL>
			</div>
			<h4>Administrador</h4>
			<div>
				<?php echo $model->administradors[0]->nombre.' '.$model->administradors[0]->primerApellido ?>
				<br/>
				<br/>
				<?php echo $model->administradors[0]->email ?>
				<br/>
				<br/>
			</div>
			<h4>Rep. legal</h4>
			<div>
				<?php echo $model->representantelegals[0]->nombre.' '.$model->representantelegals[0]->primerApellido ?>
				<br/>
				<br/>
				<?php echo $model->representantelegals[0]->email ?>
				<br/>
				<br/>
			</div>
		</div>
		<div class="span9">
			<div class="row-fluid">
				<div class="span1">

				</div>
				<div class="span8">
					<h4 align="center">Integrantes</h4>
					<div class="span6">
						<?php for ($i=0; $i < count($model->personas); $i+=2) { ?>
						<div>
							<h4><?php echo $form->label($model, 'nombre');?></h4>
							<?php echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
							<?php echo $model->personas[$i]->dni; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'email');?></h4>
							<?php echo CHtml::value(direccionR::model()->findByPk($model->personas[$i]->direccionR),"email"); ?>
						</div>
						<br/>
						<br/>
						<?php } ?>
					</div>
					<div class="span5">
						<?php for ($i=1; $i < count($model->personas); $i+=2) { ?>
						<div>
							<h4><?php echo $form->label($model, 'nombre');?></h4>
							<?php echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
							<?php echo $model->personas[$i]->dni; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'email');?></h4>
							<?php echo CHtml::value(direccionR::model()->findByPk($model->personas[$i]->direccionR),"email"); ?>
						</div>
						<br/>
						<br/>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span1">
					
				</div>
				<div class="span8">
					<h4 align="center">Proyectos</h4>
					<div class="span6">
						<?php for ($i=0; $i < count($model->proyectos); $i+=2) { ?>
						<div>
							<h4><?php echo $form->label($model, 'nombre');?></h4>
							<?php echo $model->proyectos[$i]->nombre; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
							<?php echo $model->proyectos[$i]->id; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'areaConocimiento');?></h4>
							<?php echo CHtml::value(areaConocimiento::model()->findByPk($model->proyectos[$i]->areaConocimiento), "nombre"); ?>
						</div>
						<br/>
						<br/>
						<?php } ?>
					</div>
					<div class="span5">
						<?php for ($i=1; $i < count($model->proyectos); $i+=2) { ?>
						<div>
							<h4><?php echo $form->label($model, 'nombre');?></h4>
							<?php echo $model->proyectos[$i]->nombre; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
							<?php echo $model->proyectos[$i]->id; ?>
						</div>
						<div>
							<h4><?php echo $form->label($model, 'areaConocimiento');?></h4>
							<?php echo CHtml::value(areaConocimiento::model()->findByPk($model->proyectos[$i]->areaConocimiento), "nombre"); ?>
						</div>
						<br/>
						<br/>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->endWidget(); ?>
</div>
-->