<?php

	$this->breadcrumbs=array(
		'Zdarzenia w projektach'=>array('index'),
		$model->author=>array('view','id'=>$model->id),
		'Aktualizacja danych zdarzenia',
	);

	$this->menu=array(
		array('label'=>'Lista zdarzeń w projektach','url'=>array('index')),
		array('label'=>'Dodaj nowe zdarzenie','url'=>array('create')),
		array('label'=>'Podgląd zdarzenia','url'=>array('view','id'=>$model->id)),
		array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin')),
	);
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj dane zdarzenia',
	        'headerIcon' => 'icon-list-alt',
	    )
	);

	echo $this->renderPartial('_form',array('model'=>$model, 'project_id'=>$project_id));

	$this->endWidget();

?>