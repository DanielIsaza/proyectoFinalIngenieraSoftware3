<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->pageTitle=Yii::app()->name . '- '.$model->dni;
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->dni,
);?>
<div class="container">

	<?php /* $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'dni',
			'nombre',
			'primerApellido',
			'segundoApellido',
			'nombreBibliografico',
			'fechaNacimiento',
			'direccionR',
			'direccionP',
			'usuario',
			'tipoDocumento',
			'genero',
			'ciudadExpedicion',
			'ciudadNacimiento',
			'organizacion',
		),
	));*/
	 ?>

	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'persona-view', 'enableAjaxValidation'=>true,)); ?>

	<div class="span12">
		<h2 align="center">Datos personales</h2>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
	 	<div class="span5">
		 	<div>
		 		<h4><?php echo $form->label($model, 'tipoDocumento');?></h4>
				<?php echo $form->label($model, CHtml::value(tipoDocumento::model()->findByPk($model->tipoDocumento),"nombre")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'Numero de identificacion: ');?></h4>
		 		<?php echo $form->label($model, $model->dni);?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'ciudadExpedicion');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk($model->ciudadExpedicion),"nombre")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'nombre');?></h4>
		 		<?php echo $form->label($model, $model->nombre);?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'primerApellido');?></h4>
		 		<?php echo $form->label($model, $model->primerApellido);?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'segundoApellido');?></h4>
		 		<?php echo $form->label($model, $model->segundoApellido);?>
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
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk($model->ciudadNacimiento),"nombre")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'genero');?></h4>
				<?php echo $form->label($model, CHtml::value(genero::model()->findByPk($model->genero),"nombre")) ?>
		 	</div>
		 	<div>
		 		<?php if($model->organizacion!=''){?>
		 		<h4><?php echo $form->label($model, 'organizacion');?></h4>
		 		<?php echo $form->label($model, $model->organizacion);?>
		 		<?php }?>
		 	</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2">
			
		</div>
		<div class="span5">
	 		<h3>Direccion residencial</h3>
	 		<div>
		 		<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionR::model()->findByPk($model->direccionR),"ciudad")),"nombre")) ?>
		 	</div>
	 		<div>
		 		<h4><?php echo $form->label($model, 'direccion');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"direccion")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'barrio');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"barrio")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoFijo');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"telFijo")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoMovil');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"telMovil")) ?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'apartadoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")) ?>
				<?php }?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'codigoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")) ?>
				<?php }?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'email');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"email")) ?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")!=''){?>
		 		<h4><?php echo $form->label($model, 'sitioWeb');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")) ?>
				<?php }?>
		 	</div>

		</div>
		<div class="span5">
			<h3>Direccion profesional</h3>
			<div>
		 		<h4><?php echo $form->label($model, 'ciudad');?></h4>
				<?php echo $form->label($model, CHtml::value(ciudad::model()->findByPk(CHtml::value(direccionP::model()->findByPk($model->direccionR),"ciudad")),"nombre")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'direccion');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"direccion")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'barrio');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"barrio")) ?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'telefonoFijo');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"telFijo")) ?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"apartadoPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'apartadoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"apartadoPostal")) ?>
				<?php }?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"codPostal")!=''){?>
		 		<h4><?php echo $form->label($model, 'codigoPostal');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"codPostal")) ?>
				<?php }?>
		 	</div>
		 	<div>
		 		<h4><?php echo $form->label($model, 'email');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"email")) ?>
		 	</div>
		 	<div>
		 		<?php if(CHtml::value(direccionR::model()->findByPk($model->direccionR),"sitioWeb")!=''){?>
		 		<h4><?php echo $form->label($model, 'sitioWeb');?></h4>
				<?php echo $form->label($model, CHtml::value(direccionP::model()->findByPk($model->direccionR),"sitioWeb")) ?>
				<?php }?>
		 	</div>
		</div>
	</div>
	 <?php $this->endWidget(); ?>
</div>
