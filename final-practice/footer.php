<!-- アクセス -->
<!-- フッター -->
<footer>
<section class="access">
  <h2 class="bold">
    <img src="<?php echo get_template_directory_uri(); ?>/images/leftline.png" alt="" class="access__img1">
    お気軽にご来院ください
    <img src="<?php echo get_template_directory_uri(); ?>/images/rightline.png" alt="" class="access__img1">
  </h2>
  <div class="access__box">
  <div class="access__box1">
    <p class="bold bold4">JR 「秋葉原駅」より徒歩１分</p>
    <br>
    <p class="access__p1">〒101-0022<br>
      東京都千代田区神田練塀町300番地<br>
      住友不動産秋葉原駅前ビル 5F</p>
    <br>
    <p class="bold bold4">tel:03-1234-5678</p>
    <table>
      <tr class="white">
        <th class="th1">営業時間</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
        <th class="th2">日</th>
      </tr>
      <tr class="green tr">
        <td>9:00~12:30</td>
        <td>●</td>
        <td>●</td>
        <td>−</td>
        <td>●</td>
        <td>●</td>
        <td>●</td>
        <td>●</td>
      </tr>
      <tr class="green tr1">
        <td class="td1">15:30~20:00</td>
        <td>●</td>
        <td>●</td>
        <td>−</td>
        <td>●</td>
        <td>●</td>
        <td>●</td>
        <td class="td2">●</td>
      </tr>
    </table>
    <div>
    <a href="<?php echo esc_url(home_url()); ?>/contact" class="access__a opacity">ご予約・お問い合わせはこちらから</a>
    </div>
  </div>
  <div class="map">
    <img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" alt="" class="access__img2">
  </div>
  </div>
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_01.png" alt="" class="access__img3 up"></a>

<div class="footer">
  <!-- ロゴ -->
<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="" class="logo1"></a>
  
<!-- PC用ナビゲーション -->
  <nav class="footer__nav">
    <a href="/" class="footer__a">TOP</a>
    <a href="<?php echo esc_url(home_url()); ?>/about" class="footer__a">当院について</a>
    <a href="<?php echo esc_url(home_url()); ?>/course" class="footer__a">コース・料金</a>
    <a href="<?php echo esc_url(home_url()); ?>/news" class="footer__a">お知らせ</a>
    <a href="<?php echo esc_url(home_url()); ?>/voice" class="footer__a">お客様の声</a>
    <a href="<?php echo esc_url(home_url()); ?>/contact" class="footer__a">ご予約・お問い合わせ</a>
  </nav>
</div>
<p class="footer__p">&copy;2023 SAMURAI整体院</p>
</footer>
</section>

<?php wp_footer(); ?>
</body>
</html>