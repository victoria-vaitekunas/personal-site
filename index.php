<!-- this is what pulls bolgs -->
<?php get_header(); ?>
	<div class="blogwrap clearfix">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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
	</div><!-- /.blogwrap -->
<?php get_footer(); ?>
