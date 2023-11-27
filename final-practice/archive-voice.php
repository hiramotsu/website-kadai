<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/voice.css">
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
  <img class="main__img pc" src="<?php echo get_template_directory_uri(); ?>/images/Voice1.png" alt="">
  <img class="main__img sp" src="<?php echo get_template_directory_uri(); ?>/images/SP_Voice1.png" alt="">
<div class="main__text"> 
  <img class="main__top" src="<?php echo get_template_directory_uri(); ?>/images/top4.png" alt="">
  <p class="main__title1">Voice</p>
  <p class="main__title2">お客様の声</p>
</div>
  <img class="main__top1 pc" src="<?php echo get_template_directory_uri(); ?>/images/top5.png" alt="">
  <img class="main__top1 sp" src="<?php echo get_template_directory_uri(); ?>/images/SPtop2.png" alt="">
</div>

<main>
<article>
  <!-- ホーム -->
  <div class="home">
    <p><a href="/" class="home__a opacity">ホーム</a> > お客様の声</p>
  </div>

  <!-- 記事一覧 -->
<section class="Information">

  <?php
  //取得したい投稿記事などの条件を引数として渡す
  $args = array(
  // 投稿タイプ
  'post_type'      => 'voice',
  // 1ページに表示する投稿数
  'posts_per_page' => 5,
   );
  // データの取得
  $posts = get_posts($args);
?>
 
  <!-- ループ処理 -->
  <?php foreach($posts as $post): ?>
  <?php setup_postdata($post); ?>
             
  <!-- アイキャッチ画像のURL文字列を出力する the_post_thumbnail_url-->
  <div class="Information__img"><img src="<?php echo the_post_thumbnail_url( 'large' );?>"></div>

  <!-- 投稿のタイトルを表示 -->
  <div class="Information__p">
   <p class="Information__title"><?php the_title(); ?></p><br>
   <!--   コンテンツ内容を表示 -->
   <p class="content"><?php the_content(); ?></p>
  </div>

  <?php endforeach; ?>
  <!-- 使用した投稿データをリセット -->
  <?php wp_reset_postdata(); ?>

</section>

<!-- ページネーション -->
<section>
<div class="nav-links">
  <span class="page-numbers current">1</span><!-- 現在閲覧しているページ -->
  <a class="page-numbers" href="">2</a>
  <a class="page-numbers" href="">3</a>
  <span class="page-numbers dots">…</span>
  <a class="page-numbers" href="">6</a>
</div>
</section>

</main>
</article>
<?php get_footer(); ?>