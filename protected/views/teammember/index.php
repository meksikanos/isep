<?php

$this->menu=array(
array('label'=>'Dodaj nowego członka zespołu','url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('admin')),
array('label'=>'Zarządzaj członkami zespołu','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h2>Lista pracujących członków zespołu</h2>

<?php 
	$this->widget('bootstrap.widgets.TbListView',array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)
	); 
?>
