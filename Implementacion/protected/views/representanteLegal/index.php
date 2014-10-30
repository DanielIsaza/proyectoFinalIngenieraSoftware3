<?php
/* @var $this RepresentanteLegalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Representantelegals',
);

$this->menu=array(
	array('label'=>'Create Representantelegal', 'url'=>array('create')),
	array('label'=>'Manage Representantelegal', 'url'=>array('admin')),
);
?>

<h1>Representantelegals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
