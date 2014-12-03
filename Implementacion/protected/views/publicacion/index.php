<?php
/* @var $this PublicacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Publicacions',
);
?>

<h1>Publicacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
