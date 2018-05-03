<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SonixMadnezz
 * @subpackage Template
 */

get_header(); ?>


			<?php if ( have_posts() ) : ?>

				<?php // sonixmadnezz_content_nav( 'nav-above' ); ?>

				<?php 

				$args = array(
				  'tax_query' => array(
				    array(
				      'taxonomy' => 'post_format',
				      'field' => 'slug',
				      'terms' => 'post-format-video',
				      'operator' => 'NOT IN'
				    )
				  )
				);
				query_posts( $args );

				/* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

      			<div class="row-fluid">
        			<div class="span12">
					<?php get_template_part( 'content', get_post_format() ); ?>
        			</div>
      			</div>

				<?php endwhile; ?>

				<?php // sonixmadnezz_content_nav( 'nav-below' ); ?>

			<?php else : ?>

			<!-- <div class="row-fluid">
				<div class="span12">
					<h4><a href="tunes.php">The music we make</a></h4>
					<a href="tunes.php"><img src="http://lorempixel.com/270/110/abstract"></a>
					<p>Take a strole over to the music page and listen to some of our tunes!</p>
				</div>
			</div> -->

			<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>