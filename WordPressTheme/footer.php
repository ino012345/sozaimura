<section class="section-category">
  <h1 class="section-heading">カテゴリ</h1>
  <ul class="section-category__list">
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 2 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home.png" alt="生活">
      </a>
    </li>
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 3 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/character.png" alt="キャラ">
      </a>
    </li>
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 4 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work.png" alt="仕事">
      </a>
    </li>
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 6 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thing.png" alt="もの">
      </a>
    </li>
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 8 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event.png" alt="イベント">
      </a>
    </li>
    <li class="section-category__item">
      <a href="<?php echo get_category_link( 1 ); ?>" class="section-category__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other.png" alt="その他">
      </a>
    </li>
  </ul>
</section>
<section class="sns">
  <h1 class="section-heading">SNS</h1>
  <ul class="sns__list">
    <li class="sns__item">
      <a href="#" class="sns__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="Twitter">
      </a>
    </li>
    <li class="sns__item">
      <a href="#" class="sns__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram">
      </a>
    </li>
  </ul>
</section>
<footer class="footer">
  <div class="footer__inner">
    <nav class="footer__nav">
      <ul class="footer__navList">
        <li class="footer__navItem">
          <a href="<?php echo home_url('/'); ?>">ホーム</a>
        </li>
        <li class="footer__navItem">
          <a href="<?php echo home_url('rule'); ?>">利用規約</a>
        </li>
        <li class="footer__navItem">
          <a href="<?php echo home_url('profile'); ?>">プロフィール</a>
        </li>
        <li class="footer__navItem">
          <a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    <p class="footer__copyright">@2021 そざい村</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>