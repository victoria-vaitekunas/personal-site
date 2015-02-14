<?php /*
Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>
<div class="contact clearfix">
		<?php $getform = new WP_Query( array( 'post_type' => 'contact_form', 'posts_per_page' => 10 ) ); ?>

			<?php while ( $getform->have_posts() ) : $getform->the_post(); ?>

			<div class="formwrapper">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
	</div>
<?php get_footer(); ?>