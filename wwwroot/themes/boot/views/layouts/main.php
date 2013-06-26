<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistema de administracion de copias." />
    <meta name="author" content="sherrera" />

    <!-- Style sheets -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet" type="application/x-font-woff" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/m-forms.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/m-buttons.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-slider.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom-slider.css" rel="stylesheet" />
    
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/google-font.css' rel='stylesheet' type='text/css' />



    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.js"></script>

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->basePath; ?>/img/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>





<body>


	<div class="row header">
	   
		<!-- NAV --> 
		  
		<nav class="navbar navbar-fixed-top">
		    <div class="navbar-inner">
		        <div class="container">

		            <a class="btn btn-navbar btntop" data-toggle="collapse" data-target=".nav-collapse">NAVIGATION</a>


		            <h1 class="brand hidden-phone hidden-tablet">
		                <a href="<?php Yii::app()->createUrl('site/index'); ?>">
		                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" alt="" />
		                </a>                            
		            </h1>
		            <div class="nav-collapse">
		            	<?php $this->widget('zii.widgets.CMenu',array(
		            		'htmlOptions'=>array('class'=>'nav pull-right'),
							'items'=>array(
								array('label'=>'Inicio', 'url'=>array('/site/index')),
								array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contacto', 'url'=>array('/site/contact')),
								array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							),
						)); ?>
		            </div>

		        </div>
		    </div>
		</nav>
	</div>

	<div class="pagination-centered mobilelogo hidden-desktop">                  
	    <a href="./index.html">
	        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo_mobile.png" alt="" />
	    </a>
	</div>



	<!-- Start Callout -->
	<div class="row-fluid callout">

		<!-- Start Carousel -->
		<div class="container">

			<?php echo $content; ?>

		</div>
	</div>

</body>
</html>