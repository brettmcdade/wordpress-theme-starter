<?php get_header(); ?>

<section class="section-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post group">
			<h2><?php the_title(); ?></h2>
			<?php the_content('Read More...'); ?>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>

</section>

<?php get_footer(); ?>