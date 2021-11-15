<?php get_header(); ?>

<section class="illust" style="min-height: 100vh;">
  <h1 class="section-heading">404: お探しのページが見つかりませんでした。</h1>
  <div class="illust__list">

  <p class="illust__not">検索キーワードに該当するページがございませんでした。<br>カテゴリーやタグから探してみてください！</p>

  </div>
  <div class="illust__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>