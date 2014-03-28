<?php

	$this->breadcrumbs=array(
		'Rodzaje projektów'=>array('index'),
		'Utwórz nowy rodzaj projektu',
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów projektów','url'=>array('index')),
		array('label'=>'Zarządzaj rodzajami projektów','url'=>array('admin')),
	);
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Nowy rodzaj projektu',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	$this->renderPartial('_form', array('model'=>$model));
	
	$this->endWidget(); 

?>