<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<small><?php echo (the_time('F jS, Y') . " by ")?><?php the_author(); ?></small>
		<?php the_post_thumbnail( 'medium' ); ?>
		<?php the_excerpt(); ?>
		<h2 id="post-<?php the_ID(); ?>">
	</div>
<?php endwhile; else: ?>
	<div class="container">
		<?php _e( 'There are no posts to show.', 'textdomain' ); ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>