// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime() {

  //ふわっと動くきっかけのクラス名と動きのクラス名の設定
  $('.slideUpTrigger').each(function () { //fadeInUpTriggerというクラス名が
    var elemPos = $(this).offset().top + 200; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('slideUp');
      // 画面内に入ったらfadeInというクラス名を追記
    }
  });

  //関数でまとめることでこの後に違う動きを追加することが出来ます
  $('.slideDownTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 200; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('slideDown');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.slideLeftTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 200; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('slideLeft');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.slideRightTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 200; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('slideRight');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });


  // ここからFade


  //ふわっと動くきっかけのクラス名と動きのクラス名の設定
  $('.FadeSlideUpTrigger').each(function () { //fadeInUpTriggerというクラス名が
    var elemPos = $(this).offset().top + 100; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('FadeSlideUp');
      // 画面内に入ったらfadeInというクラス名を追記
    }
  });

  //関数でまとめることでこの後に違う動きを追加することが出来ます
  $('.FadeSlideDownTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 100; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('FadeSlideDown');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.FadeSlideLeftTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 100; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('FadeSlideLeft');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.FadeSlideRightTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 100; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('FadeSlideRight');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top + 200; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_left_header').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height() / 2;
    if (scroll >= windowHeight) {
      $(this).addClass('home_left_header_appear');
      // 画面内に入ったらfadeDownというクラス名を追記
    } else {
      $(this).removeClass('home_left_header_appear');
    }
  });
  $('.home_1_fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
      var windowHeight = $(window).height();
    } else {
      var windowHeight = $(window).height() * 1.5;
    }
    if (scroll >= windowHeight - 100) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_2_fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
      var windowHeight = $(window).height();
    } else {
      var windowHeight = $(window).height() * 1.5;
    }
    if (scroll >= windowHeight * 2 - 100) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_3_fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
      var windowHeight = $(window).height();
    } else {
      var windowHeight = $(window).height() * 1.5;
    }
    if (scroll >= windowHeight * 3 - 100) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_4_fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
      var windowHeight = $(window).height();
    } else {
      var windowHeight = $(window).height() * 1.5;
    }
    if (scroll >= windowHeight * 4 - 100) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_5_fadeTrigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
      var windowHeight = $(window).height();
    } else {
      var windowHeight = $(window).height() * 1.5;
    }
    if (scroll >= windowHeight * 5 - 100) {
      $(this).addClass('fade');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });
  $('.home_appear_Trigger').each(function () { //fadeInDownTriggerというクラス名が
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height() * 1.5;
    if (scroll >= windowHeight) {
      $(this).addClass('home_appear');
      // 画面内に入ったらfadeDownというクラス名を追記
    }
  });

}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定

// smoothTriggerにsmoothTextAppearというクラス名を付ける定義
function SmoothTextAnime() {
  $('.smoothTextTrigger').each(function () { //smoothTextTriggerというクラス名が
    var elemPos = $(this).offset().top;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('smoothTextAppear');// 画面内に入ったらsmoothTextAppearというクラス名を追記
    }
  });
}

function BgColorTransition() {
  $('.section_bg_mv').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
  $('.section_bg_philo').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var windowTop = windowHeight * 1.5;

    if (scroll >= windowTop + windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
  $('.section_bg_busi').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    var windowTop = windowHeight * 1.5 * 2;
    if (scroll >= windowTop + windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
  $('.section_bg_works').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    var windowTop = windowHeight * 1.5 * 3;

    if (scroll >= windowTop + windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
  $('.section_bg_about').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    var windowTop = windowHeight * 1.5 * 4;

    if (scroll >= windowTop + windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
  $('.section_bg_01').each(function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    var windowTop = windowHeight * 1.5 * 5;

    if (scroll >= windowTop + windowHeight) {
      $(this).addClass('BgColorTransition');
    } else {
      $(this).removeClass('BgColorTransition');
    }
  });
}




// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  SmoothTextAnime();/* アニメーション用の関数を呼ぶ*/
  //テキストのカウントアップ+バーの設定
  var bar = new ProgressBar.Line(splash_text, {//id名を指定
    easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
    duration: 3000,//時間指定(1000＝1秒)
    strokeWidth: .3,//進捗ゲージの太さ
    color: '#ff9615',//進捗ゲージのカラー
    trailWidth: .2,//ゲージベースの線の太さ
    trailColor: '#bbb',//ゲージベースの線のカラー
    text: {//テキストの形状を直接指定				
      style: {//天地中央に配置
        position: 'absolute',
        left: '50%',
        top: '50%',
        padding: '0',
        margin: '-30px 0 0 0',//バーより上に配置
        transform: 'translate(-50%,-50%)',
        'font-size': '1.5rem',
        color: '#fff',
      },
      autoStyleContainer: false //自動付与のスタイルを切る
    },
    step: function (state, bar) {
      bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
    }
  });

  //アニメーションスタート
  bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
    $("#splash_text").fadeOut(10);//フェイドアウトでローディングテキストを削除
    $(".loader_cover-up").addClass("coveranime");//カバーが上に上がるクラス追加
    $(".loader_cover-down").addClass("coveranime");//カバーが下に下がるクラス追加
    $("#splash").fadeOut();//#splashエリアをフェードアウト
    $(".mv_title_Trigger").addClass("mv_title");
    $(".home_header").addClass("home_header_fade");
    $(".scrolldown_Trigger").addClass("scrolldown");
  });
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述


// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  fadeAnime();/* アニメーション用の関数を呼ぶ*/
  SmoothTextAnime();/* アニメーション用の関数を呼ぶ*/
  if (!window.matchMedia("(max-width: 768px)").matches) {
    BgColorTransition();
  } else {
    $('.BgColorTransition').each(function () {
      $(this).removeClass('BgColorTransition');
    });
  }
});// ここまで画面をスクロールをしたら動かしたい場合の記述

