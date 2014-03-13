<?php
$this->breadcrumbs=array(
	'All Data Types'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List all_data_types','url'=>array('index')),
array('label'=>'Manage all_data_types','url'=>array('admin')),
);
?>

<h1>Create all_data_types</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>