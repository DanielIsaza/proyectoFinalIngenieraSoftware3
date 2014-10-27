<?php
/* @var $this TipoConvocatoriaController */
/* @var $model TipoConvocatoria */

$this->breadcrumbs=array(
	'Tipo Convocatorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create TipoConvocatoria', 'url'=>array('create')),
	array('label'=>'View TipoConvocatoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Update TipoConvocatoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>