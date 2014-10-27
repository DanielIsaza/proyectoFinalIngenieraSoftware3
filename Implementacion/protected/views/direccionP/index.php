<?php
/* @var $this DireccionPController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Direccion Ps',
);

$this->menu=array(
	array('label'=>'Create DireccionP', 'url'=>array('create')),
	array('label'=>'Manage DireccionP', 'url'=>array('admin')),
);
?>

<h1>Direccion Ps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
