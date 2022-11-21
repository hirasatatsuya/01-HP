<!-- 下層1ページ目 実績紹介 -->
<!-- 内藤 -->
<?php get_header() ?>

<main id="works">
  <div class="bg">
    <div class="triangle1"></div>
  </div>
  <section id="page_mv">
    <h2 class="title">Works</h2>
    <h2 class="title_ja">実績紹介</h2>
  </section>
  <section id="works_main">
    <div class="works_wrapper">
      <div class="works_index">
        <ul>
          <li <?php if (is_page("works")) echo "class='index_active'"; else echo "class='index_unactive'";?>><a href="<?php echo esc_url(home_url('/works/')) ?>">MOVIE</a></li>
          <li <?php if (is_page("system")) echo "class='index_active'";else echo "class='index_unactive'";?>><a href="<?php echo esc_url(home_url('/works/system')) ?>">SYSTEM</a></li>
        </ul>
      </div>
      <div class="works_content">

        <div class="flex">
          <?php
          if (is_page('works')) :
            $args = array(
              'category_name' => 'movie'
            );
          elseif (is_page('system')) :
            $args = array(
              'category_name' => 'system'
            );
          endif;
          ?>
          <?php $posts = get_posts($args); ?>
          <?php foreach ($posts as $post) : ?>
            <div class="flex_item">
              <div class="works_content_img">
                <img src="<?php
                          if (has_post_thumbnail()) :
                            echo get_the_post_thumbnail_url();
                          else :
                            echo esc_url(get_theme_file_uri("/img/coming-soon.jpg"));
                          endif;
                          ?>" alt="">
              </div>
              <div class="works_content_text">
                <p><?php the_title(); ?></p>
              </div>
            </div>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>



          <!-- <div class="flex_item">
            <div class="works_content_img">
              <img src="" alt="">
            </div>
            <div class="works_content_text">
              <p>テキストテキストテキストテキストテキスト</p>
            </div>
          </div> -->






        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer() ?>