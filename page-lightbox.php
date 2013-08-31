<?php
/* Template Name: lightbox
 * The main template file.
*/

get_header(); ?>

  		
  <section class="animated row fadeIn">
  		<?php if (have_posts()) : ?>			
  
 	 	<?php $interview = new WP_Query('category_name=lightbox&order=ASC'); ?>
		<?php while ($interview->have_posts()) : $interview->the_post(); ?>
				
			<div class="span6 animated fadeIn">  
	 	 	
		 	 	<h1> 	 	
		 	 		<?php the_title(); ?>
		 	 	</h1> 	 	
		 	 		<?php the_content(); ?>	
	 	 	</div> 
 	 	<!-- end left panel -->
 	 	

		<div class="span6 animated fadeIn">  
	 	 	<div class="span6">
	 	 	
				<a data-toggle="lightbox" href="#insetLightbox"><p style="font-size: x-small"><i class="icon-search"></i> Enlarge this image</p></a>
	 	 		
	 	 	</div>

 	 	</div> 
		<div id="insetLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-content'>
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('full');
				} ?>
			<div class="lightbox-caption"><p><?php $key="overlay-quote"; echo get_post_meta($post->ID, $key, true); ?></p></div>
			</div>
		</div>
		
 	 	<!-- end right panel -->
 	 	 	 	
 	 	<?php endwhile; ?>
 	  	
 	 
 
		
  </section> 

  
  <?php endif; ?>
  
  <hr/>

<?php get_footer(); ?>