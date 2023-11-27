<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/course.css">
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
  <img class="main__img pc" src="<?php echo get_template_directory_uri(); ?>/images/Courseprice.png" alt="">
  <img class="main__img sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-Courseprice.png" alt="">
<div class="main__text"> 
  <img class="main__top" src="<?php echo get_template_directory_uri(); ?>/images/top4.png" alt="">
  <p class="main__title1">Price</p>
  <p class="main__title2">コース・料金</p>
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
    <p><a href="/" class="home__a opacity">ホーム</a> > コース・料金</a></p>
  </div>

<!-- コース・料金 -->
<section class="course">
  <p class="bold">
    <img src="<?php echo get_template_directory_uri(); ?>/images/leftline.png" alt="" class="course__img1">
    コース・料金
    <img src="<?php echo get_template_directory_uri(); ?>/images/rightline.png" alt="" class="course__img1">
  </p>
  <p class="bold">当院では保険診療、自費診療<br>ともにご対応しております</p>
<div class="course__box">
<div class="course__box1">
  <img  class="course__img2" src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance1.png" alt="">
  <dl>
    <dt class="dark-green">保険診療</dt>
    <dd>・骨折・打撲・捻挫・脱臼</dd>
    <dd>・スポーツ診療</dd>
    <dd>・交通事故</dd>
  </dl>
</div>
<div class="course__box1">
  <img  class="course__img3" src="<?php echo get_template_directory_uri(); ?>/images/TOP-self1.png" alt="">
  <dl>
    <dt class="dark-green">自費診療</dt>
    <dd>・腰痛・肩こり</dd>
    <dd>・冷え性・だるさ</dd>
    <dd>・骨盤・背骨矯正</dd>
  </dl>
</div>
</div>
</section>

<!-- Insurance 保険診療 -->
<section class="Concept">
  <div class="Concept__box">
  <div class="Insurance__p">
    <p class="bold"><img src="<?php echo get_template_directory_uri(); ?>/images/Concept-Iogo.png" alt=""> Insurance</p>
    <p class="green">保険診療</p><br>
    <p class="pc">健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
      「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</p><br>
    <dl class="Insurance">
      <dd>・骨折・打撲・捻挫・脱臼</dd>
      <dd>・スポーツ診療</dd>
      <dd>・交通事故</dd>
      </dl>
  </div>
    <img class="Concept__img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance2.png" alt="">
  </div>
</section>

<!-- Self-pay 自費診療 -->
<section class="Concept Concept1">
  <div class="Concept__box">
  <div class="Self-pay__p">
    <p class="bold"><img src="<?php echo get_template_directory_uri(); ?>/images/Concept-Iogo.png" alt=""> Self-pay</p>
    <p class="green">自費診療</p><br>
    <p class="pc">慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。</p><br>
      <dl class="Self-pay">
        <dd>・腰痛・肩こり</dd>
        <dd>・冷え性・だるさ</dd>
        <dd>・骨盤・背骨矯正</dd>
      </dl>
      <br>
      <p class="pc">初回　8,800円（税込） / 50分<br>
        2回目以降　6,600円（税込） / 30分</p>
      <p class="sp">初回<br>8,800円（税込） / 50分<br><br>
        2回目以降<br>6,600円（税込） / 30分</p>
  </div>
    <img class="Concept__img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-self2.png" alt="">
  </div>
</section>

</main>
</article>
<?php get_footer(); ?>