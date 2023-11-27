<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
</head>
<body>

<!-- ヘッダー -->
<header>
  <!-- ロゴ -->
  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="" class="logo"></a>
    
  <!-- PC用ナビゲーション -->
    <nav id="nav-pc" class="pc">
      <a href="/" class="nav-a">ホーム</a>
      <a href="<?php echo esc_url(home_url()); ?>/about" class="nav-a">当院について</a>
      <a href="<?php echo esc_url(home_url()); ?>/course" class="nav-a">コース・料金</a>
      <a href="<?php echo esc_url(home_url()); ?>/news" class="nav-a">お知らせ</a>
      <a href="<?php echo esc_url(home_url()); ?>/voice" class="nav-a">お客様の声</a>
      <a href="<?php echo esc_url(home_url()); ?>/contact" class="nav-a">ご予約・お問い合わせ</a>
    </nav>
    <!-- ハンバーガー navi -->
    <nav id="navi" class="pc1 sp">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="" class="logo"></a>
      <ul class="menu">
        <li class="bold2">メニュー</li>
        <li><a href="/">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/about">当院について</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/course">コース・料金</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/news">お知らせ</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/voice">お客様の声</a></li>
        <br>
        <li class="menu_green"><a href="<?php echo esc_url(home_url()); ?>/contact">ご予約・お問い合わせ</a></li>
      </ul>
    </nav>
  
    <div class="hamburger pc1 sp">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <?php wp_head(); ?>
  </header>

<!-- メイン -->
<div class="main">
  <img class="main__img pc" src="<?php echo get_template_directory_uri(); ?>/images/Reserve.png" alt="">
  <img class="main__img sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-Reserve.png" alt="">
<div class="main__text"> 
  <img class="main__top" src="<?php echo get_template_directory_uri(); ?>/images/top4.png" alt="">
  <p class="main__title1">Contact</p>
  <p class="main__title2">ご予約・お問い合わせ</p>
</div>
  <img class="main__top1 pc" src="<?php echo get_template_directory_uri(); ?>/images/top5.png" alt="">
  <img class="main__top1 sp" src="<?php echo get_template_directory_uri(); ?>/images/SPtop2.png" alt="">
</div>

  <div class="hamburger pc1 sp">
    <span></span>
    <span></span>
    <span></span>
  </div>

<main>
<article>

  <!-- ホーム -->
  <div class="home">
    <p><a href="/" class="home__a opacity">ホーム</a> > ご予約・お問い合わせ</a></p>
  </div>

<!-- お問い合わせフォーム -->
<section class="Information">
  <p class="Information__title">お電話でのご予約・お問い合わせ</p>
  <br>
  <p>〒101-0022 東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
  <br>
  <p class="Information__title"><span class="black">tel:</span> 03-1234-5678</p>
  <br>
  <p class="Information__title">ご予約・お問い合わせフォーム</p>
  <br>
  <p class="Information__font">※ 2営業日以内にご返信いたします。</p>
  <br>

<!-- お問い合わせフォーム -->
<form class="contact" action="<?php echo esc_url(home_url()); ?>/contact-thanks" method="post">
<!--   コンテンツ内容を表示 -->
<?php the_content(); ?>
</form>

</section>
</main>
</article>
<?php get_footer(); ?>