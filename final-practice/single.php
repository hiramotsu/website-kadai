<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-name.css">
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
  <img class="main__img pc" src="<?php echo get_template_directory_uri(); ?>/images/News.png" alt="">
  <img class="main__img sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-News.png" alt="">
<div class="main__text"> 
  <img class="main__top" src="<?php echo get_template_directory_uri(); ?>/images/top4.png" alt="">
  <p class="main__title1">Information</p>
  <p class="main__title2">お知らせ</p>
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
    <p><a href="/" class="home__a opacity">ホーム</a> > お知らせ詳細</p>
  </div>

  <!-- 記事一覧 -->
<section class="Information">
<div>

<!-- 投稿のタイトルを表示 -->
<span class="the_title"><?php the_title(); echo "<br/>"; ?></span>

<!-- // 投稿の日付を表示 -->
<span class="date"><br/><?php echo get_the_date(); ?></span>

<!-- //  単体で投稿のカテゴリーを表示 -->
<?php $category = get_the_category();
      //  [0]が無いと出力されない
      $cat = $category[0];
      //  カテゴリー名を表示
      $cat_name = $cat->cat_name; ?>
<span class="background"><?php echo $cat_name; echo "<br/>"; ?></span>

      <!-- アイキャッチ画像取得 -->
<img src="<?php echo the_post_thumbnail_url( 'large' );?>" alt="">

      <!--   コンテンツ内容を表示 -->
<span class="content"><?php the_content(); ?></span>

    <br>
    <br>
    <h4 class="Information__normal">
      <a href=""> ＜　前の記事へ　</a>
      <a href="<?php echo esc_url(home_url()); ?>/news"><span class="pc">お知らせ</span>一覧</a>
      <a href=""> 　次の記事へ　＞</a>
    </h4>
</div>

<!-- サイドバー -->
<div id="Information__sidebar">	 
<?php get_sidebar(); ?>
 </div>
</section>

</main>
</article>
<?php get_footer(); ?>