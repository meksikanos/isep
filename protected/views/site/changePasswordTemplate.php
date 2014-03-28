<?php 
	$this->pageTitle=Yii::app()->name . ' - Formularz zmiany hasła';
?>

<div class="form" style="width:700px;">

<?php 

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Zmień swoje hasło',
	        'headerIcon' => 'icon-lock',
	    )
	);

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'changepassword-form',
	    'type'=>'horizontal',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); 

?>

<?php 

	echo $form->errorSummary($model); 

	$this->widget('bootstrap.widgets.TbAlert', array(
	    'block' => true,
	    'fade' => true,
	    'closeText' => '&times;', // false equals no close link
	    'events' => array(),
	    'htmlOptions' => array(),
	    'userComponentId' => 'user',
	    'alerts' => array( // configurations per alert type
	        // success, info, warning, error or danger
	        'success' => array('closeText' => '&times;'),
	        'info', // you don't need to specify full config
	        'warning' => array('block' => false, 'closeText' => false),
	        'error' => array('block' => false, 'closeText' => false)
	    ),
	));
	
?>

<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php echo $form->textFieldRow($model,'currentPassword'); ?>
<?php echo $form->textFieldRow($model,'newPassword'); ?>
<?php echo $form->textFieldRow($model,'newPasswordRepeat'); ?>	

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton',array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>'Zmień hasło',
    )); ?>
</div>

<?php 
	$this->endWidget(); 
	$this->endWidget();
?>

</div><!-- form -->