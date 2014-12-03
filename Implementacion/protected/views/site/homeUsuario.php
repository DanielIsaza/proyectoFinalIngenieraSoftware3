<?php
$this->pageTitle=Yii::app()->name . '- Home Usuario';
$this->breadcrumbs=array(
	'HomeUsuario',
);
?>

<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 align="center">Bienvenido al SIIC</h4>
			<p align="center">En el sistema, aparte de poder registrar una persona u organización usted puede:</p>
		</div>
		<div class="panel-body">
			<div class="span6">
				<div class="panel panel-info">
					<div class="panel-body">
						<p align="center"><b>Recibir sugerencias de:</b></p>
						<p align="center"><?php echo CHtml::submitButton('   Grupos    ', array('submit' => array('grupo/index'),"class"=>"btn btn-primary btn-large")); ?></p>
						<p align="center"><?php echo CHtml::submitButton('Proyectos', array('submit' => array('proyecto/index'),"class"=>"btn btn-primary btn-large")); ?></p>
						<p align="center"><?php echo CHtml::submitButton('   Eventos   ', array('submit' => array('evento/index'),"class"=>"btn btn-primary btn-large")); ?></p>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="panel panel-info">
					<div class="panel-body">
						<p align="center"><b>Ver inforación de:</b></p>
						<p align="center"><?php echo CHtml::submitButton('       Personas       ', array('submit' => array('persona/index'),"class"=>"btn btn-primary btn-large")); ?></p>
						<p align="center"><?php echo CHtml::submitButton('Organizaciones', array('submit' => array('organizacion/index'),"class"=>"btn btn-primary btn-large")); ?></p>
						<p align="center"><?php echo CHtml::submitButton('   Publicaciones  ', array('submit' => array('publicacion/index'),"class"=>"btn btn-primary btn-large")); ?></p>
						<p align="center"><?php echo CHtml::submitButton('      Proyectos      ', array('submit' => array('proyecto/index'),"class"=>"btn btn-primary btn-large")); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>