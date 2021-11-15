<?php get_header(); ?>

<section class="illust" style="min-height: 100vh;">
  <h1 class="section-heading"><?php single_cat_title(); ?></h1>
  <div class="illust__list">
  <?php
  if (have_posts()) : 
    while (have_posts()) :
      the_post();
  ?>
      <a href="<?php the_permalink(); ?>" class="illust__item">
        <figure class="illust__image">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy.png" alt="ダミー">
          <?php endif; ?>
        </figure>
        <p class="illust__title"><?php the_title(); ?></p>
      </a>
  <?php
    endwhile;
  endif;
  ?>
  </div>
</section>

<?php get_footer(); ?>