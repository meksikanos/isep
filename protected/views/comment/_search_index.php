<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'post',
)); ?>

<?php 
	echo $form->dropDownListRow(
								$model,
								'project_id', 
								$model->getProjects(), 
								array('prompt' => '(Wybierz projekt)',
									'options' => array(
														$selected_id => array('selected' => true)
														)
							)
		); 
?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Wyświetl zdarzenia',
		)); ?>
	</div>

<?php $this->endWidget(); ?>