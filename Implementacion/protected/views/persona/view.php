<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->pageTitle='Persona - '.$model->dni;
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->dni,
);?>
<div class="container">

	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'persona-view', 'enableAjaxValidation'=>true,)); ?>
	<div class="span12">
		<div class="span3">
			<br>
			<br>
			<br>
			<h4>Trabajos</h4>
			<div class="well">
				<h4><i class="icon-folder-open"></i><?php echo ' ' ?>Redes</h4>
				<?php for ($i=0; $i < count($model->reds); $i++) { ?>
					<p><?php echo $model->reds[$i]->nombre ?></p>
				<?php } ?>
			</div>
			<div class="well">
				<h4><i class="icon-comment"></i><?php echo ' ' ?>Grupos</h4>
				<?php for ($i=0; $i < count($model->grupos1); $i++) { ?>
					<p><?php echo $model->grupos1[$i]->nombre.' (director)' ?></p>
				<?php } ?>
				<?php for ($i=0; $i < count($model->grupos); $i++) { ?>
					<p><?php echo $model->grupos[$i]->nombre.' (codirector)' ?></p>
				<?php } ?>
				<?php for ($i=0; $i < count($model->grupos2); $i++) { ?>
					<p><?php echo $model->grupos2[$i]->nombre.' (miembro)' ?></p>
				<?php } ?>
			</div>
		</div>
		<div class="span9">
			<div class="span12">
				<h4><?php echo $model->nombre.' '.$model->primerApellido.' '.$model->segundoApellido;?></h4>
				<div class="panel panel-primary">
					<div class="panel-body">
						<h4><i class="icon-briefcase"></i><?php echo ' ' ?>Posición </h4>
						<hr class="hrb">
						<?php if($model->organizacion0!=null) {?>
						<h4><?php echo $form->label($model, 'Miembro ');?></h4>
						<?php echo $model->organizacion0->nombre ?>
						<br>
						<br>
						<?php }?>
						<h4><i class="icon-user"></i><?php echo ' ' ?>Áreas de actuación </h4>
						<hr class="hrb">
						<p>
							<?php for ($i=0; $i < count($model->proyectos); $i++) { ?>
								<?php if($i!=count($model->proyectos)-1) { ?>
									<?php echo $model->proyectos[$i]->nombre.' | ' ;?>
								<?php } else { ?>
									<?php echo $model->proyectos[$i]->nombre; ?>
								<?php } ?>
							<?php } ?>
							<?php for ($i=0; $i < count($model->publicacions); $i++) { ?>
								<?php if(count($model->proyectos)>0) {?>
									<?php echo ' | '.$model->publicacions[$i]->nombre ?>
								<?php } else { ?>
									<?php if($i!=count($model->publicacions)-1) { ?>
									<?php echo $model->publicacions[$i]->nombre.' | ' ;?>
									<?php } else { ?>
										<?php echo $model->publicacions[$i]->nombre; ?>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</p>
						<br>
						<h4><i class="icon-globe"></i><?php echo ' ' ?>Páginas web </h4>
						<hr class="hrb">
						<p><?php echo $model->direccionR0->SitioWeb ?></p>
						<p><?php echo $model->direccionP0->sitioWeb ?></p>
						<br>
						<h4><i class="icon-search"></i><?php echo ' ' ?>Líneas de investigación </h4>
						<hr class="hrb">
						<?php $areas; ?>
						<?php if(count($model->proyectos)>0){?>
						<?php for ($i=0; $i < count($model->proyectos); $i++) { 
							$areas[$i]=areaConocimiento::model()->find('id='.$model->proyectos[$i]->areaConocimiento);
						} ?>
						<?php $areasnombre; ?>
						<?php for ($i=0, $j=0; $i < count($areas); $i++) { 
							if($areas[$i]!=null){
								$areasnombre[$j]=$areas[$i]->nombre;
								$j++;
							}
						} ?>
						<?php  for ($i=0; $i < count($areasnombre); $i++) { ?>
							<p><?php echo $areasnombre[$i] ?></p>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 
	<div class="span12">
		<h2 align="center">Datos personales</h2>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
	 	<div class="span5">
		 	<div>
		 		<h4><?php echo $form->label($model, 'tipoDocumento');?></h4>
				<?php echo $form->label($model, CHtml::value(tipoDocumento::model()->findByPk($model->tipoDocumento),"nombre")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'Numero de identificacion: ');?></h4>
		 		<?php echo $form->label($model, $model->dni);?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'ciudadExpedicion');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk($model->ciudadExpedicion),"nombre")) ;?>
		 	</div>
		</div>
		<div class="span5">
		 	<div>
		 		<?php if($model->nombreBibliografico!=''){?>
		 		<h4><?php echo $form->label($model, 'nombreBibliografico');?></h4>
		 		<?php echo $form->label($model, $model->nombreBibliografico);?>
		 		<?php }?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'fechaNacimiento');?></h4>
		 		<?php echo $form->label($model, $model->fechaNacimiento);?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'ciudadNacimiento');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk($model->ciudadNacimiento),"nombre")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'genero');?></h4>
				<?php echo $form->label($model, CHtml::value(genero::model()->findByPk($model->genero),"nombre")) ;?>
		 	</div>
		 	<div>
		 		<?php if($model->organizacion!=''){?>
		 		<h4><?php echo $form->label($model, 'organizacion');?></h4>
		 		<?php echo $form->label($model, $model->organizacion);?>
		 		<?php }?>
		 	</div>
		</div>
	</div>
	<hr>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span5">
	 		<h3>Direccion residencial</h3>
	 		<div>
		 		<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionR::model()->findByPk($model->direccionR),"ciudad")),"nombre")) ;?>
		 	</div>
	 		<div>
		 		<h4><?php echo $form->label($model, 'direccion');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"direccion")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'barrio');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"barrio")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoFijo');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"telFijo")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoMovil');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"telMovil")) ;?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'apartadoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")) ;?>
				<?php }?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'codigoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")) ;?>
				<?php }?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'email');?></h4>
				<?php echo CHtml::value(direccionR::model()->findByPk($model->direccionR),"email") ;?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")!=''){?>
		 		<h4><?php echo $form->label($model, 'sitioWeb');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")) ;?>
				<?php }?>
		 	</div>

		</div>
		<div class="span5">
			<h3>Direccion profesional</h3>
			<div>
		 		<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionP::model()->findByPk($model->direccionR),"ciudad")),"nombre")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'direccion');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"direccion")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'barrio');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"barrio")) ;?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoFijo');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"telFijo")) ;?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'apartadoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"apartadoPostal")) ;?>
				<?php }?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'codigoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"codPostal")) ;?>
				<?php }?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'email');?></h4>
		 		<?php echo CHtml::value(direccionP::model()->findByPk($model->direccionR),"email") ;?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")!=''){?>
		 		<h4><?php echo $form->label($model, 'sitioWeb');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"sitioWeb")) ;?>
				<?php }?>
		 	</div>
		</div>
	</div>
	-->
	<?php $this->endWidget(); ?>
</div>
