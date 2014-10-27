<?php
/* @var $this AreaConocimientoController */
/* @var $model AreaConocimiento */

$this->breadcrumbs=array(
	'Area Conocimientos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AreaConocimiento', 'url'=>array('index')),
	array('label'=>'Create AreaConocimiento', 'url'=>array('create')),
	array('label'=>'View AreaConocimiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AreaConocimiento', 'url'=>array('admin')),
);
?>

<h1>Update AreaConocimiento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>