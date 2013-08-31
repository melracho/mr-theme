<?php
/**
 * The template for the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>
</div> <!-- .container -->

  
  
	<footer class="container" id="colophon" role="contentinfo" >
<!-- 	<a href="#" id="more">Fade Out DIV</a> -->
		
		<div class="site-info">
			<?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
			<p style="font-size: x-small">
			Research and Innovation at the University of Toronto | &copy; <?php echo date('Y'); ?> Office of the VP, Research & Innovation 
			<?php if(!is_home() ) { ?>
			| <a style="color:#999;font-size: 12px;" data-toggle="modal" href="#insetPrintcopy"><i class="icon-file"> </i> Request a Print Copy</a>			
			<?php } ?>	
			</p>
		</div>
		<?php $order = new WP_Query('tag=order-copy'); ?>
			<?php while ($order->have_posts()) : $order->the_post(); ?>
			<div id="insetPrintcopy" class="modal hide fade" style="top:3%;"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			    <h2 id="myModalLabel"><strong><?php the_title(); ?></strong></h2>

			    </div>
			<div class="modal-body" style="max-height:540px; padding-top:0;">
			    <p><?php the_content(); ?></p>
			</div>
			  
			<?php endwhile; ?>
		
	</footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap-lightbox.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41546783-1', 'utoronto.ca');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>