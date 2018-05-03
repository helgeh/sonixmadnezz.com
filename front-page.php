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


<?php if ( have_posts() ) : the_post(); ?>

  <div class="container">

  		<?php the_content(); ?>

			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->

	</div><!--  /container -->

<hr class="spacer">

<?php endif; ?>



<?php 
	$args = array(
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-video',
				'operator' => 'NOT IN'
				)
			),
		'posts_per_page' => 4
		);
	query_posts( $args );
?>

<?php if ( have_posts() ) : ?>

  <div class="container">

  	<div class="row-fluid">
  		<?php while ( have_posts() ) : the_post(); ?>
  		<div class="span3">
  			<!--a href="<?php the_permalink() ?>"><img src="http://lorempixel.com/270/110/abstract"></a-->
  			<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
  			<div><?php the_excerpt(); ?></div>
  		</div>
	  	<?php endwhile; ?>
	  </div>

	</div><!--  /container -->

<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>