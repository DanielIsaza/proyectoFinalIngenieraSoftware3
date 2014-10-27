<?php
/* @var $this DireccionPController */
/* @var $model DireccionP */

$this->breadcrumbs=array(
	'Direccion Ps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DireccionP', 'url'=>array('index')),
	array('label'=>'Manage DireccionP', 'url'=>array('admin')),
);
?>

<h1>Create DireccionP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>