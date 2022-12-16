<!--下層2ページ目 会社情報 -->
<!-- たける -->
<?php
get_header();
?>
  <main id="page-company">
    <div class="bg">
      <div class="triangle1"></div>
    </div>
    <section id="page_mv">
      <h2 class="title">ABOUT</h2>
      <h2 class="title_ja">会社概要</h2>
    </section>

    <section id="office-img">
      <div class="wrapper">
        <!-- <img src="img/01-FGN-1.jpg" alt=""> -->
      </div>
    </section>





    <section id="company">
      <div class="wrapper">
      <h2 class="heading10 slideLeftTrigger" data-en="COMPANY"><span>会社概要</span></h2>
        <dl class="company-list slideUpTrigger u_paragraph">
          <dt class="company-title u_paragraph">社名</dt>
          <dd class="company-info u_paragraph">株式会社ゼロイチ</dd>
          <dt class="company-title u_paragraph">設立</dt>
          <dd class="company-info u_paragraph">2022年11月1日</dd>
          <dt class="company-title u_paragraph">代表者</dt>
          <dd class="company-info u_paragraph">代表取締役　奥田悠友</dd>
          <dt class="company-title u_paragraph">従業員数</dt>
          <dd class="company-info u_paragraph">10人</dd>
          <dt class="company-title u_paragraph">事務所</dt>
          <dd class="company-info u_paragraph">福岡県福岡市中央区大名2-6-11</dd>
          <dt class="company-title u_paragraph">事業内容</dt>
          <dd class="company-info">
            <ul class="company-business-list u_paragraph">
              <li class="company-business-item u_paragraph">ブランディング事業</li>
              <li class="company-business-item u_paragraph">ITソリューション事業</li>
              <li class="company-business-item u_paragraph">コミュニティ運営、イベント企画</li>
              <li class="company-business-item u_paragraph">コンサル事業</li>
              <li class="company-business-item u_paragraph">メディア事業</li>
            </ul>
          </dd>
        </dl>
      </div>
    </section>
    

    <section id="office" class="slideUpTrigger">
      <figure class="snip1543">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/01-FGN-2.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">LOCATION</h3>
        <p class="u_paragraph_min">福岡県福岡市中央区大名2-6-11</p>

      </figcaption>
      <!-- <a href="#"></a> -->
    </figure>
    <figure class="snip1543 hover"><img src="<?php echo esc_url(get_theme_file_uri('/img/01-FGN-4.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">OFFICE</h3>
        <p class="u_paragraph_min">株式会社ゼロイチのオフィス</p>
      </figcaption>
      <!-- <a href="#"></a> -->
    </figure>
    <figure class="snip1543"><img src="<?php echo esc_url(get_theme_file_uri('/img/01-FGN-3.jpg')) ?>" />
      <figcaption>
        <h3 class="u_title">FGN</h3>
        <p class="u_paragraph_min">FUKUOKA GROWTH NEXT</p>
      </figcaption>
      <!-- <a href="#"></a> -->
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