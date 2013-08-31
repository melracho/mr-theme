<?php
/**
 * The Header.
 *
 */
?>
<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

 <!-- Basic Page Needs
================================================= -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php wp_title( '&larr;', true, 'right' ); ?></title>
 <meta name="description" content="">
 <meta name="author" content="">
 
 <!-- Mobile Specific Metas
================================================= -->
 <meta name="HandheldFriendly" content="True">
 <meta name="MobileOptimized" content="320">
 <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
 
 <!-- CSS 
 ================================================= -->
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/animate.min.css">
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/bootstrap.css">
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/bootstrap-responsive.css">

<!--[if lte IE 8]>
	<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/ie.css">
<![endif]-->
<!--[if lt IE 9]>
	<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/ie.css">
<![endif]-->

<link rel="stylesheet" media="print" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/print.css">
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/screen.css">
<link rel="stylesheet" media="screen, projection" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/bootstrap-lightbox.css">

 
 <!-- Browser Specific Javascript
================================================= -->
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

 <!--[if (lt IE 9) & (!IEMobile)]>
 <script src="js/vendor/selectivizr-min.js"></script>
 <![endif]-->

<!-- Prevents links from opening in mobile Safari -->
 <!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->

 <!-- Favicon and apple-touch-icon.png in the img folder. Include the ones you need.
 ================================================== -->
 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">


 <!-- Windows 8 startup screen
 ================================================== -->
<meta name="application-name" content="MR Theme | Based on HTML5BP and Twitter BS"/> 
<meta name="msapplication-TileColor" content="#111111"/> 
<meta name="msapplication-TileImage" content="img/22905266-8309-4b75-aa81-6d270415e8d7.png"/>
 
 <!-- Font Smoothing FF/Windows
 ================================================== -->
 <meta http-equiv="cleartype" content="on">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  
  <div class="container">
  	<nav role="navigation" id="nav" class="toggle">
	    <div class="row">
		    <div class="span6">
			    <?php if (!is_home()) { ?> 
			    <div style="padding-bottom:20px;padding-top: 20px;">
			    <a href="<?php echo home_url(); ?>" style="color:#999; font-size: 12px;"><i class="icon-home"></i> Home</a> 
			    <span id="showall-menu">
			    <a href="#" style="color:#999; font-size: 12px;"><i class="icon-th-large"></i> Menu</a>
			    </span>  
		    	<div id="thumbnails" class="hide">

			   
			   
		    	<?php  wp_nav_menu( array(
				 'theme_location'    => 'navigation_menu_primary',
				 'container'     => 'div',
				 'menu' => 'main',
				 'container_id'      => 'main-navigation-primary',
				 'container_class'   => 'four columns container',
				 'menu_class'        => 'menu main-menu menu-depth-0 menu-even', 
				 'echo'          => true,
				 'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				 'depth'         => 10, 
				 'walker'        => new themeslug_walker_nav_menu) );
				 ?>
				 <?php get_search_form(); ?>  

				 </div> 
				 
		


  			
		    <?php } ?>
  

		    </div>
		</div>
		    

		    
    </nav>
  </div>
  
 <!-- The Main content area can be used to create lots of different block areas. 
  As Jeffery Zeldman once said, "Content precedes design. Design in the absence 
  of content is not design, it's decoration." -->
  <div class="container clearfix animated fadeIn">	