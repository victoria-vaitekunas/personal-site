<!-- this is what pulls bolgs -->
<?php get_header(); ?>
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
	$args = array(
		'posts_per_page'=> 6,
		'paged' => $paged
	);
	$the_query = new WP_Query( $args ); ?> 
	<?php if ( $the_query->have_posts() ) : ?>
	<div class="content-wrapper">
		<div class="blogwrap">
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
			<?php make_category_links(); ?>
		</div><!-- /.blogpost -->
	<?php endwhile; ?>
	<?php wp_pagination(); ?>
	</div><!-- /.blogwrap -->
	<div class="category-list">
		<h3>Browse By Topic</h3>
		<?php make_that_category_list() ?>
	</div>
</div><!-- /.content-wrapper -->
	<?php wp_reset_postdata(); ?>
<?php else: ?>
	<p><?php _e("Sorry, no posts found."); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
