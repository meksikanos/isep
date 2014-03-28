<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

	$this->pageTitle=Yii::app()->name . ' - Strona logowania';

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Formularz logowania',
	        'headerIcon' => 'icon-lock',
	    )
	);

?>

<div class="form">

<?php 
	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'login-form',
	    'type'=>'horizontal',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	));
	
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

<?php 
	
	echo $form->textFieldRow($model,'username');
	echo $form->passwordFieldRow($model,'password',array(),array('hint'=>'Jeżeli nie pamiętasz hasła, możesz zalogować się jak do domeny.')); 
	echo $form->checkBoxRow($model,'rememberMe');
	echo $form->checkBoxRow($model,'ldapMode');
	  
?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>'Zaloguj',
    )); ?>
</div>

<?php 
	
	$this->endWidget(); 
	$this->endWidget();
	
?>

</div><!-- form -->