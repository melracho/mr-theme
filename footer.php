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
		
		<div class="site-info">
			<p style="font-size: x-small">
			BASE Theme v.1 &copy; <?php echo date('Y'); ?> Office of the VP, Research & Innovation 
			</p>
		</div>

		
	</footer>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap-lightbox.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>
</body>
</html>