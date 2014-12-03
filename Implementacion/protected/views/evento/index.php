<?php
/* @var $this EventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventos',
);
?>

<h1>Eventos sugeridos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
