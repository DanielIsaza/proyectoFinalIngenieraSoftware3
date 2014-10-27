<?php
/* @var $this TipoConvocatoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Convocatorias',
);

$this->menu=array(
	array('label'=>'Create TipoConvocatoria', 'url'=>array('create')),
	array('label'=>'Manage TipoConvocatoria', 'url'=>array('admin')),
);
?>

<h1>Tipo Convocatorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
