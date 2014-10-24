<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">
          <img src= "<?php echo Yii::app()->theme->baseUrl;?>/img/logoColciencias.png">
          <h2>Modulo Comunidad</h2>
          <h4 >
            <p aling="left">
            El modulo de comunidad tiene funciones que le permiten a una 
            persona acceder a los servicios de la comunidad, como lo son 
            interactuar con otros usuarios, realizar búsquedas, recibir 
            sugerencias y otras funciones
            <p>
          </h4>
    </div><!-- /.span4 -->

<div class="span4">
  <div class="well">
  <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'action'=>$this->createUrl("site/login"),
      'htmlOptions'=>array("style"=>"text-align: left"),
      'enableClientValidation'=>true,
      'clientOptions'=>array(
        'validateOnSubmit'=>true,
      ),
    )); ?>
      
    <?php echo $form->labelEx($model,'Usuario'); ?>
    <?php echo $form->textField($model,'username',array("class"=>"input-block-level","placeholder"=>"Usuario")); ?>
    <?php echo $form->error($model,'username'); ?>

    <?php echo $form->labelEx($model,'Contrase&ntildea'); ?>
    <?php echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Contraseña")); ?>
    <?php echo $form->error($model,'password'); ?>
  <br>
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>

    <?php echo CHtml::submitButton('Ingresar',array("class"=>"btn btn-primary pull-left")); ?>
<?php $this->endWidget(); ?>  
  </div><!-- /.row -->
</div>
</section>



</div>
</section>
  <!-- START THE FEATURETTES -->
  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>
