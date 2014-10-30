<?php
/* @var $this AreaConocimientoController */
/* @var $model AreaConocimiento */

$this->breadcrumbs=array(
	'Area Conocimientos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AreaConocimiento', 'url'=>array('index')),
	array('label'=>'Create AreaConocimiento', 'url'=>array('create')),
	array('label'=>'Update AreaConocimiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AreaConocimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AreaConocimiento', 'url'=>array('admin')),
);
?>

<h1>View AreaConocimiento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
