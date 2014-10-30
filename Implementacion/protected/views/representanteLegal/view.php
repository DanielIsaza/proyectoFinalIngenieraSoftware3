<?php
/* @var $this RepresentanteLegalController */
/* @var $model Representantelegal */

$this->breadcrumbs=array(
	'Representantelegals'=>array('index'),
	$model->dni,
);

$this->menu=array(
	array('label'=>'List Representantelegal', 'url'=>array('index')),
	array('label'=>'Create Representantelegal', 'url'=>array('create')),
	array('label'=>'Update Representantelegal', 'url'=>array('update', 'id'=>$model->dni)),
	array('label'=>'Delete Representantelegal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dni),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Representantelegal', 'url'=>array('admin')),
);
?>

<h1>View Representantelegal #<?php echo $model->dni; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dni',
		'nombre',
		'primerApellido',
		'segundoApellido',
		'direccion',
		'telFijo',
		'email',
		'tipoDocumento',
		'organizacion',
	),
)); ?>
