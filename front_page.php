<?php /*
Template Name: Front Page Template
*/
?>

<?php get_header(); ?>
<!-- start content -->
	<div class="supercontainer clearfix">
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
						  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
			<div class="container">
			  <div class="size side1"></div>
			  <div class="size side2"></div>
			  <div class="size side3"></div>
			  <div class="size side4"></div>
			</div>
	</div><!-- /.supercontainer -->
	<div class="about clearfix">
		<?php $about = new WP_Query(
			array(
				'posts_per_page' => 1,
				'post_type' => 'about'
				)
		); ?>	
		<?php if ($about->have_posts() ) : ?>
			<?php while ($about->have_posts() ) : $about ->the_post(); ?>
				<div class="aboutblurb">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<?php endif; ?>
	</div><!-- /.about -->
	<div class="skills">
		<?php $loop = new WP_Query( array( 'post_type' => 'skills', 'posts_per_page' => 1 ) ); ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<ul>
				<?php while ( has_sub_field('skills') ): ?>
					<li><?php the_sub_field('skill'); ?></li>
				<?php endwhile; ?>
				</ul>
			<?php endwhile; ?>
	</div><!-- /.skills -->
	<div class="learning">
		<?php $loop = new WP_Query( array( 'post_type' => 'current_learning', 'posts_per_page' => 1 ) ); ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<ul>
				<?php while ( has_sub_field('currently') ): ?>
					<li><?php the_sub_field('current'); ?></li>
				<?php endwhile; ?>
				</ul>
			<?php endwhile; ?>
	</div><!-- /.learning -->
	<div class="portfolio clearfix">
		
		<?php $portfolioitem = new WP_Query( 
			array(
				'posts_per_page' => -1,
				'post_type' => 'portfolio'
				) 
		); ?>

		<?php if ( $portfolioitem->have_posts() ) : ?>
			<?php while ( $portfolioitem->have_posts() ) : $portfolioitem->the_post(); ?>
					<div class="pfitem">	
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<div class="pfolioimg">
							<?php while( has_sub_field('images') ): ?>
								<p><?php the_sub_field('caption'); ?></p>
								<?php $image = get_sub_field('image'); ?>
								<img src="<?php echo $image ?>" alt="">
							<?php endwhile; ?>
						</div><!-- /.pfoilioimg -->
						<p><?php the_field('short_desc'); ?></p>
						<p><?php the_field('client_name'); ?></p>
					</div><!-- /.pfitem -->
			<?php endwhile; ?>

		  	<?php wp_reset_postdata(); ?>

		<?php else:  ?>
		<?php endif; ?>
	</div><!-- /.portfolio -->
<?php get_footer(); ?>

