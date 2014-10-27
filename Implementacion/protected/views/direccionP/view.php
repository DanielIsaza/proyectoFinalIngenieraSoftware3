<?php
/* @var $this DireccionPController */
/* @var $model DireccionP */

$this->breadcrumbs=array(
	'Direccion Ps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DireccionP', 'url'=>array('index')),
	array('label'=>'Create DireccionP', 'url'=>array('create')),
	array('label'=>'Update DireccionP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DireccionP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DireccionP', 'url'=>array('admin')),
);
?>

<h1>View DireccionP #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'direccion',
		'barrio',
		'telFijo',
		'apartadoPostal',
		'codigoPostal',
		'email',
		'sitioWeb',
		'ciudad',
	),
)); ?>
