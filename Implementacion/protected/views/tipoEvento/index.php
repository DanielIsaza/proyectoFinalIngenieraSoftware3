<?php
/* @var $this TipoEventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Eventos',
);

$this->menu=array(
	array('label'=>'Create TipoEvento', 'url'=>array('create')),
	array('label'=>'Manage TipoEvento', 'url'=>array('admin')),
);
?>

<h1>Tipo Eventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
