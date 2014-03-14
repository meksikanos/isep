<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'teammember-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'company',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'role',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>128)); ?>
	
	<?php echo $form->checkBoxRow($model, 'active', array('checked' => $model->active)); ?>

	<?php echo $form->textAreaRow($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Dodaj' : 'Zapisz zmiany',
		)); ?>
</div>

<?php $this->endWidget(); ?>
