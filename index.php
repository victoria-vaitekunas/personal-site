<!-- this is what pulls bolgs -->
<?php get_header(); ?>
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
	$the_query = new WP_Query( 'cat=1&paged' . $paged ); ?> 
	<?php if ( $the_query->have_posts() ) : ?>
		<div class="blogwrap clearfix">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<div class="blogpost">
			<div class="paralellogram">	
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="blogimg">	
				<?php echo the_post_thumbnail('full'); ?>
			</div>
			<p><?php the_excerpt(); ?></p>	
			<div class="paralellogramlink">
				<p><a href="<?php echo get_permalink(); ?>">Read more</a></p>
			</div>
		</div><!-- /.blogpost -->
	<?php endwhile; ?>
	<?php 
	next_posts_link('Older Entries', $the_query->max_num_pages );
	previous_posts_link('Newer Entries');
	?>
	</div><!-- /.blogwrap -->
	<?php wp_reset_postdata(); ?>
<?php else: ?>
	<p><?php _e("Sorry, no posts found."); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
