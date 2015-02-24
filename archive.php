<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<div class="content-wrapper">
		<div class="blogwrap clearfix">
		<?php single_cat_title( '', false);  ?>
		<?php if ( category_description() ) : ?>
			<?php echo '<div class="cat-descrip">'.category_description().'</div>'; ?>
			<?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>
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
	</div><!-- /.content-wrapper -->
		<?php else: ?>
		<?php endif; ?>	
<?php get_footer(); ?>