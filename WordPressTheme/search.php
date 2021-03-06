<?php get_header(); ?>

<section class="illust" style="min-height: 100vh;">
  <h1 class="section-heading">「<?php the_search_query(); ?>」の検索結果</h1>
  <div class="illust__list">
  <?php
  if (have_posts() && get_search_query()) : 
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
    else :
  ?>
  <p class="illust__not">検索キーワードに該当するイラストがございませんでした。<br>カテゴリーやタグから探してみてください！</p>
  <?php
  endif;
  ?>
  </div>
  <div class="illust__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>