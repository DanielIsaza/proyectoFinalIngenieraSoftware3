<?php
$this->pageTitle=Yii::app()->name . '- Home Usuario';
$this->breadcrumbs=array(
	'HomeUsuario',
);
?>
<div>
<?php echo CHtml::submitButton('Visualizar organizaciones', array('submit' => array('organizacion/index'),"class"=>"btn btn-primary btn-large")); ?>
</div>