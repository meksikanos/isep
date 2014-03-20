<?php
$this->breadcrumbs=array(
	'Eventtypes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List eventtype','url'=>array('index')),
array('label'=>'Manage eventtype','url'=>array('admin')),
);
?>

<h1>Create eventtype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>