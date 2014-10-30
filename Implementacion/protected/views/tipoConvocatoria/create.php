<?php
/* @var $this TipoConvocatoriaController */
/* @var $model TipoConvocatoria */

$this->breadcrumbs=array(
	'Tipo Convocatorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Manage TipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Create TipoConvocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>