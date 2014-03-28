<?php

	$this->breadcrumbs=array(
		'Statusy projektów'=>array('index'),
		'Utwórz nowy status projektu',
	);

	$this->menu=array(
		array('label'=>'Lista statusów projektu','url'=>array('index')),
		array('label'=>'Zarządzaj statusami projektów','url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Nowy status projektu',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	$this->renderPartial('_form', array('model'=>$model));
	
	$this->endWidget();
	
?>