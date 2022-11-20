<!--下層2ページ目 会社情報 -->
<!-- たける -->
<?php
get_header();
?>
  <main id="page-company">
    <div class="bg">
      <div class="triangle1"></div>
      <div class="bar1"></div>
      <div class="bar2 fadeTrigger"></div>
      <div class="triangle2 fadeTrigger"></div>
      <div class="triangle3 fadeTrigger"></div>
    </div>
    <section id="page_mv">
      <h2 class="title">ABOUT</h2>
      <h2 class="title_ja">会社概要</h2>
    </section>

    <section id="office-img">
      <div class="wrapper">
        <!-- <img src="img/fgn-4.jpg" alt=""> -->
      </div>
    </section>





    <section id="company">
      <div class="wrapper">
      <h2 class="heading10 slideLeftTrigger" data-en="COMPANY"><span>会社概要</span></h2>
        <dl class="company-list slideUpTrigger">
          <dt class="company-title u_paragraph">社名</dt>
          <dd class="company-info u_paragraph">株式会社01</dd>
          <dt class="company-title">設立</dt>
          <dd class="company-info">2022年10月15日</dd>
          <dt class="company-title">代表者</dt>
          <dd class="company-info">代表取締役　奥田悠友</dd>
          <dt class="company-title">従業員数</dt>
          <dd class="company-info">10人</dd>
          <dt class="company-title">事務所</dt>
          <dd class="company-info">福岡県中央区大名2-6-11</dd>
          <dt class="company-title">事業内容</dt>
          <dd class="company-info">
            <ul class="company-business-list">
              <li class="company-business-item">ITソリューション事業</li>
              <li class="company-business-item">ブランディング事業</li>
              <li class="company-business-item">コミュニティ運営、イベント企画</li>
              <li class="company-business-item">コンサル事業</li>
              <li class="company-business-item">メディア事業</li>
              <li class="company-business-item">飲食事業</li>
            </ul>
          </dd>
        </dl>
      </div>
    </section>
    

    <section id="office" class="slideUpTrigger">
      <figure class="snip1543">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/fgn2.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">LOCATION</h3>
        <p class="u_paragraph_min">福岡県中央区大名2-6-11</p>

      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543 hover"><img src="<?php echo esc_url(get_theme_file_uri('/img/fgn-3.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">OFFICE</h3>
        <p class="u_paragraph_min">株式会社01のオフィス</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543"><img src="<?php echo esc_url(get_theme_file_uri('/img/fgn.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">FGN</h3>
        <p class="u_paragraph_min">FUKUOKA GROWTH NEXT</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    </section>

    <section id="company-location">
      <div class="wrapper">
      <h2 class="heading10 slideLeftTrigger" data-en="ACCESS"><span>アクセス</span></h2>
        <div class="company-location-flex slideUpTrigger">
          <div class="company-location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6220312257356!2d130.3953071!3d33.5891616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191860efba4d3%3A0xd33287b5f6832abf!2z44CSODEwLTAwNDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSn5ZCN77yS5LiB55uu77yW4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1665123874862!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
get_footer();
?>