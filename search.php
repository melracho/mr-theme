<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header(); ?>

<section class="row">

				

				<div class="span12">
				<h2><?php printf( __( 'Search Results for: %s', 'mr-theme' ), '<span style="font-weight:300;">' . get_search_query() . '</span>' ); ?></h2>
					<ul class="thumbnails"> 
						<?php if ( have_posts() ) : ?>				
						<?php while ( have_posts() ) : the_post(); ?>
						<?php if(has_tag('menu') || has_tag('rpy-newton') &&  has_post_thumbnail()) { ?>				
						<li class="span2 ">
						<a href="<?php $key="menu-url"; echo get_post_meta($post->ID, $key, true); ?>" data-placement="bottom" class="menu-tooltip" data-toggle="tooltip" data-original-title="<?php the_title_attribute(); ?>">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
								} ?>
						</a>
						<?php } ?>						
						</li>
						<?php endwhile; ?>				
					</ul>				
				</div>
				
				
				
				<?php else : ?>							
				
				<div class="span12">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'mr-theme' ); ?></p>
						<?php get_search_form(); ?>
				</div><!-- .entry-content -->

				<?php endif; ?>
</section>
				
<hr/>
<?php get_footer(); ?>