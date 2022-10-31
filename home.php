<!-- トップページ -->
<?php
get_header();
?>
<main id="home">
  <div id="splash">
    <div id="splash_text"><img src="<?php echo esc_url(get_theme_file_uri("/img/zeroichi_logo2_white.svg")) ?>" alt=""></div>
    <div class="loader_cover loader_cover-up"></div>
    <!--上に上がるエリア-->
    <div class="loader_cover loader_cover-down"></div>
    <!--下に下がるエリア-->
    <!--/splash-->
  </div>
  <!-- <div class="home_mv_bg_white"></div> -->
  <section id="mv" class="sticky">
    <div class="section_bg_mv"></div>
    <div class="home_header">
      <div class="header_wrapper">
        <nav class="header_nav">
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/philosophy')); ?>">
                <p class="header_en">identity</p>
                <p class="header_ja">経営理念</p>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/business/')) ?>">
                <p class="header_en">business</p>
                <p class="header_ja">事業紹介</p>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/works/')) ?>">
                <p class="header_en">works</p>
                <p class="header_ja">実績紹介</p>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/about/')) ?>">
                <p class="header_en">about</p>
                <p class="header_ja">会社概要</p>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/team01/')) ?>">
                <p class="header_en">team01</p>
                <p class="header_ja"> 01会</p>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/contact/')) ?>">
                <p class="header_en">contact</p>
                <p class="header_ja">お問合せ</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="mv_title_Trigger">
      <h1>01</h1>
      <h2>zeroichi</h2>
    </div>
    <div class="scrolldown_Trigger"><span>Scroll</span></div>
  </section>
  <section id="home_philosophy" class="sticky">
    <div class="section_bg_philo"></div>
    <div class="home_wrapper">
      <div class="home_philo_bg">
        <div class="home_philo_bg_box  home_1_fadeTrigger"></div>
        <div class="home_philo_bg_bar home_philo_bg_bar1 home_appear_Trigger"></div>
        <div class="home_philo_bg_bar home_philo_bg_bar2 home_appear_Trigger"></div>
      </div>
      <h3 class="FadeSlideLeftTrigger">「伝える」を "より" 自由に。</h3>
      <div class="home_philo_flex">
        <div class="left">
          <p class="FadeSlideLeftTrigger">
            2001年私たち創業メンバーは生まれました。<br><br>
            そこから十数年、目まぐるしく環境は変化してきました。<br>
            私たちが子供の頃はガラケー。高校生になる頃にはスマホが普及し、日常の会話にも大きな変化がありました。<br><br>
            私たちはそんな変化の激しい世の中に生まれ、変化を感じてきたからこそ、「伝える」を"より"自由にするべく未来に進みます。<br><br>
            私たち若い世代が輝き、0→1でこれまでと異なる新しい世界を届けます。
            人と人とを繋ぐ「架け橋」へと、<br>
            より笑いが溢れる世界へと、<br>
            その手段として株式会社ゼロイチは在り続けます。
          </p>
        </div>
        <div class="right home_1_fadeTrigger">
          <h4 class="right_title">Identity</h4>
          <h5 class="right_sub">経営理念</h5>
          <p class="right_text">Vision<br>Mission<br>Value</p>
          <a href="<?php echo esc_url(home_url("/philosophy/")) ?>" class="readmore home_1_fadeTrigger">
            <i class="fa-regular fa-square fa-5x"></i>
            <p class="readmore_p home_1_fadeTrigger">Read More</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="home_business" class="sticky">
    <div class="section_bg_busi"></div>
    <div class="home_wrapper">
      <h3 class="home_busi_bg_title">business</h3>
      <div class="home_busi_content">
        <h4 class="home_busi_title"><span class="smoothText"><span class="smoothTextTrigger">Business</span></span></h4>
        <div class="home_busi_main home_2_fadeTrigger">
          <div class="grid">
            <div class="item">
              <div class="item_icon">
                <img src="<?php echo esc_url(get_theme_file_uri("/img/busi_1.svg")) ?>" alt="">
              </div>
              <div class="item_title">
                <p>コミュニティ運営 <br class="sp">イベント企画</p>
              </div>
              <div class="item_text">
                <p>「01会」という2001年世代限定のコミュニティを運営。
                  企業や行政、団体とコラボしており、若者のマーケティング戦略に特化しています。
                </p>
              </div>
            </div>
            <div class="item">
              <div class="item_icon">
                <img src="<?php echo esc_url(get_theme_file_uri("/img/busi_2.svg")) ?>" alt="">
              </div>
              <div class="item_title">
                <p>コンサル事業</p>
              </div>
              <div class="item_text">
                <p>若いからこそできる「バズる」ご提案。
                  「今どき」「流行り」に敏感な私たちが、01会で培ったコミュニティ作りやイベント企画、運用で御社をサポートします。
                </p>
              </div>
            </div>
            <div class="item">
              <div class="item_icon">
                <img src="<?php echo esc_url(get_theme_file_uri("/img/busi_3.svg")) ?>" alt="">
              </div>
              <div class="item_title">
                <p>メディア事業</p>
              </div>
              <div class="item_text">
                <p>地方特化型のメディア構築。地方の認知格差を是正し、よりディープな地方の情報発信を。</p>
              </div>
            </div>
            <div class="item">
              <div class="item_icon">
                <img src="<?php echo esc_url(get_theme_file_uri("/img/busi_4.svg")) ?>" alt="">
              </div>
              <div class="item_title">
                <p>飲食事業</p>
              </div>
              <div class="item_text">
                <p>京都を中心に天壇という焼肉店を運営している株式会社晃商様と共に、地域に根付いた飲食店を経営していきます。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $args = array(
    'posts_per_page' => 5,
    'category_name' => 'movie',
  );
  $posts = get_posts($args);
  $count = 0;
  while (count($posts) < 5) {
    $posts[] = '';
  }
  $count = 0;
  foreach ($posts as $post) :
    if (!empty($post)) :
      $movie_content[$count] = get_the_title();
      if (!has_post_thumbnail()) :
        $movie_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon.jpg"));
      else :
        $movie_thumbnail[$count] = get_the_post_thumbnail_url();
      endif;
    else :
      $movie_content[$count] = "coming soon...";
      $movie_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon.jpg"));
    endif;
    $count++;
  endforeach; ?>
  <?php wp_reset_postdata(); ?>


  <section id="home_works" class="sticky">
    <div class="section_bg_works"></div>
    <div class="home_wrapper">
      <h3 class="home_works_title"><span class="smoothText"><span class="smoothTextTrigger">Works</span></span></h3>
      <div class="home_works_flex ">
        <div class="left slideLeftTrigger">
          <h4 class="left_title">Movie</h4>
          <div class="slider">
            <div class="slides">
              <div id="left_slide_1" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[0] ?>" alt="">
                </a>
                <div class="slide_text">
                  <?php echo $movie_content[0]; ?>
                </div>
              </div>
              <div id="left_slide_2" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[1] ?>" alt="">
                </a>
                <div class="slide_text">
                  <?php echo $movie_content[1]; ?>
                </div>
              </div>
              <div id="left_slide_3" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[2] ?>" alt="">
                </a>
                <div class="slide_text">
                  <?php echo $movie_content[2]; ?>
                </div>
              </div>
              <div id="left_slide_4" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[3] ?>" alt="">
                </a>
                <div class="slide_text">
                  <?php echo $movie_content[3]; ?>
                </div>
              </div>
              <div id="left_slide_5" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[4] ?>" alt="">
                </a>
                <div class="slide_text">
                  <?php echo $movie_content[4]; ?>
                </div>
              </div>
            </div>
          </div>
          <a href="" class="readmore">
            <i class="fa-regular fa-square fa-5x"></i>
            <p class="readmore_p">Read More</p>
          </a>
        </div>
        <?php
        $args = array(
          'posts_per_page' => 5,
          'category_name' => 'system',
        );
        $posts = get_posts($args);
        while (count($posts) < 5) {
          $posts[] = '';
        }
        $count = 0;
        foreach ($posts as $post) :
          if (!empty($post)) :
            $system_content[$count] = get_the_title();
            if (!has_post_thumbnail()) :
              $system_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon.jpg"));
            else :
              $system_thumbnail[$count] = get_the_post_thumbnail();
            endif;
          else :
            $system_content[$count] = "coming soon...";
            $system_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon.jpg"));
          endif;
          $count++;
        endforeach;
        ?>
        <?php wp_reset_postdata(); ?>

        <div class="right slideRightTrigger">
          <h4 class="right_title">System</h4>
          <div class="slider ">
            <div class="slides">
              <div id="right_slide_1" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[0] ?>" alt="">
                </div>
                <div class="slide_text">
                  <?php echo $system_content[0]; ?>
                </div>
              </div>
              <div id="right_slide_2" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[1] ?>" alt="">
                </div>
                <div class="slide_text">
                  <?php echo $system_content[1]; ?>
                </div>
              </div>
              <div id="right_slide_3" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[2] ?>" alt="">
                </div>
                <div class="slide_text">
                  <?php echo $system_content[2]; ?>
                </div>
              </div>
              <div id="right_slide_4" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[3] ?>" alt="">
                </div>
                <div class="slide_text">
                  <?php echo $system_content[3]; ?>
                </div>
              </div>
              <div id="right_slide_5" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[4] ?>" alt="">
                </div>
                <div class="slide_text">
                  <?php echo $system_content[4]; ?>
                </div>
              </div>
            </div>
          </div>
          <a href="" class="readmore">
            <i class="fa-regular fa-square fa-5x"></i>
            <p class="readmore_p">Read More</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="home_about" class="sticky">
    <div class="section_bg_about"></div>
    <div class="home_about_bg">
      <div class="home_about_bg_box1"></div>
      <div class="home_about_bg_box2"></div>
    </div>
    <div class="home_wrapper">
      <div class="img  home_4_fadeTrigger"><img src="<?php echo esc_url(get_theme_file_uri("/img/group.jpg")) ?>" alt=""></div>
      <h3 class="home_about_title"><span class="smoothText"><span class="smoothTextTrigger">About</span></span></h3>
      <div class="home_about_content">
        <p class="home_about_text FadeSlideLeftTrigger">若さを活かし革新的なアイディアでこの世界を底上げする会社です。<br>

          個性豊かなメンバーで。
          個性溢れた提案を。
          個性×若さで思考の自由を湧かせます。

          若者らしく、好奇心旺盛でたくさんやりたいことを面白く全力でやります。<br>

          より自由に、よりクリエイティブに。</p>
        <a href="" class="readmore  home_4_fadeTrigger">
          <i class="fa-regular fa-square fa-5x"></i>
          <p class="readmore_p">Read More</p>
        </a>
      </div>
    </div>
  </section>
  <section id="home_01" class="sticky">
    <div class="section_bg_01"></div>
    <div class="home_wrapper">
      <h3 class="home_01_title"><span class="smoothText"><span class="smoothTextTrigger">Team01</span></span></h3>

      <div class="slider_01  home_5_fadeTrigger">
        <ul>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event1.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event2.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event3.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event4.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event5.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event6.jpg")) ?>" alt=""></li>
        </ul>
        <ul>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event7.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event8.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event9.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event10.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event11.jpg")) ?>" alt=""></li>
          <li><img src="<?php echo esc_url(get_theme_file_uri("/img/event12.jpg")) ?>" alt=""></li>
        </ul>
      </div>
      <div class="home_01_content">
        <div class="left">
          <p class="home_01_text FadeSlideLeftTrigger">2021年10月より立ち上がった「01会」。<br>2001年生まれ世代限定のコミュニティです。これがなければ株式会社ゼロイチはありませんでした。最高の仲間と出会える場所、それが「01会」です。これからは株式会社ゼロイチの一つの事業として「01会」を全国に展開し、より発展させていきます。ここに集まってくれた仲間のために最高に『可笑しい』コミュニティを運営します。</p>
        </div>
        <div class="right  home_5_fadeTrigger">
          <a class="readmore" href="<?php echo esc_url(home_url("/team01/")) ?>">
            <i class="fa-regular fa-square fa-5x"></i>
            <p class="readmore_p">Read More</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="home_contact" class="sticky">
    <div class="home_wrapper">
      <h3 class="home_contact_title"><span class="smoothText"><span class="smoothTextTrigger">Contact</span></span></h3>
      <div class="home_contact_box">
        <div class="left">
          <dl>
            <div class="home_contact_table_items">
              <dt>会社名</dt>
              <dd>株式会社ゼロイチ</dd>
            </div>
            <hr>
            <div class="home_contact_table_items">
              <dt>電話番号</dt>
              <dd><a href="tel:000-1234-5678">000-1234-5678</a></dd>
            </div>
            <hr>
            <div class="home_contact_table_items">
              <dt>メールアドレス</dt>
              <dd>XXXX@XXXX.XXX</dd>
            </div>
            <hr>
            <div class="home_contact_table_items">
              <dt>所在地</dt>
              <dd>〒000-0000<br>福岡県XX市X丁目<br class="pc">XXX-XXX</dd>
            </div>
          </dl>
        </div>
        <div class="right">
          <!-- <div class="adress">
            <p>〒000-0000<br>福岡県XX市X丁目XXX-XXX</p>
          </div> -->
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6685282088165!2d139.79266191556226!3d35.66053753871347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889a07930e2f9%3A0x62e41ee20b961991!2z6Iqd5rWm5bel5qWt5aSn5a2mIOixiua0suOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1664193238541!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>



      <!-- <div class="home_contact_flex"> -->
      <!-- <div class="left">
          <div class="home_contact_box_table">
            <dl>
              <div class="home_contact_table_items">
                <dt>会社名</dt>
                <dd>株式会社ゼロイチ</dd>
              </div>
              <div class="home_contact_table_items">
                <dt>電話番号</dt>
                <dd><a href="tel:000-1234-5678">000-1234-5678</a></dd>
              </div>
              <div class="home_contact_table_items">
                <dt>メールアドレス</dt>
                <dd>XXXX@XXXX.XXX</dd>
              </div>
            </dl>
          </div>
          <div class="home_contact_box_map">
            <p class="adress">〒000-0000<br>福岡県XX市X丁目XXX-XXX</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6685282088165!2d139.79266191556226!3d35.66053753871347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889a07930e2f9%3A0x62e41ee20b961991!2z6Iqd5rWm5bel5qWt5aSn5a2mIOixiua0suOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1664193238541!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div> -->
      <!-- <div class="right">
          <h4 class="home_contact_message">
            お問合せフォームは<br>こちらから！
          </h4>
          <a class="readmore" href="">
            <i class="fa-regular fa-square fa-5x"></i>
            <p class="readmore_p">Read More</p>
          </a>
        </div> -->
      <!-- </div> -->
    </div>
  </section>
</main>
<?php
get_footer();
?>