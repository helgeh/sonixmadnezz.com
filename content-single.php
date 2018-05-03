<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package SonixMadnezz
 * @subpackage Template
 */
?>

  <div class="container">

		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>Pages:</span>', 'after' => '</div>' ) ); ?>

		<footer class="entry-meta">
			<?php edit_post_link('Edit', '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
  
  </div>
