<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php strtoupper(bloginfo( 'charset' )); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="HandheldFriendly" content="True">
    <title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link rel="stylesheet" href="css/sc-player-minimal.css" type="text/css" /-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  //if ( is_singular() && get_option( 'thread_comments' ) )
  //  wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>
</head>

<body <?php body_class(); ?>>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand muted" href="/"><?php bloginfo( 'name' ); ?></a>
        <div class="nav-collapse collapse">
          <?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills pull-right' ) ); ?>
        </div>
      </div>
    </div>
  </div>


<?php if ( is_front_page() ) : ?>

  <!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img src="/wp-content/themes/sonixmadnezz/img/slider1.jpg" alt="">
        <!-- <div class="container">
          <div class="carousel-caption">
            <h1>Sonix Madnezz</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            <a class="btn btn-large btn-primary" href="/music">Listen!</a>
          </div>
        </div> -->
      </div>
      <div class="item">
        <img src="/wp-content/themes/sonixmadnezz/img/slider2.jpg" alt="">
        <!-- <div class="container">
          <div class="carousel-caption">
            <h1>Sonix Madnezz</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            <a class="btn btn-large btn-primary" href="/music">Listen!</a>
          </div>
        </div> -->
      </div>
      <div class="item">
        <img src="/wp-content/themes/sonixmadnezz/img/slider3.jpg" alt="">
        <!-- <div class="container">
          <div class="carousel-caption">
            <h1>Sonix Madnezz</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            <a class="btn btn-large btn-primary" href="/music">Listen!</a>
          </div>
        </div> -->
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div><!-- /.carousel -->

  <hr class="spacer">

<?php else : ?>

  <hr class="spacer">

<?php endif; ?>

