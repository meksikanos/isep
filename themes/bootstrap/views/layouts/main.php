<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php 

	$userRole=AdminUser::TYPE_GUEST;
	if (!Yii::app()->user->isGuest)	
	{
		$userRole=Yii::app()->user->getState('role');
	}

	$this->widget('bootstrap.widgets.TbNavbar',array(
	    'items'=>array(
	        array(
	            'class'=>'bootstrap.widgets.TbMenu',
	            'items'=>array(
	                array('label'=>'Strona główna', 'url'=>array('/site/index')),
	                array('label'=>'O wydziale', 'url'=>array('/site/page', 'view'=>'about')),
	                array('label'=>'Kontakt', 'url'=>array('/site/contact')),
	                array('label'=>'Zaloguj', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	
					array(
	                        'label' => 'Zespół',
	                        'items' => array(
	                            array('label' => 'Członkowie zespołu', 'url'=>array('teammember/index')),
	                        ),
	                        'visible'=>!Yii::app()->user->isGuest,
	                    ),
	
					array(
	                        'label' => 'Projekty',
	                        'items' => array(
	                            array('label' => 'Lista aktualnych projektów', 'url'=>array('project/index')),
	                            array('label' => 'Statystyki aktualnych projektów', 'url'=>array('project/projectstats')),
	                            array('label' => 'Dodaj projekt', 'url'=>array('project/create'),'visible'=>Yii::app()->user->checkAccess('admin')),
	                            array('label' => 'Lista zdarzeń projektowych', 'url'=>array('comment/index')),
	                            array('label' => 'Rejestruj zdarzenie projektowe', 'url'=>array('comment/create'),'visible'=>(Yii::app()->user->checkAccess('admin','member') )),
	                        ),
	                        'visible'=>!Yii::app()->user->isGuest,
	                    ),
	                    
					array(
						'label' => 'Zarządzanie witryną',
						'items' => array(
								array('label'=>'Zarządzaj użytkownikami', 'url'=>array('adminUser/index'), 'visible'=>Yii::app()->user->checkAccess('admin')),
	                            array('label' => 'Statusy projektów', 'url'=>array('projectStatus/index'),'visible'=>Yii::app()->user->checkAccess('admin')),
	                            array('label' => 'Rodzaje projektów', 'url'=>array('projectType/index'),'visible'=>Yii::app()->user->checkAccess('admin')),
	                            array('label' => 'Rodzaje zdarzeń w projekcie', 'url'=>array('eventtype/index'),'visible'=>Yii::app()->user->checkAccess('admin')),
						),
						'visible'=>Yii::app()->user->checkAccess('admin'),
					),
	
					array(
						'label' => 'Moje konto',
						'items' => array(
										array('label'=>'Zmień hasło', 'url'=>array('/site/changepassword'), 'visible'=>!Yii::app()->user->isGuest),
									),
						'visible'=>!Yii::app()->user->isGuest,
					),
					
	                array('label'=>'Wyloguj ('.Yii::app()->user->name.'):'.$userRole, 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
	            ),
	        ),
	    ),
	)); 

?>

<div id="header"></div>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

<!--	<div class="clear"></div> -->
</div><!-- page -->
<div id="options"><div id="options_elements">

<?php

	$this->widget(
	    'bootstrap.widgets.TbMenu',
	    array(
	        'type' => 'pills',
	       'items' => array(
	
	            array(
	                'label' => 'Strona główna',
	                'url'=> array('/site/index'),
	            ),
	            
	            array('label' => 'O wydziale', 'url' => array('/site/page', 'view'=>'about')),
	            
	            array('label' => 'Kontakt', 'url' => array('/site/contact')),
				
				array('label'=>'Zaloguj', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Zmień hasło', 'url'=>array('/site/changepassword'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Wyloguj ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
	        )
	    )
	);
	
?>

</div></div>

<div id="footer">
	Created &copy; <?php echo date('Y'); ?> by Marcin Mołodecki &nbsp;
</div><!-- footer -->
</body>
</html>