<?php Yii::app()->bootstrap->register(); ?>
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



    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.custom.79639.js"></script>

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
								array('label'=>'Nosotros', 'url'=>array('/site/about', 'view'=>'about')),
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

		<div class="row-fluid">
			<div class="container footer">
	            <!-- Copyright and contact -->
	            <div class="span4 address">
		            &copy;2013 Diseñado por Cucompany
		            <br />La Plata
		            <br />Buenos Aires
	            </div>

	              <!-- newsletter form -->

	            <div class="span5 pull-right footer-newsletter">
	            	<h2>Novedades</h2>
	                <p>Subscribete para recibir las &uacute;ltimas noticias</p>
	                <form action="mail.php" id="subscribe-form" method="post" />
		                <input type="text" name="email" id="email" placeholder="Your Email Address" class="input-text m-wrap m-ctrl" />
		                <button type="submit" class="m-btn blue">Enviar</button>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
 	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
  	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ba-cond.min.js"></script>
  	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.slitslider.js"></script>
  	<script type="text/javascript"> 
    $(function() {
    
      var Page = (function() {

        var $nav = $( '#nav-dots > span' ),
          slitslider = $( '#slider' ).slitslider( {
          	interval : 4000,
            onBeforeChange : function( slide, pos ) {

              $nav.removeClass( 'nav-dot-current' );
              $nav.eq( pos ).addClass( 'nav-dot-current' );

            }
          } ),

          init = function() {

            initEvents();
            
          },
          initEvents = function() {

            $nav.each( function( i ) {
            
              $( this ).on( 'click', function( event ) {
                
                var $dot = $( this );
                
                if( !slitslider.isActive() ) {

                  $nav.removeClass( 'nav-dot-current' );
                  $dot.addClass( 'nav-dot-current' );
                
                }
                
                slitslider.jump( i + 1 );
                return false;
              
              } );
              
            } );

          };

          return { init : init };

      })();

      Page.init();

      /**
       * Notes: 
       * 
       * example how to add items:
       */

      /*
      
      var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
      
      // call the plugin's add method
      ss.add($items);

      */
    
    });
  	</script>


</body>
</html>