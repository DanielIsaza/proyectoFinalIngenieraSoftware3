<?php
/* @var $this RepresentanteLegalController */
/* @var $model Representantelegal */

$this->breadcrumbs=array(
	'Representantelegals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Representantelegal', 'url'=>array('index')),
	array('label'=>'Manage Representantelegal', 'url'=>array('admin')),
);
?>

<h1>Create Representantelegal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>