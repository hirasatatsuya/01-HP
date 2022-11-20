<!-- 下層1ページ目 会社概要-->
<!-- 竜也 -->
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
          <p class="next-title u_paragraph">会社概要</p>
          <p class="next-subtitle u_paragraph_min">ABOUT</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/members/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title u_paragraph">代表挨拶</p>
          <p class="next-subtitle u_paragraph_min">MESSAGE</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/members/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title u_paragraph">役員紹介</p>
          <p class="next-subtitle u_paragraph_min">MEMBER</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/information/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title u_paragraph">オフィス</p>
          <p class="next-subtitle u_paragraph_min">OFFICE</p>
        </div>
      </a>
    </div>
    <div class="card">
      <a href="<?php echo esc_url(home_url('/about/information/')) ?>" class="next-link">
        <div class="img-wrapper">
          <img src="<?php echo esc_url(get_theme_file_uri('/img/naoki1.jpg'))?>" alt="">
        </div>
        <div class="next-textarea">
          <p class="next-title u_paragraph">アクセス</p>
          <p class="next-subtitle u_paragraph_min">ACCESS</p>
        </div>
      </a>
    </div>
  </section>
</main>
<?php
get_footer();
?>