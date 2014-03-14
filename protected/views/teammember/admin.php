<?php $this -> breadcrumbs = array('Lista członków zespołu' => array('index'), 'Zarządzanie listą członków zespołu', );

$this -> menu = array( 
	array('label' => 'Lista członków zespołu', 'url' => array('index'), 'visible' => Yii::app() -> user -> checkAccess('admin')), 
	array('label' => 'Dodaj nowego członka zespołu', 'url' => array('create'), 'visible' => Yii::app() -> user -> checkAccess('admin')), 
	);

Yii::app() -> clientScript -> registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('teammember-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Zarządzanie członkami zespołu</h2>

<p>
	Możesz opcjonalnie użyć następujących operatorów (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	lub <b>=</b>) na początku każdej wartości dla danego filtra.
</p>

<?php echo CHtml::link('Wyszukiwanie zaawansowane', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this -> renderPartial('_search', array('model' => $model, )); ?>
</div><!-- search-form -->

<?php $this -> widget('bootstrap.widgets.TbGridView', array('id' => 'teammember-grid', 'dataProvider' => $model -> search(), 'filter' => $model, 'columns' => array('id', 'name', 'surname', 'company', 'position', 'role',
	/*
	 'login',
	 'active',
	 'comment',
	 */
	array('class' => 'bootstrap.widgets.TbButtonColumn', ), ), ));
?>
