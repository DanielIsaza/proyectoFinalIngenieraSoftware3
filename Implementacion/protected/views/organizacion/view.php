<?php
/* @var $this OrganizacionController */
/* @var $model Organizacion */

$this->breadcrumbs=array(
	'Organizacions'=>array('index'),
	$model->nit,
);

$this->menu=array(
	array('label'=>'List Organizacion', 'url'=>array('index')),
	array('label'=>'Create Organizacion', 'url'=>array('create')),
	array('label'=>'Update Organizacion', 'url'=>array('update', 'id'=>$model->nit)),
	array('label'=>'Delete Organizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nit),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organizacion', 'url'=>array('admin')),
);
?>

<h1>View Organizacion #<?php echo $model->nit; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nit',
		'nombre',
		'sigla',
		'direccion',
		'telefono',
		'fax',
		'email',
		'sitioWeb',
		'ciudad',
		'usuario',
	),
)); ?>
