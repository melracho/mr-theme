<?php
/*
 * The main template file.
*/

get_header(); ?>


  		
  <section class="row" id="cover-section" style="padding-top:20px;">  
  			
	<?php if (have_posts()) : ?>	 			
  			<?php $menu = new WP_Query('category_name=home&order=ASC'); ?>
			<?php while ($menu->have_posts()) : $menu->the_post(); ?>
			
  	<div class="span6" >
 	 	<div>
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	</div>
 	 	<?php the_content(); ?>
 	 	
 	 	
 	</div> 

  			 <?php endwhile; ?>
  		
  		
  </section>
	
  	<hr/>

<?php get_footer(); ?>