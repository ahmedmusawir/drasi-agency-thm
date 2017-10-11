<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('home'); ?>

<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-hero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #ef4a83; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.jenniferbrown.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                        	<?php the_field( 'hero_modal_form_code' ); ?>
                        	
                        	<!-- FOLLOWING IS FOR BLOG INDEX PAGE ACF -->
                        	<?php //the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?> 

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP HERO BUTTONMODAL  ====-->

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/component.css" />

<section id="TopHeroBlock" class="demo-2">
    
    <main>
        
        <!-- Initial markup -->
        <div class="segmenter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/7.jpg)"></div>
        <h2 class="trigger-headline trigger-headline--hidden"><span>D</span><span>A</span><span>R</span><span>S</span><span>I</span><span></span><span>M</span><span>E</span><span>D</span><span>I</span><span>A</span></h2>
        <div class="bottom-nav hide">
            <button class="btn btn--trigger">Show Effect</button>
            <nav class="codrops-demos">
                <span>Examples: </span>
                <a href="index.html">1</a>
                <a class="current-demo" href="index2.html">2</a>
                <a href="index3.html">3</a>
                <a href="index4.html">4</a>
                <a href="index5.html">5</a>
                <a href="index6.html">6</a>
            </nav>
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
                    duration: 5500,
                    easing: 'easeInOutExpo',
                    delay: 200,
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

<section id="imb-home-top-roadmap" class="container-fluid">

	<main class="container">
		
		

	</main>
	
</section> <!-- End imb-home-top-roadmap -->	

<section id="imb-home-info-block" class="container-fluid">

	<main class="container">
		
		

	</main>	
	
</section> <!-- End imb-home-info-block -->

<section id="imb-home-testimonial" class="container-fluid">

	<main class="container">
		
		

	</main>	
	
</section> <!-- End imb-home-info-block -->
<?php
get_footer();
