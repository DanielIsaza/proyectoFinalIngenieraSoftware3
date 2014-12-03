<?php
/* @var $this OrganizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organizacions',
);
?>

<h1>Organizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
