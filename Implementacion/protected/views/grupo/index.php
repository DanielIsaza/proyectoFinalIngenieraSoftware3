<?php
/* @var $this GrupoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupos sugeridos',
);
?>

<h1>Grupos sugeridos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
