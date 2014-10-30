<?php
/* @var $this GranAreaController */
/* @var $model GranArea */

$this->breadcrumbs=array(
	'Gran Areas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GranArea', 'url'=>array('index')),
	array('label'=>'Create GranArea', 'url'=>array('create')),
	array('label'=>'View GranArea', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GranArea', 'url'=>array('admin')),
);
?>

<h1>Update GranArea <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>