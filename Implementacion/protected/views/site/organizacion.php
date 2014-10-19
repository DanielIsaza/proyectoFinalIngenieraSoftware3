<?php
/* @var $this OrganizacionController */
/* @var $model Organizacion */
/* @var $form CActiveForm */
$this->pageTitle=Yii::app()->name . ' - Registro organizacion';
$this->breadcrumbs=array(
	'RegistrarOrganizacion',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizacion-organizacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit'); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'sigla'); ?>
		<?php echo $form->textField($model,'sigla'); ?>
		<?php echo $form->error($model,'sigla'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax'); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'sitioWeb'); ?>
		<?php echo $form->textField($model,'sitioWeb'); ?>
		<?php echo $form->error($model,'sitioWeb'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'representanteLegal'); ?>
		<?php echo $form->textField($model,'representanteLegal'); ?>
		<?php echo $form->error($model,'representanteLegal'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Log_login'); ?>
		<?php echo $form->textField($model,'Log_login'); ?>
		<?php echo $form->error($model,'Log_login'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Registrar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->