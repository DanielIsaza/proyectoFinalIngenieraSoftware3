<?php
/* @var $this AreaConocimientoController */
/* @var $model AreaConocimiento */

$this->breadcrumbs=array(
	'Area Conocimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AreaConocimiento', 'url'=>array('index')),
	array('label'=>'Manage AreaConocimiento', 'url'=>array('admin')),
);
?>

<h1>Create AreaConocimiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>