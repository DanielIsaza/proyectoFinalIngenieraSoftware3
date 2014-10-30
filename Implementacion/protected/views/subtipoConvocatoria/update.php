<?php
/* @var $this SubtipoConvocatoriaController */
/* @var $model SubtipoConvocatoria */

$this->breadcrumbs=array(
	'Subtipo Convocatorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubtipoConvocatoria', 'url'=>array('index')),
	array('label'=>'Create SubtipoConvocatoria', 'url'=>array('create')),
	array('label'=>'View SubtipoConvocatoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubtipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Update SubtipoConvocatoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>