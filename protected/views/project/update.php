<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Aktualizacja danych o projekcie',
);

	$this->menu=array(
	array('label'=>'Lista projektów','url'=>array('index')),
	array('label'=>'Dodaj nowy projekt','url'=>array('create')),
	array('label'=>'Szczegóły projektu','url'=>array('view','id'=>$model->id)),
	array('label'=>'Zarządzaj projektami','url'=>array('admin')),
	);
	?>

	<h1>Zmiana danych projektu <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>