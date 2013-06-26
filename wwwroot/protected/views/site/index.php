<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="companycallout hidden-phone">
	<div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">
			
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-4"></div>
					<h2>Sistema de Copias</h2>
					<blockquote><p>Simple and elegant. We made it easy for you. Use this template for yourself or your clients.</p></blockquote>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1"></div>
					<h2>Que puedo hacer?</h2>
					<blockquote><p>Using CSS3 you can create great looking effects. The settings of this slider are easy to change. </p></blockquote>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-2"></div>
					<h2>Biblioteca virtual</h2>
					<blockquote><p>Need help with something? We offer support for everyone that buys our templates.</p></blockquote>
				</div>
			</div>

			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
			</nav>
		</div><!-- /slider-wrapper -->
	</div>
</div>

<!-- Blogs -->
<div class="row-fluid news">
	<h2>News</h2>
</div>
<div class="row-fluid">
	<div class="span3">

		<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/blog1.png" alt="" class="member" /></a>
		<h4>Blog post</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisi non ipsum hendrerit condimentum.</p>

	</div>

	<!-- Blog Entries -->

	
	<div class="span3">

		<a href="./blog.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/blog2.png" alt="" class="member" /></a>
		<h4>Blog post</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisi non ipsum hendrerit condimentum.</p>

	</div>


	<div class="span3">

		<a href="./blog.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/blog3.png" alt="" class="member" /></a>
		<h4>Blog post</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisi non ipsum hendrerit condimentum.</p>

	</div>




	<div class="span3">

		<a href="./blog.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/blog4.png" alt="" class="member" /></a>
		<h4>Blog post</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisi non ipsum hendrerit condimentum.</p>

	</div>
</div>