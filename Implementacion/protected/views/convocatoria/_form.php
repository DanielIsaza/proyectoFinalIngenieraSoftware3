<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objeto'); ?>
		<?php echo $form->textField($model,'objeto',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'objeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirigido'); ?>
		<?php echo $form->textField($model,'dirigido',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'dirigido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura'); ?>
		<?php echo $form->error($model,'fechaApertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre'); ?>
		<?php echo $form->error($model,'fechaCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPreliminar'); ?>
		<?php echo $form->textField($model,'fechaPreliminar'); ?>
		<?php echo $form->error($model,'fechaPreliminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaDefinitiva'); ?>
		<?php echo $form->textField($model,'fechaDefinitiva'); ?>
		<?php echo $form->error($model,'fechaDefinitiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximoFinanciacion'); ?>
		<?php echo $form->textField($model,'maximoFinanciacion'); ?>
		<?php echo $form->error($model,'maximoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimoFinanciacion'); ?>
		<?php echo $form->textField($model,'minimoFinanciacion'); ?>
		<?php echo $form->error($model,'minimoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maxMontoFinanciacion'); ?>
		<?php echo $form->textField($model,'maxMontoFinanciacion'); ?>
		<?php echo $form->error($model,'maxMontoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximoMeses'); ?>
		<?php echo $form->textField($model,'maximoMeses'); ?>
		<?php echo $form->error($model,'maximoMeses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'montoTotal'); ?>
		<?php echo $form->textField($model,'montoTotal'); ?>
		<?php echo $form->error($model,'montoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtipo'); ?>
		<?php echo $form->textField($model,'subtipo'); ?>
		<?php echo $form->error($model,'subtipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'areaConocimiento'); ?>
		<?php echo $form->textField($model,'areaConocimiento'); ?>
		<?php echo $form->error($model,'areaConocimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persona'); ?>
		<?php echo $form->textField($model,'persona'); ?>
		<?php echo $form->error($model,'persona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->