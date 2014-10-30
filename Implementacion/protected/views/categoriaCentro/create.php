<?php
/* @var $this CategoriaCentroController */
/* @var $model CategoriaCentro */

$this->breadcrumbs=array(
	'Categoria Centros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoriaCentro', 'url'=>array('index')),
	array('label'=>'Manage CategoriaCentro', 'url'=>array('admin')),
);
?>

<h1>Create CategoriaCentro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>