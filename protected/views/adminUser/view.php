<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

	$this->breadcrumbs=array(
		'Lista użytkowników'=>array('index'),
		$model->username,
	);

	$this->menu=array(
		array('label'=>'Lista użytkowników', 'url'=>array('index')),
		array('label'=>'Dodaj nowego użytkownika', 'url'=>array('create')),
		array('label'=>'Zmień dane użytkownika', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Usuń użytkownika', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Czy na pewno chcesz usunąć tego użytkownika?')),
		array('label'=>'Zarządzaj użytkownikami', 'url'=>array('admin')),
	);
	
?>

<h3>Użytkownik: <?php echo $model->username; ?></h3>

<?php 

	$this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'username',
			'password',
			'roles',
			'email',
		),
	));

?>