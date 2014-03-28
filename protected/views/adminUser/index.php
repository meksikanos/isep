<?php
/* @var $this AdminUserController */
/* @var $dataProvider CActiveDataProvider */

	$this->menu=array(
		array('label'=>'Dodaj nowego użytkownika', 'url'=>array('create')),
		array('label'=>'Zarządzaj użytkownikami', 'url'=>array('admin')),
	);
	
?>

<h3>Lista użytkowników</h3>

<?php 

	$this -> widget('bootstrap.widgets.TbGridView', 
		array(
			'dataProvider' => $dataProvider, 
			
			'columns' => array(
							'username',
							'roles',
							'email',
							
							array(
								'class'=>'bootstrap.widgets.TbButtonColumn',
								'template'=>'{view}',
								
								'buttons'=>array
								            (
												'view' => array
												(
													'label'=>'Podgląd użytkownika',
												),
											),
										),
							)
						)
	);

?>