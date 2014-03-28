<?php

	$this->breadcrumbs=array(
		'Rodzaje zdarzeń w projektach'=>array('index'),
		$model->type,
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów zdarzeń','url'=>array('index')),
		array('label'=>'Utwórz nowy rodzaj zdarzenia','url'=>array('create')),
		array('label'=>'Modyfikuj zdarzenie','url'=>array('update','id'=>$model->id)),
		array('label'=>'Usuń zdarzenie','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Czy na pewno chcesz usunąć to zdarzenie?')),
		array('label'=>'Zarządzaj rodzajami zdarzeń','url'=>array('admin')),
	);
	
?>

<h3>Zdarzenie: <?php echo $model->type; ?></h3>

<?php 

	$this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'type',
		),
	));
 
?>