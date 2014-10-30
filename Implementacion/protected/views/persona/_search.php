<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dni'); ?>
		<?php echo $form->textField($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreBibliografico'); ?>
		<?php echo $form->textField($model,'nombreBibliografico',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionR'); ?>
		<?php echo $form->textField($model,'direccionR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionP'); ?>
		<?php echo $form->textField($model,'direccionP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoDocumento'); ?>
		<?php echo $form->textField($model,'tipoDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->textField($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudadExpedicion'); ?>
		<?php echo $form->textField($model,'ciudadExpedicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudadNacimiento'); ?>
		<?php echo $form->textField($model,'ciudadNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->