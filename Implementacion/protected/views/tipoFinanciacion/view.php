<?php
/* @var $this TipoFinanciacionController */
/* @var $model TipoFinanciacion */

$this->breadcrumbs=array(
	'Tipo Financiacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoFinanciacion', 'url'=>array('index')),
	array('label'=>'Create TipoFinanciacion', 'url'=>array('create')),
	array('label'=>'Update TipoFinanciacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoFinanciacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoFinanciacion', 'url'=>array('admin')),
);
?>

<h1>View TipoFinanciacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
