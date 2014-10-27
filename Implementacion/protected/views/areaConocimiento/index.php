<?php
/* @var $this AreaConocimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Area Conocimientos',
);

$this->menu=array(
	array('label'=>'Create AreaConocimiento', 'url'=>array('create')),
	array('label'=>'Manage AreaConocimiento', 'url'=>array('admin')),
);
?>

<h1>Area Conocimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
