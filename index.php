<?php
/*
 * The main template file.
*/

get_header(); ?>


  		
  <section class="row">  
  			
	<?php if (have_posts()) : ?>	 			
  			<?php $home = new WP_Query('tag=home&order=ASC'); ?>
			<?php while ($home->have_posts()) : $home->the_post(); ?>
			
  	<div class="span12" >
 	 	<div>
 	 	<h1>
 	 	<?php the_title(); ?>
 	 	</h1>
 	 	</div>
 	 	<?php the_content(); ?>
 	 	
 	 	
 	</div> 

  			 <?php endwhile; ?>
  		
  </section>
  	<?php endif; ?>
	
  	<hr/>

<?php get_footer(); ?>
