<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
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
  <img class="main__img pc" src="<?php echo get_template_directory_uri(); ?>/images/About.png" alt="">
  <img class="main__top1 pc" src="<?php echo get_template_directory_uri(); ?>/images/top5.png" alt="">
  <img class="main__img sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-About.png" alt="">
  <img class="main__top1 sp" src="<?php echo get_template_directory_uri(); ?>/images/SPtop2.png" alt="">
<div class="main__text"> 
  <img class="main__top" src="<?php echo get_template_directory_uri(); ?>/images/top4.png" alt="">
  <p class="main__title1">About</p>
  <p class="main__title2">当院について</p>
</div>
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
    <p><a href="/" class="home__a opacity">ホーム</a> > 当院について</p>
  </div>

<!-- 特長 Concept -->
<section class="Concept">
  <div class="Concept__box">
  <div class="Concept__p">
    <p class="bold"><img src="images/Concept-Iogo.png" alt=""> Concept</p>
    <p class="green bold">特長</p>
    <br>
    <h3>日々変化する<br class="pc">カラダと心を癒す<br class="pc">
    パーソナル<br class="pc">トレーナーとして</h3>
    <br>
    <p class="text-box">当院では、問診にてお客様の症状や生活スタ<br class="pc">
      イル、ご希望を丁寧にお伺いした上で施術方<br class="pc">
      針を立てていきます。<br>
      <br>
      また、根本的に症状を改善するために、お客<br class="pc">
      様ご自身で行えるケアやストレッチもお伝え<br class="pc">
      します。<br>
      <br>
      ご不安な点や疑問点などお気軽にご相談くだ<br class="pc">
      さいませ。</p>
  </div>
    <img class="Concept__img" src="<?php echo get_template_directory_uri(); ?>/images/Concept-Imagegroup.png" alt="">
  <div class="Concept__background">
    <p>Concept</p>
    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/Union (1).png" alt="">
    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/BGicon.png" alt="">
  </div>
  </div>
</section>

<!-- 施術の流れ flow -->
<section class="Concept">
  <div class="Concept__box">
  <div class="flow__p">
    <p class="bold"><img src="<?php echo get_template_directory_uri(); ?>/images/Concept-Iogo.png" alt=""> Flow</p>
    <p class="green">施術の流れ</p>
    <ol class="flow">
      <li>受付</li>
      <li>問診票のご記入</li>
      <li>カウンセリング</li>
      <li>施術</li>
      <li>アフターカウンセリング</li>
    </ol>
  </div>
    <img class="Concept__img" src="<?php echo get_template_directory_uri(); ?>/images/Flow-Imagegroup.png" alt="">
  <div class="Concept__background">
    <p class="flow__title">Flow</p>
    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/Union (1).png" alt="">
    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/BGicon.png" alt="">
  </div>
  </div>
</section>

<!-- 根本改善 -->
<section class="course">
  <p class="bold bold3">
    <img src="<?php echo get_template_directory_uri(); ?>/images/leftline.png" alt="" class="course__img1">
    根本改善のポイント
    <img src="<?php echo get_template_directory_uri(); ?>/images/rightline.png" alt="" class="course__img1">
  </p>
  <p class="bold bold3">お体の状態や生活習慣、ご要望を丁寧にお伺いします。</p>
  <p class="bold bold3">ご自身でできるケアなども含めて施術方針をお作りします。</p>
<div class="course__box">
<div class="course__box1">
  <img  class="course__img2" src="<?php echo get_template_directory_uri(); ?>/images/Point1.png" alt="">
  <p>丁寧なカウンセリング</p>
</div>
<div class="course__box1">
  <img  class="course__img2" src="<?php echo get_template_directory_uri(); ?>/images/Point2.png" alt="">
  <p>徹底的分析</p>
</div>
<div class="course__box1">
  <img  class="course__img2" src="<?php echo get_template_directory_uri(); ?>/images/Point3.png" alt="">
  <p>施術計画のご提案</p>
</div>
</div>
</section>

</main>
</article>
<?php get_footer(); ?>