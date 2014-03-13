<?php
$this->breadcrumbs=array(
	'All Data Types',
);

$this->menu=array(
array('label'=>'Create all_data_types','url'=>array('create')),
array('label'=>'Manage all_data_types','url'=>array('admin')),
);
?>

<h1>All Data Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
