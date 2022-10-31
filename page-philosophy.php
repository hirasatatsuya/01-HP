<!-- 下層1ページ目 経営理念 -->
<!-- 内藤 -->
<?php
get_header();
?>
<main id="philosophy">
  <div class="bg">
    <div class="triangle1"></div>
    <div class="bar1"></div>
    <div class="bar2 fadeTrigger"></div>
    <div class="triangle2 fadeTrigger"></div>
    <div class="triangle3 fadeTrigger"></div>
  </div>
  <section id="page_mv">
    <h2 class="title">IDENTITY</h2>
    <h2 class="title_ja">経営理念</h2>
  </section>
  <section id="vmv">
    <div class="wrapper">

      <div class="vision flex">
        <div class="left slideLeftTrigger">
          <div class="bg_text">Vision</div>
          <div class="vmv_content">

            <div class="vmv_title">
              <h3>VISION</h3>
            </div>
            <div class="vmv_subtitle">
              <p>誰もが予想しないような<br>「可笑しい」を提供する仕事を創る</p>
            </div>
            <div class="vmv_text">
              <p>今までスポットが当たらなかったところにスポットを当てます。
                目を逸らさず全力で立ち向かいます。
                常に面白いことに挑戦し続けます。</p>
            </div>
          </div>
        </div>
        <div class="right slideRightTrigger">
          <div class="img_wrapper">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/vision.jpg')) ?>" alt="">
          </div>
        </div>
      </div>
      <div class="mission flex">
        <div class="left slideRightTrigger">
          <div class="bg_text">Mission</div>
          <div class="vmv_content">

            <div class="vmv_title">
              <h3>MISSION</h3>
            </div>
            <div class="vmv_subtitle">
              <p>伝えるを"より"自由に</p>
            </div>
            <div class="vmv_text">
              <p>私たちはITという手段を通じて、対話という手段の幅を広げていきます。映像制作やWEB制作をコミュニケーションの架け橋としていきます。</p>
            </div>
          </div>
        </div>
        <div class="right slideLeftTrigger">
          <div class="img_wrapper">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/mission.jpg')) ?>" alt="">
          </div>
        </div>
      </div>
      <div class="value flex">
        <div class="left slideLeftTrigger">
          <div class="bg_text">Value</div>
          <div class="vmv_content">
            <div class="vmv_title">
              <h3>VALUE</h3>
            </div>
            <div class="vmv_subtitle">
              <p>行動基準</p>
            </div>
            <div class="vmv_text">
              <p>①自分の思いに素直になる
②全力の中に楽しさを創る<br>
③子供心を忘れない
④優れず、異なる行動をする<br>
⑤続けることを続ける
⑥常に感謝の気持ちを忘れない</p>
            </div>
          </div>
        </div>
        <div class="right slideRightTrigger">
          <div class="img_wrapper">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/value.jpg')) ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="concept" class="concept_origin">
    <div class="concept_origin_wrapper slideUpTrigger">
      <h3 class="concept_origin_title">01会の思い</h3>
      <p class="concept_origin_subtitle">これが俺たちの思いだ</p>
      <p class="concept_origin_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
  </section> -->
  <!-- <section id="origin" class="concept_origin">
    <div class="concept_origin_wrapper slideUpTrigger">
      <h3 class="concept_origin_title">ゼロイチの由来</h3>
      <p class="concept_origin_subtitle">これが俺たちの由来だ</p>
      <p class="concept_origin_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
  </section> -->
</main>
<?php
get_footer();
?>