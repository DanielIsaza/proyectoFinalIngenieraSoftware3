<?php
/* @var $this PrivacidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Privacidads',
);

$this->menu=array(
	array('label'=>'Create Privacidad', 'url'=>array('create')),
	array('label'=>'Manage Privacidad', 'url'=>array('admin')),
);
?>

<h1>Privacidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
