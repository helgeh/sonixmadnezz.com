<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>

  <div class="container" id="video-container">

  	<?php 

  	$args = array(
  		'tax_query' => array(
  			array(
  				'taxonomy' => 'post_format',
  				'field' => 'slug',
  				'terms' => 'post-format-video'
  				)
  			)
  		);
  	query_posts( $args );

  	?>
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<article class="row-fluid">

  		<section class="span6">
  			<h2><?php the_title(); ?></h2>
  			<?php the_content('read more'); ?>
  		</section>

  		<?php the_post(); ?>

  		<section class="span6">
  			<h2><?php the_title(); ?></h2>
  			<?php the_content('read more'); ?>
  		</section>

  	</article>

  <?php endwhile; ?>

  <footer class="entry-meta row-fluid">
    <?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->

  <?php endif; ?>


	</div><!--  /container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>