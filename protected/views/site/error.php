<?php
/* @var $this SiteController */
/* @var $error array */

	$this->pageTitle=Yii::app()->name . ' - Błąd';
	$this->breadcrumbs=array(
		'Błąd',
	);

	Yii::app()->user->setFlash('error', $message);
?>

<h2>Kod błędu: <?php echo $code; ?></h2>

<?php
	// Render error message with `TbAlert`
	$this->widget('bootstrap.widgets.TbAlert', array(
	    'block' => true,
	    'fade' => true,
	    'closeText' => '&times;', // false equals no close link
	    'events' => array(),
	    'htmlOptions' => array(),
	    'userComponentId' => 'user',
	    'alerts' => array( // configurations per alert type
	        'error' => array('block' => false, 'closeText' => false)
	    ),
	));
?>