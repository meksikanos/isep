<?php
	/* @var $this SiteController */
	$this->pageTitle=Yii::app()->name;
?>

<div style="width:800px;margin: 0% 9% 0% 0%;">
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        	array('image'=>'/isep/images/slide01.png', 'label'=>'Platforma ISeP', 'caption'=>'Witamy na platformie ISeP.'),
        	array('image'=>'/isep/images/slide02.png', 'label'=>'Architektura', 'caption'=>'Tworzymy i rozwijamy architekturę systemów na potrzeby usług dodanych.'),
			array('image'=>'/isep/images/slide03.png', 'label'=>'Oprogramowanie', 'caption'=>'Rozwijamy i utrzymujemy oprogramowanie wspierające platformy BiRSiPU w zakresie usług dodanych.'),
    ),
)); ?>

</div>
<div style="width:800px;margin: 0% 9% 0% 0%;">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(

)); ?>
 	<h3>Witamy na stronie Wydziału Platform Wspierających!</h3>
    <p>Jesteśmy zespołem, który tworzy oprogramowanie w Orange. Rozwijamy platformy wspierające wdrażanie usług dodanych dla rynku Prepaid i MIX.</p>
    <p style="float:right;"><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Dowiedz się więcej',
        'url' => array('/site/page', 'view'=>'about'), 
    )); ?></p>
 
<?php $this->endWidget(); ?>

</div>