<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'surname',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'company',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'role',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Wyszukaj pracownika',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
