<?php
/* @var $this PrivacidadController */
/* @var $model Privacidad */

$this->breadcrumbs=array(
	'Privacidads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Privacidad', 'url'=>array('index')),
	array('label'=>'Create Privacidad', 'url'=>array('create')),
	array('label'=>'View Privacidad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Privacidad', 'url'=>array('admin')),
);
?>

<h1>Update Privacidad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>