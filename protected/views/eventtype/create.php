<?php

	$this->breadcrumbs=array(
		'Lista rodzajów zdarzeń'=>array('index'),
		'Utwórz nowy rodzaj zdarzenia',
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów zdarzeń','url'=>array('index')),
		array('label'=>'Zarządzaj rodzajami zdarzeń','url'=>array('admin')),
	);
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Nowy rodzaj zdarzenia',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	echo $this->renderPartial('_form', array('model'=>$model)); 

	$this->endWidget();
	
?>