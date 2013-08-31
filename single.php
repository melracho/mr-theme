<?php
/*
 * The main template file.
*/

get_header(); ?>

  		
  <section class="row">  			
 	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="span12">
 	 	<h2>
 	 		<?php the_title(); ?>
 	 	</h2>
 	 	
 	 	<p>
 	 	<?php the_content(); ?>
 	 	</p>
  </div>
  	<?php endwhile; ?>
  	<?php endif; ?>			
  			
  		
  </section>
  
  <hr/>

<?php get_footer(); ?>