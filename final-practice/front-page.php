<?php get_header();?> 

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
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

<!-- pc用メイン-->
<!-- スライダー -->
<div class="slider4-wrap">
  <ul class="slider-4" id="js-slider-4">
    <li><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup1.png" alt=""><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup1.png" alt=""></li>
    <li><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/TOP_CarouselGroup2.png" alt=""><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup2.png" alt=""></li>
    <li><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/TOP_CarouselGroup3.png" alt=""><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup3.png" alt=""></li>
    <li><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup4.png" alt=""><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup4.png" alt=""></li>
  </ul>
  <img class="top1 pc" src="<?php echo get_template_directory_uri(); ?>/images/top1.png" alt="">
  <img class="top1 sp" src="<?php echo get_template_directory_uri(); ?>/images/SPtop1.png" alt="">

<div class="main"> 
  <p class="title-1">根本的な症状改善を</p>
  <p class="title-2">サポートします</p>
</div>
</div>


<main>
<article>
  <!-- PC用お知らせ -->
<section>
  <div class="news pc">
  <p><span class="bold">News </span><span class="green">お知らせ　</span>
  
    <!-- news投稿取得 -->
    <?php

               //取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 1,
               );
               // データの取得
               $posts = get_posts($args);
               // ループ処理
               foreach($posts as $post):
                 // 投稿データをセット
                 setup_postdata($post);
                 ?>
                 <a href="<?php the_permalink(); ?>">

                 <!-- // 投稿の日付を表示 -->
                 <span class="date"><?php echo get_the_date(); ?></span>
                 
                   <!-- //  単体で投稿のカテゴリーを表示 -->
                 <?php $category = get_the_category();
                //  [0]が無いと出力されない
                 $cat = $category[0];
                //  カテゴリー名を表示
                 $cat_name = $cat->cat_name; ?>
                 <span class="background"><?php echo $cat_name; ?></span>

                 <!-- 投稿のタイトルを表示 -->
                 <span class="the_title"><?php the_title(); ?></span>
                 </a>
                <?php 
                endforeach;
               // 使用した投稿データをリセット
               wp_reset_postdata();
             ?>
             </p>
  
  <div class="link1">
    <a href="<?php echo esc_url(home_url()); ?>/news" class="opacity">→ お知らせ一覧へ</a>
  </div>
  </div>
<!-- sp用お知らせ -->
  <div class="news sp">
    <a href="<?php echo esc_url(home_url()); ?>/news"><span class="bold">News </span><span class="green">お知らせ　</span>
    <br><br><span class="sp-text">2023/1/1　　年末年始の営業時間について</span>
    <br><br><span class="background">営業日時　</span>
    </a><br>
  <div class="link">
    <a href="<?php echo esc_url(home_url()); ?>/news" class="opacity">→ お知らせ一覧へ</a>
  </div>
  </div>
</section>

<!-- 特長 Concept -->
<section class="Concept">
  <div class="Concept__box">
  <div class="Concept__p">
    <p class="bold"><img src="<?php echo get_template_directory_uri(); ?>/images/Concept-Iogo.png" alt=""> Concept</p>
    <p class="green">特長</p>
    <br>
    <h3>日々変化する<br class="pc">カラダと心を癒す<br>
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
      <br>
      <a href="<?php echo esc_url(home_url()); ?>/about" class="Concept__a opacity">→ 当院について</a>
  </div>
    <img class="Concept__img" src="<?php echo get_template_directory_uri(); ?>/images/Concept-Imagegroup.png" alt="">
  <div class="Concept__background">
    <p>Concept</p>
    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/Union (1).png" alt="">
    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/BGicon.png" alt="">
  </div>
  </div>
</section>

<!-- コース・料金 -->
<section>
  <div class="course">
  <p class="bold1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/leftline.png" alt="" class="course__img1">
    コース・料金
    <img src="<?php echo get_template_directory_uri(); ?>/images/rightline.png" alt="" class="course__img1">
  </p>
  <p class="bold bold3">当院では保険診療、自費診療<br>ともにご対応しております</p>
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
<div class="course__bottom">
  <a href="<?php echo esc_url(home_url()); ?>/course" class="course__a opacity">→ コース・料金詳細へ</a>
</div>
<div class="course__background">
  <p>course</p>
  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/Union.png" alt="">
  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/BGicon2.png" alt="">
</div>
</div>
</section>

<!-- お客様の声 -->
<section id="voice">
  <div class="voice">
  <div class="voice__ellipse">
    <p class="bold voice__p">
      <img src="<?php echo get_template_directory_uri(); ?>/images/leftline.png" alt="" class="voice__img1">
      お客様の声
      <img src="<?php echo get_template_directory_uri(); ?>/images/rightline.png" alt="" class="voice__img1">
    </p>
    <p class="bold">痛みの改善に加えて自分で予防<br>もできるようになりました</p>
  </div>

  <ul class="slick01">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup1.png" alt="" class="voice__img2 pc"><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup1.png" alt="" class="voice__img2 sp"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup2.png" alt="" class="voice__img2 pc"><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup2.png" alt="" class="voice__img2 sp"></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup3.png" alt="" class="voice__img2 pc"><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup3.png" alt="" class="voice__img2 sp"></li>
  </ul>
  </div>

  <div class="voice__box">
    <dl>
      <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user1.png" alt="">
      <dt>S・K様　30代女性</dt>
      <dd>1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</dd>
    </dl>
    <dl>
      <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user2.png" alt="">
      <dt>T・M様　40代男性</dt>
      <dd>マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</dd>
    </dl>
    <dl>
      <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-user3.png" alt="">
      <dt>S・T様　60代女性</dt>
      <dd>転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</dd>
    </dl>
  </div>
  <a href="<?php echo esc_url(home_url()); ?>/voice" class="voice__a opacity">→ お客様の声一覧へ</a>
</section>

</main>
</article>
<?php get_footer(); ?>
