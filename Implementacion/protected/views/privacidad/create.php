<?php
/* @var $this PrivacidadController */
/* @var $model Privacidad */

$this->breadcrumbs=array(
	'Privacidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Privacidad', 'url'=>array('index')),
	array('label'=>'Manage Privacidad', 'url'=>array('admin')),
);
?>

<h1>Create Privacidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>