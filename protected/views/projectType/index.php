<?php

	$this->menu=array(
		array('label'=>'Utwórz nowy rodzaj projektu','url'=>array('create')),
		array('label'=>'Zarządzaj rodzajami projektów','url'=>array('admin')),
	);

?>

<h3>Rodzaje projektów</h3>

<?php 

	$this -> widget('bootstrap.widgets.TbGridView', 
		array(
			'dataProvider' => $dataProvider, 
			
			'columns' => array(
							'projectType',
							
							array(
								'class'=>'bootstrap.widgets.TbButtonColumn',
								'template'=>'{view}',
								
								'buttons'=>array
								            (
												'view' => array
												(
													'label'=>'Podgląd rodzaju projektu',
												),
											),
										),
							)
						)
	);

?>