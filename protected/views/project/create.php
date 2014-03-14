<?php
$this->breadcrumbs=array(
	'Projekty'=>array('index'),
	'Dodaj nowy projekt',
);

$this->menu=array(
	array('label'=>'Lista aktualnych projektów','url'=>array('index')),
	array('label'=>'Zarządzaj projektami','url'=>array('admin')),
);
?>

<h2>Formularz nowego projektu</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>