<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->pageTitle='Publicaci&oacuten - '.$model->id;
$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	$model->id,
);
?>

<div class="container">
	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'grupo-view', 'enableAjaxValidation'=>true,)); ?>
	<div class="row-fluid">
		<div class="span10">
			<h2 align="center"><?php echo $model->nombre;?></h2>
		</div>
		<div class="span2">
			
		</div>
	</div>
	<div class="span12">
		
	</div>
	<div class="row-fluid">
		<div class="span4">
			<h4><?php echo $form->label($model, 'revista')?></h4>
			<?php echo $model->revista ;?>
		</div>
		<div class="span4">
			<h4><?php echo $form->label($model, 'numeroDePaginas')?></h4>
			<?php echo $model->paginas ;?>
		</div>
		<div class="span4">
			<h4><?php echo $form->label($model, 'codigo')?></h4>
			<?php echo $model->id ;?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<br/>
			<h4><?php echo $form->label($model, 'autores')?></h4>
			<UL type="circle">
				<?php for ($i=0; $i < count($model->personas); $i++) { ?>
				<?php $bib; ?>
				<?php if($model->personas[$i]->nombreBibliografico!=''){ $bib='('.$model->personas[$i]->nombreBibliografico.')'; } else{$bib='';} ?>
				<LI><?php echo $model->personas[$i]->nombre.' '.$model->personas[$i]->primerApellido.' '.$model->personas[$i]->segundoApellido.' '.$bib ?></LI>
				<?php } ?>
			</UL>
		</div>
	</div>
	<?php $this->endWidget(); ?>
</div>