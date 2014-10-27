<?php
/* @var $this TipoFinanciacionController */
/* @var $model TipoFinanciacion */

$this->breadcrumbs=array(
	'Tipo Financiacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoFinanciacion', 'url'=>array('index')),
	array('label'=>'Manage TipoFinanciacion', 'url'=>array('admin')),
);
?>

<h1>Create TipoFinanciacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>