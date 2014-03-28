<?php

	$this->breadcrumbs=array(
		'Rodzaje projektów'=>array('index'),
		$model->projectType,
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów projektów','url'=>array('index')),
		array('label'=>'Utwórz nowy rodzaj projektu','url'=>array('create')),
		array('label'=>'Aktualizuj rodzaj projektu','url'=>array('update','id'=>$model->id)),
		array('label'=>'Usuń rodzaj projektu','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Czy na pewno chcesz usunąć ten rodzaj projektu?')),
		array('label'=>'Zarządzaj rodzajami projektów','url'=>array('admin')),
	);

?>

<h3>Rodzaj projektu: <?php echo $model->projectType; ?></h3>

<?php 

	$this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'projectType',
		),
	)); 

?>