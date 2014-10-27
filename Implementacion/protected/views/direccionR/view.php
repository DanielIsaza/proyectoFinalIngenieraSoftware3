<?php
/* @var $this DireccionRController */
/* @var $model DireccionR */

$this->breadcrumbs=array(
	'Direccion Rs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DireccionR', 'url'=>array('index')),
	array('label'=>'Create DireccionR', 'url'=>array('create')),
	array('label'=>'Update DireccionR', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DireccionR', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DireccionR', 'url'=>array('admin')),
);
?>

<h1>View DireccionR #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'direccion',
		'barrio',
		'telFijo',
		'telMovil',
		'apartadoPostal',
		'codPostal',
		'email',
		'SitioWeb',
		'ciudad',
	),
)); ?>
