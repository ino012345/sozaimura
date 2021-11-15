<?php get_header(); ?>

<section class="illust">
  <h1 class="section-heading">人気のイラスト</h1>
  <div class="illust__list">
  <?php
    $query = new WP_Query( c_get_wpp_args(  ) );

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
    <a href="<?php echo home_url('popular'); ?>" class="btn">もっと見る</a>
  </div>
</section>
<section class="illust">
  <h1 class="section-heading">最近のイラスト</h1>
  <div class="illust__list">
  <?php
    $args = array(
      'posts_per_page' => 8 // 表示件数の指定
    );
    $posts = get_posts( $args );
    foreach ( $posts as $post ): // ループの開始
    setup_postdata( $post ); // 記事データの取得
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
    endforeach; // ループの終了
    wp_reset_postdata(); // 直前のクエリを復元する
  ?>
  </div>
  <div class="illust__btnWrap">
    <a href="<?php echo home_url('all'); ?>" class="btn">もっと見る</a>
  </div>
</section>

<?php get_footer(); ?>