<?php
/* @var $this CategoriaCentroController */
/* @var $model CategoriaCentro */

$this->breadcrumbs=array(
	'Categoria Centros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoriaCentro', 'url'=>array('index')),
	array('label'=>'Create CategoriaCentro', 'url'=>array('create')),
	array('label'=>'View CategoriaCentro', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CategoriaCentro', 'url'=>array('admin')),
);
?>

<h1>Update CategoriaCentro <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>