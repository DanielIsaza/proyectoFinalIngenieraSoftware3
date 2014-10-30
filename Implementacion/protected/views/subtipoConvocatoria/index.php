<?php
/* @var $this SubtipoConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subtipo Convocatorias',
);

$this->menu=array(
	array('label'=>'Create SubtipoConvocatoria', 'url'=>array('create')),
	array('label'=>'Manage SubtipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Subtipo Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
