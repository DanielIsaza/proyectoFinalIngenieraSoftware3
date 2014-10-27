<?php
/* @var $this TipoConvocatoriaController */
/* @var $model TipoConvocatoria */

$this->breadcrumbs=array(
	'Tipo Convocatorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create TipoConvocatoria', 'url'=>array('create')),
	array('label'=>'Update TipoConvocatoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoConvocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>View TipoConvocatoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
