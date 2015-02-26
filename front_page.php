<?php /*
Template Name: Front Page Template
*/
?>

<?php get_my_header(); ?>
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
	<div class="content-wrapper">
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
			<div class="headshot">
				<?php echo get_the_post_thumbnail(); ?>
			</div><!-- /.headshot -->
			<div class="abouttext">
				<div class="paralellogram">
					<h2 id="about"><?php the_title(); ?></h2>
				</div>
				<p><?php the_content(); ?></p>
			</div><!-- /.abouttext -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
		</div><!-- /.aboutblurb -->
		<div class="aboutlist">
			<div class="skills">
			<?php $loop = new WP_Query( array( 'post_type' => 'skills', 'posts_per_page' => 1 ) ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="paralellogram">
						<h2><?php the_title(); ?></h2>
					</div>
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
					<div class="paralellogram">
						<h2><?php the_title(); ?></h2>
					</div>
					<ul>
					<?php while ( has_sub_field('currently') ): ?>
						<li><?php the_sub_field('current'); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endwhile; ?>
	     	</div><!-- /.learning -->
		</div><!-- /.aboutlist -->
	</div><!-- /.about -->
	<div class="portfolio clearfix">
		<div class="paralellogram">	
			<h2 id="portfolio">Recent Work</h2>
		</div>
		<div class="flexslider">
			<ul class="slides">	
		<?php $portfolioitem = new WP_Query( 
			array(
				'posts_per_page' => -1,
				'post_type' => 'portfolio'
				) 
		); ?>

		<?php if ( $portfolioitem->have_posts() ) : ?>
			<?php while ( $portfolioitem->have_posts() ) : $portfolioitem->the_post(); ?>
								<li>
					<div class="pfitem clearfix">	
								<div class="pfolioimg clearfix">
								<div class="frame-wrapper">  
  									<div class="frame">
    									<div class="camera"></div>
    									<div class="framedimage">
											<?php echo the_post_thumbnail('full'); ?>
										</div>
										<div class="button"></div>
  									</div><!-- /.frame -->
  									<div class="base"></div>
  									<div class="foot"></div>
 								</div><!-- /.frame-wrapper -->
								</div><!-- /.pfoilioimg -->
								<div class="pfolioinfo">
									<h2><?php the_title(); ?></h2>
									<div class="thecontent"><p><?php the_content(); ?></p></div>
									<p class="shortcontent"><?php the_field('short_desc'); ?>, created for <?php the_field('client_name'); ?></p>
									<div class="paralellogram2">	
										<p><a href="<?php echo post_permalink();?>">More</a></p>
									</div>
								</div><!-- /.pfoilioinfo -->
					</div><!-- /.pfitem -->
								</li>
			<?php endwhile; ?>

		  	<?php wp_reset_postdata(); ?>

		<?php else:  ?>
		<?php endif; ?>
		</ul><!-- /.slides -->
	</div><!-- /.flexslider -->
</div><!-- /.portfolio -->
</div><!-- /.content-wrapper -->
<?php get_footer(); ?>

