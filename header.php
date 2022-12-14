<!DOCTYPE html>
<html lang="<?php get_language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.svg')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://kit.fontawesome.com/80cc0efede.js" crossorigin="anonymous"></script>
  <?php wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header" <?php if (is_home()) echo "class='home_header_hidden'"; ?>>
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
              <p class="header_en">company</p>
              <p class="header_ja">会社情報</p>
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
  </header>
  <div class="left_header <?php if (is_home()) echo "home_left_header" ?>">
    <ul class="left_header_wrapper">
      <li class="logo">
        <a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/zeroichi_logo2_white.svg'))?>" alt=""></a>
      </li>
      <li class="humburger">
        <span></span>
        <span></span>
        <span></span>
      </li>
      <ul class="header_sns">
        <!-- <li><a href="https://twitter.com/" class="flowbtn17 fl_tw2"><i class="fab fa-twitter fa-2x"></i></a></li> -->
        <li><a href="<?php echo esc_url("https://instagram.com/zeroichi.inc")?>" class="flowbtn17 insta_btn2"><i class="fab fa-instagram fa-2x"></i></a></li>
        <!-- <li><a href="https://www.youtube.com/user/" class="flowbtn17 fl_yu2"><i class="fab fa-youtube fa-2x"></i></a></li> -->
        <li><a href="<?php echo esc_url("https://lin.ee/LOE1lWU")?>" class="flowbtn17 fl_li2"><i class="fab fa-line fa-2x"></i></a></li>
      </ul>
    </ul>
  </div>
  <section id="global_nav">
    <div class="g_nav_wrapper">
      <a class="g_nav_home" href="<?php echo esc_url(home_url()); ?>">
        <p>HOME</p>
      </a>
      <div class="g_nav_inner">
        <div class="row">
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/philosophy')); ?>">
              <p>Identity</p>
            </a>
          </div>
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/business')); ?>">  
              <p>Business</p>
            </a>
          </div>
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/works')); ?>">
              <p>Works</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/business/movie')); ?>">
              <p>映像</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/business/system')); ?>">
              <p>システム開発</p>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/about')); ?>">
              <p>company</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/about/members')); ?>">
              <p>代表挨拶<br>役員紹介</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/about/information')); ?>">
              <p>会社概要</p>
            </a>
          </div>
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/team01/')); ?>">
              <p>Team01</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/team01/zeroichi_events')); ?>">
              <p>イベント実績</p>
            </a>
            <a class="younger" href="<?php echo esc_url(home_url('/team01/zeroichi_members')); ?>">
              <p>メンバー実績</p>
            </a>
            <a class="younger" href="<?php echo esc_url('https://lin.ee/131wVpf'); ?>">
              <p>01会のお問い合わせ</p>
            </a>
          </div>
          <div class="item">
            <a class="older" href="<?php echo esc_url(home_url('/contact')); ?>">
              <p>Contact</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if(!is_home()):?>
  <div class="transition1"></div>
  <div class="transition2"></div>
  <?php endif;?>
  <?php if(is_page()): ?>
  <div id="particles-js"></div>
  <?php endif; ?>