<?php
/* @var $this SubtipoConvocatoriaController */
/* @var $model SubtipoConvocatoria */

$this->breadcrumbs=array(
	'Subtipo Convocatorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubtipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Manage SubtipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Create SubtipoConvocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>