<?php get_header(); ?>

<section class="illust">
  <h1 class="section-heading">人気のイラスト一覧</h1>
  <div class="illust__list">
  <?php
    $query = new WP_Query( c_get_wpp_args( 'post', 'month', 40 ) );

    if ( $query->have_posts() ) :
      while ( $query->have_posts() ) :
          $query->the_post();
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
    wp_reset_postdata();
  ?>
  </div>
  <div class="illust__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>