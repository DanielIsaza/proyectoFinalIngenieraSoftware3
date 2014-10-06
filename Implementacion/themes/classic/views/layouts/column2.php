<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row-fluit">
		<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-pills'),
			));
		?>
	</div>
	<div class="row-fluit">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>