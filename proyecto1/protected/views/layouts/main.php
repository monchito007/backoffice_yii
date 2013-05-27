<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <!-- JQUERY -->
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
</head>

<body>

<div class="container" id="page">

	<div id="header">
                <div id="logo">Panell d'Administracio <i>LocalitzadorWEB</i></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Comentaris', 'url'=>array('/comentaris/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Llocs', 'url'=>array('/llocs/admin'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Recomanacions', 'url'=>array('/recomanacions/admin'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Regiones', 'url'=>array('/regiones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Provincias', 'url'=>array('/provincias/admin'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Municipios', 'url'=>array('/municipios/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Woeid', 'url'=>array('/woeid/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Usuaris', 'url'=>array('/usuaris/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Usuaris No Reg', 'url'=>array('/UsuarisNoReg/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'GD', 'url'=>array('/cerques/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'CSV', 'url'=>array('/importcsv'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Moises Aguilar.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