$(".humburger").click(function () {
  $(this).toggleClass('active');
  $("#global_nav").toggleClass('panelactive');
});
$("#global_nav a").click(function () {//ナビゲーションのリンクがクリックされたら
  $(".humburger").removeClass('active');//ボタンの activeクラスを除去し
  $("#global_nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});


// ここから歩夢のアニメーション

//add
$('.slider').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
  speed:1000,//スライドの動きのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 1,//スライドを画面に3枚見せる
  slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
  arrows: true,//左右の矢印あり
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  dots: true,//下部ドットナビゲーションの表示
      pauseOnFocus: false,//フォーカスで一時停止を無効
      pauseOnHover: false,//マウスホバーで一時停止を無効
      pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
  });

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
  $('.slider').slick('slickPlay');
});


// $(function(){
//   $('.timeline-nav').slick({
//      slidesToShow: 12,
//      slidesToScroll: 1,
//      asNavFor: '.timeline-slider',
//      centerMode: false,
//      focusOnSelect: true,
//       mobileFirst: true,
//      arrows: false,
//      infinite:false,
//       responsive: [
//           {
//          breakpoint: 768,
//          settings: {
//            slidesToShow: 8,
//           }
//          },
//         {
//          breakpoint: 0,
//          settings: {
//            slidesToShow: 4,
//            slidesToScroll: 2,
//          }
//        }
//     ]
//  });
 
//   $('.timeline-slider').slick({
//      slidesToShow: 1,
//      slidesToScroll: 1,
//      arrows: false,
//      asNavFor: '.timeline-nav',     
//      centerMode: true,     
//      cssEase: 'ease',
//       edgeFriction: 0.5,
//       mobileFirst: true,
//       speed: 500,
//       responsive: [
//         {
//          breakpoint: 0,
//          settings: {
//              centerMode: false
//          }
//        },
//           {
//          breakpoint: 768,
//          settings: {
//              centerMode: true
//          }
//        }
//     ]
//  });

// });

$(function(){

  window.sr = ScrollReveal();

  if ($(window).width() < 768) {

  	if ($('.timeline-content').hasClass('js--fadeInLeft')) {
  		$('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
  	}

  	sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });

  } else {
  	
  	sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
	  });

	  sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });

  }
  
  sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
	  });

	  sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });


});






$(document).ready(function () {
  var zindex = 10;

  $("div.card").click(function (e) {
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true;
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show").removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards").removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this).css({ zIndex: zindex }).addClass("show");
      }

      zindex++;
    } else {
      // no cards in view
      $("div.cards").addClass("showing");
      $(this).css({ zIndex: zindex }).addClass("show");

      zindex++;
    }
  });
});

/*下からふわっと
shoji
*/

$(function(){
  $(window).scroll(function (){
      $('.effect-fade').each(function(){
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight){
              $(this).addClass('effect-scroll');
          }
      });
  });
  });

  $(function() {

    window.sr = ScrollReveal();

    if ($(window).width() < 768) {

        if ($('.timeline-content').hasClass('js--fadeInLeft')) {
            $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
        }

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    } else {

        sr.reveal('.js--fadeInLeft', {
            origin: 'left',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    }

    sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });


});


$(document).ready(function() {
    var zindex = 10;

    $("div.card").click(function(e) {
        e.preventDefault();

        var isShowing = false;

        if ($(this).hasClass("show")) {
            isShowing = true;
        }

        if ($("div.cards").hasClass("showing")) {
            // a card is already in view
            $("div.card.show").removeClass("show");

            if (isShowing) {
                // this card was showing - reset the grid
                $("div.cards").removeClass("showing");
            } else {
                // this card isn't showing - get in with it
                $(this).css({
                    zIndex: zindex
                }).addClass("show");
            }

            zindex++;
        } else {
            // no cards in view
            $("div.cards").addClass("showing");
            $(this).css({
                zIndex: zindex
            }).addClass("show");

            zindex++;
        }
    });
});

