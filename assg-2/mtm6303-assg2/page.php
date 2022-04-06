<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Assg2
 * @since MTM6303 Assignment2 1.0
 */

get_header(); ?>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                        
			<?php
			while ( have_posts() ) : the_post();
	
				get_template_part( 'template-parts/page/content', 'page' );

			endwhile; // End of the loop.
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h1>
                        <?php echo get_the_title();?>
                    </h1>
                    <?php 
                        while ( have_posts() ) : the_post(); ?>
                            <div class="entry-content-page section-container-spacer">
                                <?php the_content(); ?>
                            </div>

                    <?php
                        endwhile;
                    ?>

               </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer();
