<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni'); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'primerApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'segundoApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreBibliografico'); ?>
		<?php echo $form->textField($model,'nombreBibliografico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreBibliografico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento'); ?>
		<?php echo $form->error($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionR'); ?>
		<?php echo $form->textField($model,'direccionR'); ?>
		<?php echo $form->error($model,'direccionR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionP'); ?>
		<?php echo $form->textField($model,'direccionP'); ?>
		<?php echo $form->error($model,'direccionP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario'); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoDocumento'); ?>
		<?php echo $form->textField($model,'tipoDocumento'); ?>
		<?php echo $form->error($model,'tipoDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->textField($model,'genero'); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudadExpedicion'); ?>
		<?php echo $form->textField($model,'ciudadExpedicion'); ?>
		<?php echo $form->error($model,'ciudadExpedicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudadNacimiento'); ?>
		<?php echo $form->textField($model,'ciudadNacimiento'); ?>
		<?php echo $form->error($model,'ciudadNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion'); ?>
		<?php echo $form->error($model,'organizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->