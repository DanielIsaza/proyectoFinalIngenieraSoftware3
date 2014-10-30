<?php
/* @var $this RedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reds',
);

$this->menu=array(
	array('label'=>'Create Red', 'url'=>array('create')),
	array('label'=>'Manage Red', 'url'=>array('admin')),
);
?>

<h1>Reds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
