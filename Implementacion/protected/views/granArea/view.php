<?php
/* @var $this GranAreaController */
/* @var $model GranArea */

$this->breadcrumbs=array(
	'Gran Areas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GranArea', 'url'=>array('index')),
	array('label'=>'Create GranArea', 'url'=>array('create')),
	array('label'=>'Update GranArea', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GranArea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GranArea', 'url'=>array('admin')),
);
?>

<h1>View GranArea #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
