<?php get_header('page'); ?>

<section class="complete">
  <h1 class="complete__title">送信完了しました！</h1>
  <p class="complete__text">お問い合わせありがとうございます！<br>引き続き「そざい村」をお楽しみください！</p>
  <div class="complete__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
  <?php the_content(); ?>
</section>

<?php get_footer(); ?>