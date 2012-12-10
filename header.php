<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset='UTF-8' />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 <script src="assets/js/libs/modernizr-2.5.3.min.js"></script>
  
<!-- Typekit -->
<script type="text/javascript" src="http://use.typekit.com/XXXXXXX.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body>

<div id="page">

	<header class="section-header">
		<h1><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>" /></h1>
		<?php get_search_form(); ?>
		<?php wp_nav_menu( array('menu' => 'Main', 'container'=> 'nav' )); ?>
	</header>