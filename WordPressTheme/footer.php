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