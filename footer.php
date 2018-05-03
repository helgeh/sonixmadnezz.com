<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package SonixMadnezz
 * @subpackage Template
 */
?>


    <?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			if ( ! is_404() )
				//get_sidebar( 'footer' );
		?>

<hr class="spacer">

  <div class="container">

    <footer class="footer">
  		<div id="site-generator" class="pull-right">
        Powered by 
        <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Wordpress</a> 
        and 
        <a href="http://twitter.github.io/bootstrap/">Bootstrap</a>
  		</div>
      <p>&copy; Sonix Madnezz <?= date('Y'); ?></p>
    </footer>

  </div><!--  /container -->



  <!-- Le javascript -->
  <?php wp_footer(); ?>


<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40305838-1']);
  _gaq.push(['_setDomainName', 'sonixmadnezz.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->




</body>
</html>