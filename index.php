<?php get_header(); ?>

<section class="section-content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
		<?php the_content('Read More...'); ?>
	</div> <!-- /End post -->

	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>

</section>

<?php get_footer(); ?>