<?php
$this->breadcrumbs=array(
	'Eventtypes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List eventtype','url'=>array('index')),
array('label'=>'Create eventtype','url'=>array('create')),
array('label'=>'Update eventtype','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete eventtype','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage eventtype','url'=>array('admin')),
);
?>

<h1>View eventtype #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'type',
),
)); ?>
