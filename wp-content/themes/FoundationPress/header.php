<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$site_root = get_site_url();

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $site_root;?>/wp-content/themes/FoundationPress/node_modules/aos/dist/aos.css" />
		<link rel="stylesheet" href="<?php echo $site_root;?>/wp-content/themes/FoundationPress/node_modules/eva-icons/style/eva-icons.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<script src="<?php echo $site_root;?>/wp-content/themes/FoundationPress/node_modules/aos/dist/aos.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
	<div class="gheader">
	<div id="headerfp">
		<div class="logofp">
			<a href="index.html"><img height="65px" src="http://tandt.rs/img/header-logo.svg/img/header-logo.svg" /></a>
		</div>		
	</div>
	<div id="headerfp2">
    	<label>
  			<input type='checkbox'>
  			<span class='menu'>
  			  <span class='hamburger'></span>
  			</span>
  			<ul>
  			  <li>
  			    <a href='http://tandt.rs/'>TandT</a>
  			  </li>			  
  			  <li>
  			    <a href='http://tandt.rs/#our-factory'>Naša fabrika</a>
  			  </li>
                <li>
  			    <a href='http://tandt.rs/portfolio.html'>Naši radovi</a>
  			  </li>
  			  <li>
  			    <a href='http://tandt.rs/#t&team'>T&Team</a>
  			  </li>			  
			  <li>
  			    <a href='http://tandt.rs/#contact-us'>Kontakt</a>
  			  </li>
                
                <li>
  			    <a href='http://tandt.rs/nagradnaigra'>Nagradna igra</a>
  			  </li>
  			</ul>
		</label>
	</div>
</div>


	</header>
