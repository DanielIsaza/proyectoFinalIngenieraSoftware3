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
<?php $pais=new Pais; $departamento=new Departamento; ?>
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
        <div class="well">
            <h4>Datos personales:</h4>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'nombre'); ?>
                <?php echo $form->textField($model,'nombre'); ?>
                <?php echo $form->error($model,'nombre'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'primerApellido'); ?>
                <?php echo $form->textField($model,'primerApellido'); ?>
                <?php echo $form->error($model,'primerApellido'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'segundoApellido'); ?>
                <?php echo $form->textField($model,'segundoApellido'); ?>
                <?php echo $form->error($model,'segundoApellido'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span8">
                <?php echo $form->labelEx($model,'nombreEnCitacionesBibliograficas'); ?>
                <?php echo $form->textField($model,'nombreBibliografico', array('class' => 'span11')); ?>
                <?php echo $form->error($model,'nombreBibliografico'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'sexo'); ?>
                <?php echo $form->dropDownList($model,'genero',CHtml::listData(Genero::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'genero'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'tipoDocumento'); ?>
                <?php echo $form->dropDownList($model,'tipoDocumento',CHtml::listData(Tipodocumento::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'tipoDocumento'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'Numero de documento'); ?>
                <?php echo $form->textField($model,'dni'); ?>
                <?php echo $form->error($model,'dni'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'ciudadExpedicion'); ?>
                <?php echo $form->dropDownList($model,'ciudadExpedicion',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'ciudadExpedicion'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'paisDeNacimiento'); ?>
                <?php echo $form->dropDownList($pais,'id',CHtml::listData(Pais::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'paisDeNacimiento'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'departamento'); ?>
                <?php echo $form->dropDownList($departamento,'id',CHtml::listData(Departamento::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'departamento'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'ciudadNacimiento'); ?>
                <?php echo $form->dropDownList($model,'ciudadNacimiento',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'ciudadNacimiento'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
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
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="well">
            <h4>Dirección personal:</h4>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'direccion'); ?>
                <?php echo $form->textField($modeldr,'direccion'); ?>
                <?php echo $form->error($modeldr,'direccion'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'barrio'); ?>
                <?php echo $form->textField($modeldr,'barrio'); ?>
                <?php echo $form->error($modeldr,'barrio'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'ciudad'); ?>
                <?php echo $form->dropDownList($modeldr,'ciudad',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($modeldr,'ciudad'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'departamento'); ?>
                <?php echo $form->dropDownList($departamento,'id',CHtml::listData(Departamento::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'departamento'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'telFijo'); ?>
                <?php echo $form->textField($modeldr,'telFijo'); ?>
                <?php echo $form->error($modeldr,'telFijo'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'telMovil'); ?>
                <?php echo $form->textField($modeldr,'telMovil'); ?>
                <?php echo $form->error($modeldr,'telMovil'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'apartadoPostal'); ?>
                <?php echo $form->textField($modeldr,'apartadoPostal'); ?>
                <?php echo $form->error($modeldr,'apartadoPostal'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'codPostal'); ?>
                <?php echo $form->textField($modeldr,'codPostal'); ?>
                <?php echo $form->error($modeldr,'codPostal'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldr,'email'); ?>
                <?php echo $form->textField($modeldr,'email'); ?>
                <?php echo $form->error($modeldr,'email'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span8">
                <?php echo $form->labelEx($modeldr,'SitioWeb'); ?>
            <?php echo $form->textField($modeldr,'SitioWeb', array('class' => 'span11')); ?>
            <?php echo $form->error($modeldr,'SitioWeb'); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="well">
            <h4>Dirección profesional</h4>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'instituci&oacuten'); ?>
                <?php echo $form->dropDownList($model,'organizacion',CHtml::listData(Organizacion::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'organizacion'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'direccionDeLaInstituci&oacuten'); ?>
                <?php echo $form->textField($modeldp,'direccion'); ?>
                <?php echo $form->error($model,'direccion'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'barrio'); ?>
                <?php echo $form->textField($modeldp,'barrio'); ?>
                <?php echo $form->error($modeldp,'barrio'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($model,'pais'); ?>
                <?php echo $form->dropDownList($pais,'id',CHtml::listData(Pais::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'pais'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($model,'departamento'); ?>
                <?php echo $form->dropDownList($departamento,'id',CHtml::listData(Departamento::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($model,'departamento'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'ciudad'); ?>
                <?php echo $form->dropDownList($modeldp,'ciudad',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
                <?php echo $form->error($modeldp,'ciudad'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'telFijo'); ?>
                <?php echo $form->textField($modeldp,'telFijo'); ?>
                <?php echo $form->error($modeldp,'telFijo'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'apartadoPostal'); ?>
                <?php echo $form->textField($modeldp,'apartadoPostal'); ?>
                <?php echo $form->error($modeldp,'apartadoPostal'); ?>
            </div>
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'codigoPostal'); ?>
                <?php echo $form->textField($modeldp,'codigoPostal'); ?>
                <?php echo $form->error($modeldp,'codigoPostal'); ?>
            </div>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($modeldp,'emailInstitucional'); ?>
                <?php echo $form->textField($modeldp,'email'); ?>
                <?php echo $form->error($modeldp,'email'); ?>
            </div>
            <div class="span8">
                <?php echo $form->labelEx($modeldp,'sitioWebInstitucional'); ?>
                <?php echo $form->textField($modeldp,'sitioWeb', array('class' => 'span11')); ?>
                <?php echo $form->error($modeldp,'sitioWeb'); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="well">
            <h4>Datos para ingresar a la comunidad</h4>
        </div>
        <div class="span12">
            <div class="span4">
                <?php echo $form->labelEx($modelu,'usuarioSIIC'); ?>
                <?php echo $form->textField($modelu,'login'); ?>
                <?php echo $form->error($modelu,'login'); ?>
            </div>
            <div class="span4">
                <?php $sigla='SIIC' ?>
                <?php echo $form->labelEx($modelu,'claveSIIC'); ?>
                <?php echo $form->passwordField($modelu,'password'); ?>
                <?php echo $form->error($modelu,'password'); ?>
            </div>
            <div class="span4">
                <?php $sigla='SIIC' ?>
                <?php echo $form->labelEx($modelu,'ConfirmarClaveSIIC'); ?>
                <?php echo $form->passwordField($modelu,'password'); ?>
                <?php echo $form->error($modelu,'password'); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <?php if(CCaptcha::checkRequirements()): ?>
        <div class="well">
            <h4>Código de verificación</h4>
        </div>
            
            <div>
                <?php $this->widget('CCaptcha'); ?>
            </div>
            <div>
            <?php echo $form->textField($verifyCode,'verifyCode'); ?>
            </div>

            <div class="hint">Por favor ingrese los caracteres indicados en la imagen.
            <br/>No distinguen entre mayusculas y minusculas.</div>
        <?php endif; ?>

    	<div>
    		<?php echo CHtml::submitButton('Registrar',array("class"=>"btn btn-primary btn-large")); ?>

    	</div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->