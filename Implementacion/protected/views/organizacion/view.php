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
				<?php echo $model->representantelegals[0]->nombre.' '.$model->administradors[0]->primerApellido ?>
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