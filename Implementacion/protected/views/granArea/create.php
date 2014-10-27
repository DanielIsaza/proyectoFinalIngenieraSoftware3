<?php
/* @var $this GranAreaController */
/* @var $model GranArea */

$this->breadcrumbs=array(
	'Gran Areas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GranArea', 'url'=>array('index')),
	array('label'=>'Manage GranArea', 'url'=>array('admin')),
);
?>

<h1>Create GranArea</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>