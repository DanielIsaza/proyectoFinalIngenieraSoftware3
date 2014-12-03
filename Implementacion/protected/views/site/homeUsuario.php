<?php
$this->pageTitle=Yii::app()->name . '- Home Usuario';
$this->breadcrumbs=array(
	'HomeUsuario',
);
?>



<div>
	<?php echo CHtml::submitButton('Sugerir grupos', array('submit' => array('grupo/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br/>
<div>
	<?php echo CHtml::submitButton('Sugerir proyectos', array('submit' => array('proyecto/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br/>
<div>
	<?php echo CHtml::submitButton('Sugerir eventos', array('submit' => array('evento/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br/>

<div>
	<?php echo CHtml::submitButton('Visualizar Personas', array('submit' => array('persona/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br/>
<div>
<?php echo CHtml::submitButton('Visualizar organizaciones', array('submit' => array('organizacion/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br/>
<div>
	<?php echo CHtml::submitButton('Visualizar publicaciones', array('submit' => array('publicacion/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>
<br>
<div>
<?php echo CHtml::submitButton('Visualizar proyectos', array('submit' => array('proyecto/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>