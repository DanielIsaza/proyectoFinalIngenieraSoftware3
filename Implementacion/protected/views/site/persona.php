<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<h1>Registro persona</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroDocumento'); ?>
		<?php echo $form->textField($model,'numeroDocumento'); ?>
		<?php echo $form->error($model,'numeroDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoDocumento_id'); ?>
		<?php echo $form->textField($model,'TipoDocumento_id'); ?>
		<?php echo $form->error($model,'TipoDocumento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres'); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido'); ?>
		<?php echo $form->error($model,'primerApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido'); ?>
		<?php echo $form->error($model,'segundoApellido'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Registrarse',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->