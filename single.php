<?php get_header(); ?>

<div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2 id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?></a></h2>
        <small><?php echo (the_time('F jS, Y') . " by ")?><?php the_author(); ?></small>
        <?php the_post_thumbnail( 'medium' ); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>