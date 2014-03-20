<?php
$this->breadcrumbs=array(
	'Eventtypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List eventtype','url'=>array('index')),
	array('label'=>'Create eventtype','url'=>array('create')),
	array('label'=>'View eventtype','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage eventtype','url'=>array('admin')),
	);
	?>

	<h1>Update eventtype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>