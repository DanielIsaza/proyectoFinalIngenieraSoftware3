<?php
/* @var $this GranAreaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gran Areas',
);

$this->menu=array(
	array('label'=>'Create GranArea', 'url'=>array('create')),
	array('label'=>'Manage GranArea', 'url'=>array('admin')),
);
?>

<h1>Gran Areas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
