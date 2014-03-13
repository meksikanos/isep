<?php
$this->breadcrumbs=array(
	'Project Types'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List projectType','url'=>array('index')),
array('label'=>'Manage projectType','url'=>array('admin')),
);
?>

<h1>Create projectType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>