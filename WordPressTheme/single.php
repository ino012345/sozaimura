<?php get_header(); ?>

<section class="illust" style="min-height: 100vh;">
  <h1 class="section-heading"><?php the_title(); ?></h1>
  <div class="illust__article">
    <figure class="illust__articleImage">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy.png" alt="ダミー">
      <?php endif; ?>
    </figure>
    <div class="illust__articleText"><?php the_content(); ?></div>
    <div class="illust__category">
      <span>カテゴリー：</span>
      <?php
      $categories = get_the_category();
      foreach($categories as $cat) {
        //(例)classにスラッグを指定したカテゴリーのラベル
        echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>';
      }
      ?>
    </div>
  </div>
  <div class="illust__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>