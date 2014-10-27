<?php
/* @var $this DireccionRController */
/* @var $model DireccionR */

$this->breadcrumbs=array(
	'Direccion Rs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DireccionR', 'url'=>array('index')),
	array('label'=>'Create DireccionR', 'url'=>array('create')),
	array('label'=>'View DireccionR', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DireccionR', 'url'=>array('admin')),
);
?>

<h1>Update DireccionR <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>