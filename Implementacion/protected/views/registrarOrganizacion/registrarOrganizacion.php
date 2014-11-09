<?php
/* @var $this rorganizacionController */
/* @var $model Organizacion */
/* @var $form CActiveForm */
?>

<?php
$this->pageTitle=Yii::app()->name . '- Registro organización ';
$this->breadcrumbs=array(
	'Resgistro organización',
);
?>
<?php $pais=new Pais; $departamento=new Departamento; ?>
<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizacion-organizacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
    'clientOptions'=>array("validateOnSubmit"=>true)
)); ?>

<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
<div class="container">
    <div class="well">
        <h4>Datos básicos</h4>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($model,'nit'); ?>
            <?php echo $form->textField($model,'nit'); ?>
            <?php echo $form->error($model,'nit'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($model,'nombreDeLaInstitucion'); ?>
            <?php echo $form->textField($model,'nombre'); ?>
            <?php echo $form->error($model,'nombre'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($model,'sigla'); ?>
            <?php echo $form->textField($model,'sigla'); ?>
            <?php echo $form->error($model,'sigla'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($model,'direccion'); ?>
            <?php echo $form->textField($model,'direccion'); ?>
            <?php echo $form->error($model,'direccion'); ?>
        </div>
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
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($model,'ciudad'); ?>
            <?php echo $form->dropDownList($model,'ciudad',CHtml::listData(Ciudad::model()->findAll(),"id","nombre")); ?>
            <?php echo $form->error($model,'ciudad'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($model,'telefono'); ?>
            <?php echo $form->textField($model,'telefono'); ?>
            <?php echo $form->error($model,'telefono'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($model,'fax'); ?>
            <?php echo $form->textField($model,'fax'); ?>
            <?php echo $form->error($model,'fax'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email'); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
        <div class="span8">
            <?php echo $form->labelEx($model,'sitioWebInstitucional'); ?>
            <?php echo $form->textField($model,'sitioWeb', array('class' => 'span11')); ?>
            <?php echo $form->error($model,'sitioWeb'); ?>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="well">
        <h4>Datos representante legal</h4>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'nombre'); ?>
            <?php echo $form->textField($modelrp,'nombre'); ?>
            <?php echo $form->error($modelrp,'nombre'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'primerApellido'); ?>
            <?php echo $form->textField($modelrp,'primerApellido'); ?>
            <?php echo $form->error($modelrp,'primerApellido'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'segundoApellido'); ?>
            <?php echo $form->textField($modelrp,'segundoApellido'); ?>
            <?php echo $form->error($modelrp,'segundoApellido'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'tipoDocumento'); ?>
            <?php echo $form->dropDownList($modelrp,'tipoDocumento',CHtml::listData(Tipodocumento::model()->findAll(),"id","nombre")); ?>
            <?php echo $form->error($modelrp,'tipoDocumento'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'n&uacutemeroDocumento'); ?>
            <?php echo $form->textField($modelrp,'dni'); ?>
            <?php echo $form->error($modelrp,'dni'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'direccion'); ?>
            <?php echo $form->textField($modelrp,'direccion'); ?>
            <?php echo $form->error($modelrp,'direccion'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'telFijo'); ?>
            <?php echo $form->textField($modelrp,'telFijo'); ?>
            <?php echo $form->error($modelrp,'telFijo'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelrp,'email'); ?>
            <?php echo $form->textField($modelrp,'email'); ?>
            <?php echo $form->error($modelrp,'email'); ?>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="well">
        <h4>Datos usuario administrador</h4>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelad,'nombre'); ?>
            <?php echo $form->textField($modelad,'nombre'); ?>
            <?php echo $form->error($modelad,'nombre'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelad,'primerApellido'); ?>
            <?php echo $form->textField($modelad,'primerApellido'); ?>
            <?php echo $form->error($modelad,'primerApellido'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelad,'segundoApellido'); ?>
            <?php echo $form->textField($modelad,'segundoApellido'); ?>
            <?php echo $form->error($modelad,'segundoApellido'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelad,'cargo'); ?>
            <?php echo $form->textField($modelad,'cargo'); ?>
            <?php echo $form->error($modelad,'cargo'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelad,'tipoDocumento'); ?>
            <?php echo $form->dropDownList($modelad,'tipoDocumento',CHtml::listData(Tipodocumento::model()->findAll(),"id","nombre")); ?>
            <?php echo $form->error($modelad,'tipoDocumento'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelad,'n&uacutemeroDocumento'); ?>
            <?php echo $form->textField($modelad,'dni'); ?>
            <?php echo $form->error($modelad,'dni'); ?>
        </div>
    </div>
    <div class="span12">
        <div class="span4">
            <?php echo $form->labelEx($modelad,'telFijo'); ?>
            <?php echo $form->textField($modelad,'telFijo'); ?>
            <?php echo $form->error($modelad,'telFijo'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelad,'email'); ?>
            <?php echo $form->textField($modelad,'email'); ?>
            <?php echo $form->error($modelad,'email'); ?>
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
            <?php echo $form->labelEx($modelu,'Usuario SIIC'); ?>
            <?php echo $form->textField($modelu,'login'); ?>
            <?php echo $form->error($modelu,'login'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelu,'claveSIIC'); ?>
            <?php echo $form->passwordField($modelu,'password'); ?>
            <?php echo $form->error($modelu,'password'); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($modelu,'confirmarClaveSIIC'); ?>
            <?php echo $form->passwordField($modelu,'password'); ?>
            <?php echo $form->error($modelu,'password'); ?>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="well">
        <h4>Código de verificación</h4>
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
	<?php endif; ?>
	<div>
		<?php echo CHtml::submitButton('Registrar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->