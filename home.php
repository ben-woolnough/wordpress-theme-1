<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <h1>
        <a href="<?php get_permalink( the_post() ) ?>">
            <?php the_title(); ?>
        </a>
      </h1>
      <p><?php echo the_content(); ?></p>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>