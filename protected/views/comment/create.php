<?php
$this->breadcrumbs=array(
	'Zdarzenia w projekcie'=>array('index'),
	'Rejestracja nowego zdarzenia',
);

$this->menu=array(
array('label'=>'Lista zdarzeń w projektach','url'=>array('index')),
array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin')),
);
?>

<?php 

$this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => 'Rejestruj zdarzenie',
        'headerIcon' => 'icon-home',
    )
);

echo $this->renderPartial('_form', array('model'=>$model, 'project_id'=>$project_id));

$this->endWidget(); 

//echo $this->renderPartial('_form', array('model'=>$model, 'project_id'=>$project_id)); 

?>