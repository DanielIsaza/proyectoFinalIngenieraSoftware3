<?php
/* @var $this TipoFinanciacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Financiacions',
);

$this->menu=array(
	array('label'=>'Create TipoFinanciacion', 'url'=>array('create')),
	array('label'=>'Manage TipoFinanciacion', 'url'=>array('admin')),
);
?>

<h1>Tipo Financiacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
