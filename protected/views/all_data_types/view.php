<?php
$this->breadcrumbs=array(
	'All Data Types'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List all_data_types','url'=>array('index')),
array('label'=>'Create all_data_types','url'=>array('create')),
array('label'=>'Update all_data_types','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete all_data_types','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage all_data_types','url'=>array('admin')),
);
?>

<h1>View all_data_types #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'varchar',
		'tinyint',
		'text',
		'date',
		'smallint',
		'mediumint',
		'int',
		'bigint',
		'float',
		'double',
		'decimal',
		'datetime',
		'timestamp',
		'time',
		'year',
		'char',
		'tinyblob',
		'tinytext',
		'blob',
		'mediumblob',
		'mediumtext',
		'longblob',
		'longtext',
		'enum',
		'set',
		'bool',
		'binary',
		'varbinary',
),
)); ?>
