<?php get_header(); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="content-wrapper">
		<div class="single-portfolio-wrapper">
			<div class="single-item">	
				<div class="paralellogram">
					<h2><?php the_title(); ?></h2>
				</div>
					<h3><?php the_field('short_desc'); ?>, created for <?php the_field('client_name'); ?></h3>
						<?php while( has_sub_field('images') ): ?>
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image ?>" alt="">
							<p><?php the_sub_field('caption'); ?></p>
						<?php endwhile; ?>
					<div class="fixlink"><?php the_content(); ?></div>
					<div class="paralellogramlink">
						<p><a href="<?php the_field('link'); ?>">View it live!</a></p>
					</div>
			</div>
		</div><!-- /.single-portfolio-wrapper -->
	</div><!-- /.content-wrapper -->
	<?php endwhile; ?>	
<?php get_footer(); ?>