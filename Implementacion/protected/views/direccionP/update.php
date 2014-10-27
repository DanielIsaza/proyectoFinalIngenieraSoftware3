<?php
/* @var $this DireccionPController */
/* @var $model DireccionP */

$this->breadcrumbs=array(
	'Direccion Ps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DireccionP', 'url'=>array('index')),
	array('label'=>'Create DireccionP', 'url'=>array('create')),
	array('label'=>'View DireccionP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DireccionP', 'url'=>array('admin')),
);
?>

<h1>Update DireccionP <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>