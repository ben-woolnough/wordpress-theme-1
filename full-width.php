<?php /* Template Name: Full-width layout */ ?>

<?php get_header(); ?>

<h1>FULL WIDTH</h1>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>