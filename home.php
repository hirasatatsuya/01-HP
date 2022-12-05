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
        <!-- <div class="home_philo_bg_box  home_1_fadeTrigger"></div> -->
        <div class="home_philo_bg_bar home_philo_bg_bar1 home_appear_Trigger"></div>
        <div class="home_philo_bg_bar home_philo_bg_bar2 home_appear_Trigger"></div>
      </div>
      <h3 class="u_title_large FadeSlideLeftTrigger">「伝える」を "より" 自由に。</h3>
      <div class="home_philo_flex">
        <div class="left">
          <p class="u_paragraph FadeSlideLeftTrigger">
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
          <h4 class="right_title u_title">Identity</h4>
          <h5 class="right_sub u_paragraph">経営理念</h5>
          <div class="right_content">
            <div class="right_content_img_wrap">
              <img class="right_content_img" src="<?php echo esc_url(get_theme_file_uri("/img/funny.png")) ?>" alt="">
            </div>
            <p class="right_content_title u_subtitle">面白いを超えて「可笑しい」人へ</p>
            <p class="right_content_text u_paragraph">誰もが想像しないような「可笑しい」を提供<br>全力で可笑しいことに挑戦し続けます。</p>
          </div>
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
      <!-- <h3 class="home_busi_bg_title">business</h3> -->
      <div class="home_busi_content">
        <h4 class="home_busi_title u_title_large"><span class="smoothText"><span class="smoothTextTrigger">Business</span></span></h4>
        <div class="ITsolution home_busi_content_item">
          <h5 class="home_busi_content_item_title u_title">ITソリューション事業</h5>
          <div class="home_busi_content_item_img_wrap">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("/img/ITsolution.png")) ?>" alt="">
          </div>
          <h6 class="home_busi_content_item_subtitle u_subtitle">皆様が抱える課題をITを用いてコスト削減</h6>
          <p class="home_busi_content_item_text u_paragraph">説明動画や工程動画などの作成、Lステップ運用を用いてコスト削減</p>
        </div>
        <div class="Branding home_busi_content_item">
          <h5 class="home_busi_content_item_title u_title">ブランディング事業</h5>
          <div class="home_busi_content_item_img_wrap">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("/img/branding.png")) ?>" alt="">
          </div>
          <h6 class="home_busi_content_item_subtitle u_subtitle">個性と若さだからできる「ブランディング」</h6>
          <p class="home_busi_content_item_text u_paragraph">ホームページやLPなどのWEB制作で御社への導線を促進<br>プロモーション映像で御社の魅力を世の中へ発信</p>
        </div>
        <div class="LocalMedia home_busi_content_item">
          <h5 class="home_busi_content_item_title u_title">地域メディア事業</h5>
          <div class="home_busi_content_item_img_wrap">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("/img/local-media.png")) ?>" alt="">
          </div>
          <h6 class="home_busi_content_item_subtitle u_subtitle">若さならではの視点から地方の魅力を発信</h6>
          <p class="home_busi_content_item_text u_paragraph">世の中に広まっていない〇〇を紹介するメディアを運営<br>秘境、人の温かさなど、ディープな情報を発信</p>
        </div>
        <div class="Community home_busi_content_item">
          <h5 class="home_busi_content_item_title u_title">コミュニティ運営 イベント事業</h5>
          <div class="home_busi_content_item_img_wrap home_busi_content_item_img_01">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("img/event11.jpg")) ?>" alt="">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("img/event_logo.jpg")) ?>" alt="">
            <img class="home_busi_content_item_img" src="<?php echo esc_url(get_theme_file_uri("img/event10.jpg")) ?>" alt="">
          </div>
          <h6 class="home_busi_content_item_subtitle u_subtitle">日本最大の同世代コミュニティ「01会」</h6>
          <p class="home_busi_content_item_text u_paragraph">企業や行政、団体とコラボしており若者のマーケティング戦略に特化しています。</p>
        </div>
        <a href="" class="readmore  home_4_fadeTrigger">
          <i class="fa-regular fa-square fa-5x"></i>
          <p class="readmore_p">Read More</p>
        </a>
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
        $movie_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon-3.jpg"));
      else :
        $movie_thumbnail[$count] = get_the_post_thumbnail_url();
      endif;
    else :
      $movie_content[$count] = "coming soon...";
      $movie_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon-3.jpg"));
    endif;
    $count++;
  endforeach; ?>
  <?php wp_reset_postdata(); ?>


  <section id="home_works" class="sticky">
    <div class="section_bg_works"></div>
    <div class="home_wrapper">
      <h3 class="home_works_title u_title_large"><span class="smoothText"><span class="smoothTextTrigger">Works</span></span></h3>
      <div class="home_works_flex ">
        <div class="left slideLeftTrigger">
          <h4 class="left_title u_title">Movie</h4>
          <div class="slider">
            <div class="slides">
              <div id="left_slide_1" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[0] ?>" alt="">
                </a>
                <div class="slide_text u_paragraph">
                  <?php echo $movie_content[0]; ?>
                </div>
              </div>
              <div id="left_slide_2" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[1] ?>" alt="">
                </a>
                <div class="slide_text u_paragraph">
                  <?php echo $movie_content[1]; ?>
                </div>
              </div>
              <div id="left_slide_3" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[2] ?>" alt="">
                </a>
                <div class="slide_text u_paragraph">
                  <?php echo $movie_content[2]; ?>
                </div>
              </div>
              <div id="left_slide_4" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[3] ?>" alt="">
                </a>
                <div class="slide_text u_paragraph">
                  <?php echo $movie_content[3]; ?>
                </div>
              </div>
              <div id="left_slide_5" class="slider_slide">
                <a href="" class="slide_img">
                  <img src="<?php echo $movie_thumbnail[4] ?>" alt="">
                </a>
                <div class="slide_text u_paragraph">
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
              $system_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon-3.jpg"));
            else :
              $system_thumbnail[$count] = get_the_post_thumbnail();
            endif;
          else :
            $system_content[$count] = "coming soon...";
            $system_thumbnail[$count] = esc_url(get_theme_file_uri("/img/coming-soon-3.jpg"));
          endif;
          $count++;
        endforeach;
        ?>
        <?php wp_reset_postdata(); ?>

        <div class="right slideRightTrigger">
          <h4 class="right_title u_title">System</h4>
          <div class="slider ">
            <div class="slides">
              <div id="right_slide_1" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[0] ?>" alt="">
                </div>
                <div class="slide_text u_paragraph">
                  <?php echo $system_content[0]; ?>
                </div>
              </div>
              <div id="right_slide_2" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[1] ?>" alt="">
                </div>
                <div class="slide_text u_paragraph">
                  <?php echo $system_content[1]; ?>
                </div>
              </div>
              <div id="right_slide_3" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[2] ?>" alt="">
                </div>
                <div class="slide_text u_paragraph">
                  <?php echo $system_content[2]; ?>
                </div>
              </div>
              <div id="right_slide_4" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[3] ?>" alt="">
                </div>
                <div class="slide_text u_paragraph">
                  <?php echo $system_content[3]; ?>
                </div>
              </div>
              <div id="right_slide_5" class="slider_slide">
                <div class="slide_img">
                  <img src="<?php echo $system_thumbnail[4] ?>" alt="">
                </div>
                <div class="slide_text u_paragraph">
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
        <p class="home_about_text FadeSlideLeftTrigger u_paragraph">若さを活かし革新的なアイディアでこの世界を底上げする会社です。<br>

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
    <div class="section_bg_01_logo">
      <img class="section_bg_01_logo_img" src="<?php echo esc_url(get_theme_file_uri("/img/event_logo.jpg"))?>" alt="">
    </div>
    <div class="home_wrapper">
      <h3 class="home_01_title u_title_large"><span class="smoothText"><span class="smoothTextTrigger">Team01</span></span></h3>

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
          <p class="home_01_text FadeSlideLeftTrigger u_paragraph">2021年10月より立ち上がった「01会」。<br>2001年生まれ世代限定のコミュニティです。これがなければ株式会社ゼロイチはありませんでした。最高の仲間と出会える場所、それが「01会」です。これからは株式会社ゼロイチの一つの事業として「01会」を全国に展開し、より発展させていきます。ここに集まってくれた仲間のために最高に『可笑しい』コミュニティを運営します。</p>
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
      <h3 class="home_contact_title u_title_large"><span class="smoothText"><span class="smoothTextTrigger">Contact</span></span></h3>
      <div class="home_contact_box">
        <div class="left">
          <dl class="u_paragraph">
            <div class="home_contact_table_items">
              <dt>会社名</dt>
              <dd>株式会社01</dd>
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
              <dd>〒810-0041<br>福岡県福岡市大名<br class="pc">2-6-11</dd>
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
    </div>
  </section>
</main>
<?php
get_footer();
?>