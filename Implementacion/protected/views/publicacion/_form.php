<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'revista'); ?>
		<?php echo $form->textField($model,'revista',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'revista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paginas'); ?>
		<?php echo $form->textField($model,'paginas'); ?>
		<?php echo $form->error($model,'paginas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->