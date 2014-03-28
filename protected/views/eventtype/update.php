<?php

	$this->breadcrumbs=array(
		'Rodzaje zdarzeń w projektach'=>array('index'),
		$model->type=>array('view','id'=>$model->id),
		'Aktualizacja typu',
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów zdarzeń','url'=>array('index')),
		array('label'=>'Utwórz nowy rodzaj zdarzenia','url'=>array('create')),
		array('label'=>'Podgląd zdarzenia','url'=>array('view','id'=>$model->id)),
		array('label'=>'Zarządzaj rodzajami zdarzeń','url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj rodzaj zdarzenia',
	        'headerIcon' => 'icon-list-alt',
	    )
	);

	echo $this->renderPartial('_form',array('model'=>$model)); 
	
	$this->endWidget();
	 
?>