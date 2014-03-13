<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'varchar',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'tinyint',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'text',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'smallint',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'mediumint',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'int',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'bigint',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'float',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'double',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'decimal',array('class'=>'span5','maxlength'=>10)); ?>

		<?php echo $form->textFieldRow($model,'datetime',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'timestamp',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'time',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'year',array('class'=>'span5','maxlength'=>4)); ?>

		<?php echo $form->textFieldRow($model,'char',array('class'=>'span5','maxlength'=>10)); ?>

		<?php echo $form->textFieldRow($model,'tinyblob',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'tinytext',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'blob',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'mediumblob',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'mediumtext',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'longblob',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'longtext',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'enum',array('class'=>'span5','maxlength'=>1)); ?>

		<?php echo $form->textFieldRow($model,'set',array('class'=>'span5','maxlength'=>0)); ?>

		<?php echo $form->textFieldRow($model,'bool',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'binary',array('class'=>'span5','maxlength'=>20)); ?>

		<?php echo $form->textFieldRow($model,'varbinary',array('class'=>'span5','maxlength'=>20)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
