<?php
/* @var $this TipoFinanciacionController */
/* @var $model TipoFinanciacion */

$this->breadcrumbs=array(
	'Tipo Financiacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoFinanciacion', 'url'=>array('index')),
	array('label'=>'Create TipoFinanciacion', 'url'=>array('create')),
	array('label'=>'View TipoFinanciacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoFinanciacion', 'url'=>array('admin')),
);
?>

<h1>Update TipoFinanciacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>