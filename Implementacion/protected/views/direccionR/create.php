<?php
/* @var $this DireccionRController */
/* @var $model DireccionR */

$this->breadcrumbs=array(
	'Direccion Rs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DireccionR', 'url'=>array('index')),
	array('label'=>'Manage DireccionR', 'url'=>array('admin')),
);
?>

<h1>Create DireccionR</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>