<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List project','url'=>array('index')),
array('label'=>'Create project','url'=>array('create')),
array('label'=>'Update project','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete project','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage project','url'=>array('admin')),
);
?>

<h1>Szczegóły projektu <b><?php echo $model->name; ?></b></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'status_id',
),
)); ?>
