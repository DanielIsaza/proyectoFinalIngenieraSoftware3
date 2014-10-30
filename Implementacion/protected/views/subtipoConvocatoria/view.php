<?php
/* @var $this SubtipoConvocatoriaController */
/* @var $model SubtipoConvocatoria */

$this->breadcrumbs=array(
	'Subtipo Convocatorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubtipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create SubtipoConvocatoria', 'url'=>array('create')),
	array('label'=>'Update SubtipoConvocatoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubtipoConvocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubtipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>View SubtipoConvocatoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'tipo',
	),
)); ?>
