<?php
/* @var $this OrganizacionController */
/* @var $model Organizacion */

$this->breadcrumbs=array(
	'Organizacions'=>array('index'),
	$model->nit=>array('view','id'=>$model->nit),
	'Update',
);

$this->menu=array(
	array('label'=>'List Organizacion', 'url'=>array('index')),
	array('label'=>'Create Organizacion', 'url'=>array('create')),
	array('label'=>'View Organizacion', 'url'=>array('view', 'id'=>$model->nit)),
	array('label'=>'Manage Organizacion', 'url'=>array('admin')),
);
?>

<h1>Update Organizacion <?php echo $model->nit; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>