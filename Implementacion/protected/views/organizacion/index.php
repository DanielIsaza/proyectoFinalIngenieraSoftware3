<?php
/* @var $this OrganizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organizacions',
);

$this->menu=array(
	array('label'=>'Create Organizacion', 'url'=>array('create')),
	array('label'=>'Manage Organizacion', 'url'=>array('admin')),
);
?>

<h1>Organizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
