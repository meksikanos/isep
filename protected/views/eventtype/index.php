<?php

	$this->menu=array(
		array('label'=>'Utwórz nowy rodzaj zdarzenia','url'=>array('create')),
		array('label'=>'Zarządzaj rodzajami zdarzeń','url'=>array('admin')),
	);
	
?>

<h3>Rodzaje zdarzeń</h3>

<?php 

	$this -> widget('bootstrap.widgets.TbGridView', 
		array(
			'dataProvider' => $dataProvider, 
			
			'columns' => array(
							'type',
							
							array(
								'class'=>'bootstrap.widgets.TbButtonColumn',
								'template'=>'{view}',
								
								'buttons'=>array
								            (
												'view' => array
												(
													'label'=>'Podgląd zdarzenia',
												),
											),
										),
							)
						)
	);

?>