<!-- 下層1ページ目 会社概要-->
<!-- たける -->
<?php
get_header();
?>
<main id="about">
  <div class="bg">
    <div class="triangle1"></div>
    <div class="bar1"></div>
    <div class="bar2 fadeTrigger"></div>
    <div class="triangle2 fadeTrigger"></div>
    <div class="triangle3 fadeTrigger"></div>
  </div>
  <section id="page_mv">
    <h2 class="title">COMPANY</h2>
    <h2 class="title_ja">会社情報</h2>
  </section>

  <section class="items">
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/information/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title">会社概要</p>
          <p class="next-subtitle">ABOUT</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/members/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title">代表挨拶</p>
          <p class="next-subtitle">MESSAGE</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/members/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title">役員紹介</p>
          <p class="next-subtitle">MEMBER</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/information/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title">オフィス</p>
          <p class="next-subtitle">OFFICE</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/information/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title">アクセス</p>
          <p class="next-subtitle">ACCESS</p>
        </div>
      </a>
    </div>
  </section>
</main>
<?php
get_footer();
?>