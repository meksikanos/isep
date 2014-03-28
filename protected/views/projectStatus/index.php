<?php

	$this->menu=array(
		array('label'=>'Utwórz nowy status projektu','url'=>array('create')),
		array('label'=>'Zarządzaj statusami projektów','url'=>array('admin')),
	);
	
?>

<h3>Statusy projektów</h3>

<?php 

	$this -> widget('bootstrap.widgets.TbGridView', 
		array(
			'dataProvider' => $dataProvider, 
			
			'columns' => array(
							'statusName',
							
							array(
								'class'=>'bootstrap.widgets.TbButtonColumn',
								'template'=>'{view}',
								
								'buttons'=>array
								            (
												'view' => array
												(
													'label'=>'Podgląd statusu projektu',
												),
											),
										),
							)
						)
	);

?>