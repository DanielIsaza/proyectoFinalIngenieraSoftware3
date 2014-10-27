<?php
/* @var $this DireccionRController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Direccion Rs',
);

$this->menu=array(
	array('label'=>'Create DireccionR', 'url'=>array('create')),
	array('label'=>'Manage DireccionR', 'url'=>array('admin')),
);
?>

<h1>Direccion Rs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
