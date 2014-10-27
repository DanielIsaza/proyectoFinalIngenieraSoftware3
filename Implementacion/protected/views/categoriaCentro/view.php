<?php
/* @var $this CategoriaCentroController */
/* @var $model CategoriaCentro */

$this->breadcrumbs=array(
	'Categoria Centros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CategoriaCentro', 'url'=>array('index')),
	array('label'=>'Create CategoriaCentro', 'url'=>array('create')),
	array('label'=>'Update CategoriaCentro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CategoriaCentro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoriaCentro', 'url'=>array('admin')),
);
?>

<h1>View CategoriaCentro #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
