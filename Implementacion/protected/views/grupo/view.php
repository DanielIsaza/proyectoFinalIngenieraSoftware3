<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->pageTitle='Grupo - '.$model->id;
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id,
);?>

<div class="container">
	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'grupo-view', 'enableAjaxValidation'=>true,)); ?>
	<div class="row-fluid">
		<div class="span3">
			<h4>Datos básicos</h4>
			<div class="well">
				<?php echo $model->descripcion; ?>
			</div>
			<br>
			<h4>Perfiles</h4>
			<div class="well">
				<?php echo 'Miembros | '.(count($model->personas)); ?>
			</div>
			<a href=""><p align="right">Todos los miembros</p></a>
		</div>
		<div class="span9">
			<div class="row-fluid">
				<h4><?php echo $model->nombre; ?></h4>
				<div class="panel panel-primary">
					<div class="panel-body">
						<h4>Sectores de aplicación </h4>
						<?php $organizaciones; ?>
						<?php for ($i=0; $i < count($model->personas); $i++) { 
							$organizaciones[]=$model->personas[$i]->organizacion0;
						} ?>
						<?php $organizacionesid; ?>
						<?php for ($i=0; $i < count($organizaciones); $i++) { 
							if($organizaciones[$i]!=null){
								$organizacionesid[]=$organizaciones[$i]->nit;
							}
						} ?>
						<?php $organizacionesid=array_unique($organizacionesid); $organizacionesid=array_values($organizacionesid); ?>
						<?php for ($i=0; $i < count($organizacionesid); $i+=2) { ?>
						<hr class="hrb">
							<div class="row-fluid">
								<div class="span6">
									<h4><?php $organi=organizacion::model()->findByPk($organizacionesid[$i]); 
									echo $organi->nombre;
									?></h4>
									<?php echo count($organi->personas).' miembros'; ?>
								</div>
								<?php if(($i+1)!=count($organizacionesid)) {?>
									<div class="span6">
										<h4><?php $organi=organizacion::model()->findByPk($organizacionesid[$i+1]); 
										echo $organi->nombre;
										?></h4>
										<?php echo count($organi->personas).' miembros'; ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="panel panel-primary">
						<div class="panel-body">
							<h4>Líneas de investigación</h4>
							<hr class="hrb">
							<?php echo $model->areaConocimiento0->nombre; ?>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="panel panel-primary">
						<div class="panel-body">
							<h4><?php echo count($model->personas).' miembros' ?></h4>
							<hr class="hrb">
							<p>
							<?php for ($i=0; $i < count($model->personas); $i++) { 
								if($i<(count($model->personas)-1)){
									echo $model->personas[$i]->nombre.' | ';
								}
								else{
									echo $model->personas[$i]->nombre;
								}
							} ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 
	<div class="span12">
		<h2 align="center">Datos del grupo</h2>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span5">
			<div>
				<h4><?php echo $form->label($model, 'nombre');?></h4>
				<?php echo $model->nombre;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
				<?php echo $model->id;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'fechaCreaci&oacuten');?></h4>
				<?php echo $model->fechaCreacion;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'programaPrincipal');?></h4>
				<?php echo $model->programaPrincipal;?>
			</div>
		</div>
		<div class="span5">
			<div>
				<h4><?php echo $form->label($model, 'programaSecundario');?></h4>
				<?php echo $model->programaSecundario;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'granArea');?></h4>
				<?php echo CHtml::value(granArea::model()->findByPk($model->granArea), "nombre");?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'areaConocimiento');?></h4>
				<?php echo CHtml::value(areaConocimiento::model()->findByPk($model->areaConocimiento), "nombre");?>
			</div>
		</div>
	</div>
	<hr>
	<div class="span12">
		<h3 align="center">Administradores</h3>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span5">
			<h4>Director</h4>
			<div>
				<h4><?php echo $form->label($model, 'nombre');?></h4>
				<?php echo CHtml::value(persona::model()->findByPk($model->director), "nombre").' '.CHtml::value(persona::model()->findByPk($model->director), "primerApellido").' '.CHtml::value(persona::model()->findByPk($model->director), "segundoApellido");?>
			</div>
			<div>
				<?php if(CHtml::value(persona::model()->findByPk($model->director), "nombreBibliografico")!=''){?>
				<h4><?php echo $form->label($model, 'nombreBibliografico');?></h4>
				<?php echo CHtml::value(persona::model()->findByPk($model->director), "nombreBibliografico");?>
				<?php }?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionR::model()->findByPk(CHtml::value(persona::model()->findByPk($model->director),"direccionR")),"ciudad")),"nombre")) ;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'email');?></h4>
				<?php echo CHtml::value(direccionR::model()->findByPk(CHtml::value(persona::model()->findByPk($model->director),"direccionR")),"email") ;?>
			</div>
		</div>
		<div class="span5">
			<h4>Codirector</h4>
			<div>
				<h4><?php echo $form->label($model, 'nombre');?></h4>
				<?php echo CHtml::value(persona::model()->findByPk($model->codirector), "nombre").' '.CHtml::value(persona::model()->findByPk($model->codirector), "primerApellido").' '.CHtml::value(persona::model()->findByPk($model->codirector), "segundoApellido");?>
			</div>
			<div>
				<?php if(CHtml::value(persona::model()->findByPk($model->codirector), "nombreBibliografico")!=''){?>
				<h4><?php echo $form->label($model, 'nombrebBibliografico');?></h4>
				<?php echo CHtml::value(persona::model()->findByPk($model->codirector), "nombreBibliografico");?>
				<?php }?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionR::model()->findByPk(CHtml::value(persona::model()->findByPk($model->codirector),"direccionR")),"ciudad")),"nombre") ;?>
			</div>
			<div>
				<h4><?php echo $form->label($model, 'email');?></h4>
				<?php echo CHtml::value(direccionR::model()->findByPk(CHtml::value(persona::model()->findByPk($model->codirector),"direccionR")),"email") ;?>
			</div>
		</div>
	</div>
	<hr>
	<div class="span12">
		<h3 align="center">Integrantes</h3>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span10">
			<?php echo count($model->personas)." integrantes" ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span10">
			<div class="span5">
				<?php for ($i=0; $i < count($model->personas); $i+=2) { ?>
				<div>
					<h4><?php echo $form->label($model, 'nombre');?></h4>
					<?php echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido.' '.$model->personas[$i]->segundoApellido; ?>
				</div>
				<div>
					<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
					<?php echo $model->personas[$i]->dni; ?>
				</div>
				<div>
					<h4><?php echo $form->label($model, 'email');?></h4>
					<?php echo CHtml::value(direccionR::model()->findByPk($model->personas[$i]->direccionR),"email"); ?>
				</div>
				<?php } ?>
			</div>
			<div class="span5">
				<?php for ($i=1; $i < count($model->personas); $i+=2) { ?>
				<div>
					<h4><?php echo $form->label($model, 'nombre');?></h4>
					<?php echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido.' '.$model->personas[$i]->segundoApellido; ?>
				</div>
				<div>
					<h4><?php echo $form->label($model, 'identificaci&oacuten');?></h4>
					<?php echo $model->personas[$i]->dni; ?>
				</div>
				<div>
					<h4><?php echo $form->label($model, 'email');?></h4>
					<?php echo CHtml::value(direccionR::model()->findByPk($model->personas[$i]->direccionR),"email"); ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php $this->endWidget(); ?>
</div>
-->