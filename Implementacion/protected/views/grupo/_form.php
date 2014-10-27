<?php
/* @var $this GrupoController */
/* @var $model Grupo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grupo-form',
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
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programaPrincipal'); ?>
		<?php echo $form->textField($model,'programaPrincipal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'programaPrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programaSecundario'); ?>
		<?php echo $form->textField($model,'programaSecundario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'programaSecundario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'areaConocimiento'); ?>
		<?php echo $form->textField($model,'areaConocimiento'); ?>
		<?php echo $form->error($model,'areaConocimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'director'); ?>
		<?php echo $form->textField($model,'director'); ?>
		<?php echo $form->error($model,'director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codirector'); ?>
		<?php echo $form->textField($model,'codirector'); ?>
		<?php echo $form->error($model,'codirector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'granArea'); ?>
		<?php echo $form->textField($model,'granArea'); ?>
		<?php echo $form->error($model,'granArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->