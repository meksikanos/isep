<?php

	$this->breadcrumbs=array(
		'Statusy projektu'=>array('index'),
		$model->statusName,
	);

	$this->menu=array(
		array('label'=>'Lista statusów projektu','url'=>array('index')),
		array('label'=>'Utwórz nowy status projektu','url'=>array('create')),
		array('label'=>'Aktualizuj status projektu','url'=>array('update','id'=>$model->id)),
		array('label'=>'Usuń status projektu','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Czy na pewno chcesz usunąć ten status projektu?')),
		array('label'=>'Zarządzaj statusami projektu','url'=>array('admin')),
	);
	
?>

<h3>Status projektu: <?php echo $model->statusName; ?></h3>

<?php 

	$this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'statusName',
		),
	)); 

?>