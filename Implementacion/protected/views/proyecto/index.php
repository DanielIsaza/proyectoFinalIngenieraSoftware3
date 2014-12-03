<?php
/* @var $this ProyectoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectos',
);
?>

<h1>Proyectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
