<?php
/* @var $this DireccionRController */
/* @var $model DireccionR */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-r-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telFijo'); ?>
		<?php echo $form->textField($model,'telFijo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telFijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telMovil'); ?>
		<?php echo $form->textField($model,'telMovil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telMovil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apartadoPostal'); ?>
		<?php echo $form->textField($model,'apartadoPostal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apartadoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codPostal'); ?>
		<?php echo $form->textField($model,'codPostal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SitioWeb'); ?>
		<?php echo $form->textField($model,'SitioWeb',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SitioWeb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad'); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->