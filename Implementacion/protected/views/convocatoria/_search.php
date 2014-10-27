<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objeto'); ?>
		<?php echo $form->textField($model,'objeto',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirigido'); ?>
		<?php echo $form->textField($model,'dirigido',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPreliminar'); ?>
		<?php echo $form->textField($model,'fechaPreliminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaDefinitiva'); ?>
		<?php echo $form->textField($model,'fechaDefinitiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximoFinanciacion'); ?>
		<?php echo $form->textField($model,'maximoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimoFinanciacion'); ?>
		<?php echo $form->textField($model,'minimoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maxMontoFinanciacion'); ?>
		<?php echo $form->textField($model,'maxMontoFinanciacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximoMeses'); ?>
		<?php echo $form->textField($model,'maximoMeses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoTotal'); ?>
		<?php echo $form->textField($model,'montoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtipo'); ?>
		<?php echo $form->textField($model,'subtipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'areaConocimiento'); ?>
		<?php echo $form->textField($model,'areaConocimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'persona'); ?>
		<?php echo $form->textField($model,'persona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->