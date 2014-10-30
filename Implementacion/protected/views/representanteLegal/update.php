<?php
/* @var $this RepresentanteLegalController */
/* @var $model Representantelegal */

$this->breadcrumbs=array(
	'Representantelegals'=>array('index'),
	$model->dni=>array('view','id'=>$model->dni),
	'Update',
);

$this->menu=array(
	array('label'=>'List Representantelegal', 'url'=>array('index')),
	array('label'=>'Create Representantelegal', 'url'=>array('create')),
	array('label'=>'View Representantelegal', 'url'=>array('view', 'id'=>$model->dni)),
	array('label'=>'Manage Representantelegal', 'url'=>array('admin')),
);
?>

<h1>Update Representantelegal <?php echo $model->dni; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>