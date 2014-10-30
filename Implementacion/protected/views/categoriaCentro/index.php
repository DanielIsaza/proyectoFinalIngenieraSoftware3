<?php
/* @var $this CategoriaCentroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoria Centros',
);

$this->menu=array(
	array('label'=>'Create CategoriaCentro', 'url'=>array('create')),
	array('label'=>'Manage CategoriaCentro', 'url'=>array('admin')),
);
?>

<h1>Categoria Centros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
