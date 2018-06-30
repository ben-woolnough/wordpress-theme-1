<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1><?php the_title(); ?></h1>
          <?php the_post_thumbnail( 'large' ); ?>
          <p><?php the_content(); ?></p>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('sidebar-right'); ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>