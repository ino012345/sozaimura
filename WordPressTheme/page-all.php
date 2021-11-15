<?php get_header(); ?>

<section class="illust" style="min-height: 100vh;">
  <h1 class="section-heading">最新のイラスト一覧</h1>
  <div class="illust__list">
  <?php
    $args = array(
      'posts_per_page' => 40 // 表示件数の指定
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
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>