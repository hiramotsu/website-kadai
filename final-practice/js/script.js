$(function () {

  // mainスライダー
  var $slider4 = $('#js-slider-4');
 
  $slider4.slick({
    arrows: false, // 前・次のボタンを表示しない
    dots: true, // ドットナビゲーションを表示する
    fade: true, // スライド切り替えをフェード
    autoplay: false, //自動再生させない
    slidesToShow: 1, // 表示させるスライド数
  });
 
  // Voice スライダー
  $('.slick01').slick({ 
    arrows: false, // 前・次のボタンを表示しない
    autoplay: true, 
    fade: true, // スライド切り替えをフェード
    dots: false, 
  });


  /*--- プログレスバー設定 -----------------------*/
  var
    time = 3,
    $bar = $('#js-progressBar'),
    isPause,
    tick,
    percentTime;
  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }
  function interval() {
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
        width: percentTime + "%"
      });
      if (percentTime >= 100) {
        $slider4.slick('slickNext');
        startProgressbar();
      }
    }
  }
  function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
  }
  startProgressbar();
   
  // カーソルが乗ったら止める
  $slider4.on({
    mouseenter: function () { isPause = true; },
    mouseleave: function () { isPause = false; }
  });
   
  // ドットがクリックされたら再発火(スライド切り替え前のイベント)
  $slider4.on('beforeChange', function (slick, currentSlide, nextSlide) {
    startProgressbar();
  });

/*=================================================
// セレクトタブ
===================================================*/
function changeColor(hoge){
  if( hoge.value == 0 ){
      hoge.style.color = '';
  }else{
      hoge.style.color = 'black';
  }
}

/*=================================================
  ハンバーガ―メニュー
  ===================================================*/
  // ハンバーガーメニューをクリックした時
  $('.hamburger').on('click', function() {
    // ハンバーガーメニューの共通処理を呼び出す
    hamburger();
  });
  // メニューのリンクをクリックした時
  $('#navi a').on('click', function() {
    // ハンバーガーメニューの共通処理を呼び出す
    hamburger();
  });


});

/*=================================================
ハンバーガ―メニュー（共通処理）
===================================================*/
// ハンバーガーメニューをクリックした時とメニュー内のリンクをクリックした時の
// 処理が同じなので処理を共通化する
function hamburger() {
  // toggleClassを使用することで、hamburgerクラスにactiveクラスが存在する場合は削除、
  // 存在しない場合を追加する処理を自動で行ってくれる
  $('.hamburger').toggleClass('active');

  if ($('.hamburger').hasClass('active')) {
    // hamburgerクラスにactiveクラスが存在する場合は、naviにもactiveクラスを追加する
    $('#navi').addClass('active');
    $('header').addClass('active');
    $(".menu-text").text("close");
  } else {
    // hamburgerクラスにactiveクラスが存在しない場合は、naviからactiveクラスを削除する
    $('#navi').removeClass('active');
    $('header').removeClass('active');
    $(".menu-text").text("menu");
  }
}