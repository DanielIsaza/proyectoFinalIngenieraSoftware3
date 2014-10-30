<?php
/* @var $this PrivacidadController */
/* @var $model Privacidad */

$this->breadcrumbs=array(
	'Privacidads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Privacidad', 'url'=>array('index')),
	array('label'=>'Create Privacidad', 'url'=>array('create')),
	array('label'=>'Update Privacidad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Privacidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Privacidad', 'url'=>array('admin')),
);
?>

<h1>View Privacidad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
