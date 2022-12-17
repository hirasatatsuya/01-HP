<footer id="footer">
  <?php if(is_page("contact")):?>
    <?php else: ?>
      <section id="footer_contact">
        <div class="footer_contact_wrapper">
          <div class="footer_contact_contents">
            <a href="<?php echo esc_url(home_url('/contact/')) ?>">
            <p>
              お問合せはこちら　＞
            </p>
          </a>
          </div>
        </div>
      </section>
      <?php endif; ?>
  <section id="footer_main">
    <div class="footer_main_wrapper">
      <div class="footer_sns_wrapper">
        <ul class="footer_sns">
          <!-- <li><a href="https://twitter.com/" class="flowbtn17 fl_tw2"><i class="fab fa-twitter fa-3x"></i></a></li> -->
          <li><a href="<?php echo esc_url("https://instagram.com/zeroichi.inc")?>" class="flowbtn17 insta_btn2"><i class="fab fa-instagram fa-3x"></i></a></li>
          <!-- <li><a href="https://www.youtube.com/user/" class="flowbtn17 fl_yu2"><i class="fab fa-youtube fa-3x"></i></a></li> -->
          <li><a href="<?php echo esc_url("https://lin.ee/LOE1lWU")?>" class="flowbtn17 fl_li2"><i class="fab fa-line fa-3x"></i></a></li>
        </ul>
      </div>
      <nav class="footer_nav">
        <div class="col">
          <h4><a href="<?php echo esc_url(home_url('/philosophy/')) ?>">経営理念</a></h4>
          <h4><a href="<?php echo esc_url(home_url('/business/')) ?>">事業紹介</a></h4>
          <h4><a href="<?php echo esc_url(home_url('/works/')) ?>">実績紹介</a></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/works/')) ?>">映像</a></li>
            <li><a href="<?php echo esc_url(home_url('/works/system/')) ?>">システム開発</a></li>
          </ul>
        </div>
        <div class="col">
          <h4><a href="<?php echo esc_url(home_url('/about/')) ?>">会社情報</a></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/about/members/')) ?>">代表挨拶<br class="sp_560">・役員紹介</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/information/')) ?>">会社概要</a></li>
          </ul>
          <h4><a href="<?php echo esc_url(home_url('/contact/')) ?>">お問合せ</a></h4>
        </div>
        <div class="col">
          <h4><a href="<?php echo esc_url(home_url('/team01/')) ?>">01会</a></h4>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/team01/zeroichi_events/')) ?>">イベント実績</a></li>
            <li><a href="<?php echo esc_url(home_url('/team01/zeroichi_members/')) ?>">メンバー紹介</a></li>
            <li><a href="<?php echo esc_url('https://lin.ee/131wVpf') ?>">01会のお問合せ</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  <section id="footer_copy">
    <p>&copy;2022 zeroichi Co., Ltd. All Rights Reserved</p>
  </section>
</footer>
</body>
<?php wp_footer(); ?>