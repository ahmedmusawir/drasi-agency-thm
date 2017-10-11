<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="3833b9f5fb66f58faddede705b2ccac0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<?php wp_head(); ?>
</head>

<?php
    $hero_desktop_bg_image = get_field('hero_background_image_desktop'); // 1476 is post id                               
    $hero_mobile_bg_image = get_field('hero_background_image_mobile'); // 1476 is post id                               
    // $blog_header_image = get_field('page_header_image', 324); // 1476 is post id                               
    $siteLogo = get_field( 'site_logo_image', 5 ); // 1476 is post id                               
    // $size = 'full'; // (thumbnail, medium, large, full or custom size)
?>	

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

<!--=====================================================
=            DARSI HERO IMAGE WITH ANIMATION            =
======================================================-->

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/tilt-img/component-1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/social-proof/style.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/social-proof/modernizr.custom.26633.js"></script>
<noscript>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/social-proof/fallback.css" />
</noscript>

<section id="drasi-home-top-hero-unit" class="demo-2">
    
    <main>
        
        <!-- Initial markup -->
        <div class="segmenter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2.jpg)"></div>
        <h2 class="trigger-headline trigger-headline--hidden">
        <span>D</span><span>R</span><span>A</span><span>S</span><span>I</span>
        <span>
        	<img class="img-responsive logo" src="/wp-content/uploads/2017/10/drasi-media-white-250x250.png" alt="">
        </span>
        <span>M</span><span>E</span><span>D</span><span>I</span><span>A</span></h2>
        <div class="bottom-nav hide">
            <button class="btn btn--trigger">Show Effect</button>
        </div>
    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/anime.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/main.js"></script>
    <script>
    (function() {
        var headline = document.querySelector('.trigger-headline'),
            trigger = document.querySelector('.btn--trigger'),
            segmenter = new Segmenter(document.querySelector('.segmenter'), {
                pieces: 4,
                animation: {
                    duration: 1500,
                    easing: 'easeInOutExpo',
                    delay: 10,
                    translateZ: 100
                },
                parallax: true,
                positions: [
                    {top: 0, left: 0, width: 45, height: 45},
                    {top: 55, left: 0, width: 45, height: 45},
                    {top: 0, left: 55, width: 45, height: 45},
                    {top: 55, left: 55, width: 45, height: 45}
                ],
                onReady: function() {
                    trigger.classList.remove('btn--hidden');
                        segmenter.animate();
                        headline.classList.remove('trigger-headline--hidden');
                        this.classList.add('btn--hidden');
                }
            });
    })();
    </script>
</section>

<!--====  End of DARSI HERO IMAGE WITH ANIMATION  ====-->


	<header id="masthead" class="site-header" role="banner">
	
		<div class="navbar-container">
			<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	
	  		  <div class="container">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php echo $siteLogo; ?>"></a>
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="/wp-content/uploads/2017/06/JenniferBrownLogo-450x144.png"></a> -->
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo-text">INSPIRED <span class="tiana-txt">MOMMY</span> BOSS</span> </a> -->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
	  		  </div><!-- /.container-fluid -->

			</nav> <!-- END NAV BAR -->

				
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	



















