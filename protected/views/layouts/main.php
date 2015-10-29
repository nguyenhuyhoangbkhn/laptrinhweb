<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"> -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="header-web">
<div class="container ">
	<div id="mainmenu" class="row npl" >
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-4 npl">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/image/logo.png"></a>
	</div>
	<div class="col-md-4 npr">
		<input id="search" class="form-control search-input input-tripopus" placeholder="Search"/>
	</div>
	<div class="col-md-4">
		
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 nplr background-white border-top-right border-left border-bottom border-bottom-left border-bottom-right">
			<div class="col-md-3 nplr ">
				<div class="all-ctg nplr">
				<p class="all-category">Category</p>
				</div>
			</div>
			<div class="col-md-9 nplr border-top-right">
				<div class="newest-book nplr border-right border-left border-top border-top-right">
					<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
					<?php endif?>

					<?php echo $content; ?>

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/quangcao.png" class="border border-radius-5">
			<?php $this->widget('wTop_nxb');?>
			<?php $this->widget('wTop_tacgia');?>
		</div>
	</div>
</div>




	<div id="footer">

	</div><!-- footer -->



</body>
</html>
