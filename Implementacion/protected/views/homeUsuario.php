<?php
$this->pageTitle=Yii::app()->name . '- Home Usuario';
$this->breadcrumbs=array(
	'Home Usuario',
);
?>
<?php echo CHtml::submitButton('Volver', array('submit' => array('proyectos/admin'))); ?>