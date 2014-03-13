<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Dodaj nowy projekt',
);

$this->menu=array(
array('label'=>'List project','url'=>array('index')),
array('label'=>'Manage project','url'=>array('admin')),
);
?>

<h1>Nowy projekt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>