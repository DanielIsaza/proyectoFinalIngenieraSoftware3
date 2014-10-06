<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">

    <div class="well">

          <i style="font-size: 200px" class="icon-credit-card icon-4x"></i>
          <h2>Heading</h2>

    <div class="row-fluid">
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class="icon-shopping-cart"></i></div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, sit voluptates  ad quos!.</p>
          </div>
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class="icon-credit-card"></i></div>
              <h3>2. Recibe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, sit voluptates  ad quos!.</p>
          </div>
            <div class="span4" style="text-align:center;">
              <div style="font-size: 40px;margin:20px 0 20px 0;"><i class="icon-phone"></i></div>
              <h3>3. Llama</h3>
              <p>Lorem ipsum adipisicing elit. Quae, sit voluptates  ad quos!.</p>
          </div>
      </div>
    </div>
</div><!-- /.span4 -->

<div class="span4">
  <div class="well">
  <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login',
      'action'=>$this->createUrl("site/login"),
      'htmlOptions'=>array("style"=>"text-align: left"),
      'enableClientValidation'=>true,
      'clientOptions'=>array(
        'validateOnSubmit'=>true,
      ),
    )); ?>
      
    <?php echo $form->labelEx($model,'login'); ?>
    <?php echo $form->textField($model,'login',array("class"=>"input-block-level","placeholder"=>"login")); ?>
    <?php echo $form->error($model,'login'); ?>

    <?php echo $form->labelEx($model,'contrasena'); ?>
    <?php echo $form->passwordField($model,'contrasena',array("class"=>"input-block-level","placeholder"=>"contrasena")); ?>
    <?php echo $form->error($model,'contrasena'); ?>
  <br>
    <?php echo CHtml::submitButton('Ingresar',array("class"=>"btn btn-primary pull-left")); ?>
<?php $this->endWidget(); ?>

  </div>

    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>


