<?php get_header('page'); ?>

<section class="section-profile">
<h1 class="section-heading">プロフィール</h1>
  <figure class="section-profile__image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.png" alt="プロフィール画像">
  </figure>
  <ul class="section-profile__list">
    <li class="section-profile__item">
      <h2>なまえ</h2>
      <p>ちょぶらん</p>
    </li>
    <li class="section-profile__item">
      <h2>しゅみ</h2>
      <p>ゲームがだいすき！生き物もすき！</p>
    </li>
    <li class="section-profile__item">
      <h2>とくぎ</h2>
      <p>ゆるかわイラストを描くこと</p>
    </li>
    <li class="section-profile__item">
      <h2>ごあいさつ</h2>
      <p>そざい村に来ていただき、ありがとうございます！<br>イラストがいっぱいの見るだけで楽しいホームページにしたいと思っています。欲しい素材がありましたら、お気軽にリクエストして下さい♪</p>
    </li>
  </ul>
  <div class="section-profile__btnWrap">
    <a href="<?php echo home_url('/'); ?>" class="btn">ホームに戻る</a>
  </div>
</section>

<?php get_footer(); ?>