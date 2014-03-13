<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',
		array(
			'action'=>Yii::app()->createUrl($this->route),
			'method'=>'get',
			)
	); 
?>

<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

<?php echo $form->dropDownListRow($model,'status_id', $model->getCategories(), array('prompt' => '(Wybierz status)')); ?>

<?php echo $form->dropDownListRow($model,'type_id', $model->getTypes(), array('prompt' => '(Wybierz ścieżkę')); ?>

<?php echo $form->textFieldRow($model, 'path'); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType' => 'submit',
		'type'=>'primary',
		'label'=>'Wyszukaj projekty',
	)); ?>
</div>

<?php $this->endWidget(); ?>