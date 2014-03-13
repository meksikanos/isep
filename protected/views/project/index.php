<?php $this -> breadcrumbs = array('Lista aktualnych projektów', );

$this -> menu = array( 
						array('label' => 'Dodaj nowy projekt', 'url' => array('create')), 
						array('label' => 'Zarządzaj projektami', 'url' => array('admin')), 
						);
?>

<h1>Lista aktualnie trwających projektów</h1>

<?php $this -> widget('bootstrap.widgets.TbListView', array('dataProvider' => $dataProvider, 'itemView' => '_view', )); ?>
