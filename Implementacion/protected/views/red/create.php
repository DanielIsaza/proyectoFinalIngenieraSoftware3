<?php
/* @var $this RedController */
/* @var $model Red */

$this->breadcrumbs=array(
	'Reds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Red', 'url'=>array('index')),
	array('label'=>'Manage Red', 'url'=>array('admin')),
);
?>

<h1>Create Red</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>