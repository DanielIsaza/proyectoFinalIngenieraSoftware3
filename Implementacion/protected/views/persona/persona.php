<?php
/* @var $this personaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<?php
$this->pageTitle=Yii::app()->name . '- Registro persona';
$this->breadcrumbs=array(
	'Resgistro persona',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="container">
    <h4>Datos personales:</h4>
	<div>
		<?php echo $form->labelEx($model,'tipoDocumento'); ?>
		<?php echo $form->dropDownList($model,'tipoDocumento',CHtml::listData(Tipodocumento::model()->findAll(),"id","nombre")); ?>
		<?php echo $form->error($model,'tipoDocumento'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Numero de documento'); ?>
		<?php echo $form->textField($model,'dni'); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ciudadExpedicion'); ?>
		<?php echo $form->dropDownList($model,'ciudadExpedicion',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
		<?php echo $form->error($model,'ciudadExpedicion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido'); ?>
		<?php echo $form->error($model,'primerApellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido'); ?>
		<?php echo $form->error($model,'segundoApellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',CHtml::listData(Genero::model()->findAll(),"id","nombre")); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

<div>
        <?php echo $form->labelEx($model,'fechaNacimiento'); ?>
        <?php 
           $this->widget("zii.widgets.jui.CJuiDatePicker", array(
                    "attribute"=>'fechaNacimiento',
                    "model"=>$model,
                    "language"=>"es",
                    "options"=>array(
                            "dateFormat"=>"yy-mm-dd",
                            'showButtonPanel' => true,
                            'changeYear' => true,
                            'changeYear' => true,
                            'yearRange' => '-80:-1',
                            'minDate' => '-80Y',
                            'maxDate' => '-1Y',
                            )
         ))?>
        <?php echo $form->error($model,'fechaNacimiento'); ?>
    </div>

	<div>
		<?php echo $form->labelEx($model,'ciudadNacimiento'); ?>
		<?php echo $form->dropDownList($model,'ciudadNacimiento',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
		<?php echo $form->error($model,'ciudadNacimiento'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreBibliografico'); ?>
		<?php echo $form->textField($model,'nombreBibliografico'); ?>
		<?php echo $form->error($model,'nombreBibliografico'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion'); ?>
		<?php echo $form->error($model,'organizacion'); ?>
	</div>

</div>
<h4>Dirección profesional:</h4>
	<div>
        <?php echo $form->labelEx($modeldp,'ciudad'); ?>
        <?php echo $form->dropDownList($modeldp,'ciudad',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
        <?php echo $form->error($modeldp,'ciudad'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'direccion'); ?>
        <?php echo $form->textField($modeldp,'direccion'); ?>
        <?php echo $form->error($model,'direccion'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'barrio'); ?>
        <?php echo $form->textField($modeldp,'barrio'); ?>
        <?php echo $form->error($modeldp,'barrio'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'telFijo'); ?>
        <?php echo $form->textField($modeldp,'telFijo'); ?>
        <?php echo $form->error($modeldp,'telFijo'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'apartadoPostal'); ?>
        <?php echo $form->textField($modeldp,'apartadoPostal'); ?>
        <?php echo $form->error($modeldp,'apartadoPostal'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'codigoPostal'); ?>
        <?php echo $form->textField($modeldp,'codigoPostal'); ?>
        <?php echo $form->error($modeldp,'codigoPostal'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'email'); ?>
        <?php echo $form->textField($modeldp,'email'); ?>
        <?php echo $form->error($modeldp,'email'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldp,'sitioWeb'); ?>
        <?php echo $form->textField($modeldp,'sitioWeb'); ?>
        <?php echo $form->error($modeldp,'sitioWeb'); ?>
    </div>
<h4>Dirección de residencia:</h4>
    <div>
        <?php echo $form->labelEx($modeldr,'ciudad'); ?>
        <?php echo $form->dropDownList($modeldr,'ciudad',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
        <?php echo $form->error($modeldr,'ciudad'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'direccion'); ?>
        <?php echo $form->textField($modeldr,'direccion'); ?>
        <?php echo $form->error($modeldr,'direccion'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'barrio'); ?>
        <?php echo $form->textField($modeldr,'barrio'); ?>
        <?php echo $form->error($modeldr,'barrio'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'telFijo'); ?>
        <?php echo $form->textField($modeldr,'telFijo'); ?>
        <?php echo $form->error($modeldr,'telFijo'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'telMovil'); ?>
        <?php echo $form->textField($modeldr,'telMovil'); ?>
        <?php echo $form->error($modeldr,'telMovil'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'apartadoPostal'); ?>
        <?php echo $form->textField($modeldr,'apartadoPostal'); ?>
        <?php echo $form->error($modeldr,'apartadoPostal'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'codPostal'); ?>
        <?php echo $form->textField($modeldr,'codPostal'); ?>
        <?php echo $form->error($modeldr,'codPostal'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'email'); ?>
        <?php echo $form->textField($modeldr,'email'); ?>
        <?php echo $form->error($modeldr,'email'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($modeldr,'SitioWeb'); ?>
        <?php echo $form->textField($modeldr,'SitioWeb'); ?>
        <?php echo $form->error($modeldr,'SitioWeb'); ?>
    </div>
<h4>Datos de logeo:</h4>
	 <div >
        <?php echo $form->labelEx($modelu,'login'); ?>
        <?php echo $form->textField($modelu,'login'); ?>
        <?php echo $form->error($modelu,'login'); ?>
    </div>

	<div>
        <?php echo $form->labelEx($modelu,'password'); ?>
        <?php echo $form->passwordField($modelu,'password'); ?>
        <?php echo $form->error($modelu,'password'); ?>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div>
        <?php echo $form->labelEx($verifyCode,'Codigo de verificaci&oacuten'); ?>
        <?php echo $form->error($verifyCode,'verifyCode'); ?>
    </div>
        
        <div>
            <?php $this->widget('CCaptcha'); ?>
        </div>
        <div>
        <?php echo $form->textField($verifyCode,'verifyCode'); ?>
        </div>

        <div class="hint">Por favor ingrese los caracteres indicados en la imagen.
        <br/>No distinguen entre mayusculas y minusculas.</div>
    </div>
    <?php endif; ?>

	<div>
		<?php echo CHtml::submitButton('Registrar',array("class"=>"btn btn-primary btn-large")); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->