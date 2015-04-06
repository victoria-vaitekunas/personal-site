<?php get_header(); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="content-wrapper">
		<div class="blogwrap">
			<div class="blogpost">
				<div class="paralellogram">	
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="blogimg">	
					<?php echo the_post_thumbnail('full'); ?>
				</div>
				<p><?php the_content(); ?></p>
				<?php make_category_links(); ?>
				
				<?php previous_post_link('%link','previous'); ?>
				<?php next_post_link('%link','next'); ?>
			</div><!-- /.single-blog -->
		</div><!-- /.single-blog-wrapper -->
	</div><!-- /.content-wrapper -->
	<?php endwhile; ?>
<?php get_footer(); ?>
