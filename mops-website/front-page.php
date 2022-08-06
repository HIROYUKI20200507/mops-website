<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body>
  <?php get_template_part('template-parts/navigation'); ?>
  <main>
    <section class="kvTop">
      <div class="kvTop__bgImage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-image.jpg" alt="">
      </div>
      <div class="kvTop__text">
        <h1>主婦層の生きがい・やりがいをサポートする。</h1>
      </div>
    </section>

    <section class="philosophy" id="philosophy">
      <ul class="philosophy__item">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tokyo.jpg" alt="">
        </li>
        <li>
          <h2>理念</h2>
          <p>
            私たちの企業名・MOPSは<br>
            「Support Power Of Mother」の頭文字から取っています。<br>
            <br>
            それは「主婦層の生きがい・やりがいを応援する」という<br>
            企業理念に基づくものです。<br>
            <br>
            MOPSでは皆さまのライフスタイルの実現や社会問題の解決を<br>
            目指したWebサービス、事業に日々邁進しております。<br>
            <br>
            私たちは限りある時間の中で全力で課題に取り組みます。<br>
          </p>
        </li>
      </ul>
    </section>

    <section class="service" id="service">
      <div class="service__bg"></div>
      <ul class="service__item">
        <li>
          <h2>サービス</h2>
          <p>
            家事代行マッチングサービス<br>
            カジママの運営（https://kajimama.jp/）。<br>
            <br>
            他にもお客様の事業をスケールさせるための開発、<br>
            コンサルティング etc.<br>
          </p>
          <div class="service__item--button">
            <a href="https://kajimama.jp/">Learn More</a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt="">
        </li>
      </ul>
    </section>

    <section class="news" id="news">
      <div class="news__title">
        <h2>NEWS</h2>
      </div>
      <ul class="news__item">
        <li class="news__list">
          <div class="news__list--title">
            <span>2022/02/01</span>
            <strong>プレスリリース</strong>
          </div>
          <div class="news__list--description">
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
          </div>
        </li>
        <li class="news__list">
          <div class="news__list--title">
            <span>2022/02/01</span>
            <strong>プレスリリース</strong>
          </div>
          <div class="news__list--description">
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
          </div>
        </li>
        <li class="news__list">
          <div class="news__list--title">
            <span>2022/02/01</span>
            <strong>プレスリリース</strong>
          </div>
          <div class="news__list--description">
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
            ここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入りますここにコメントが入ります
          </div>
        </li>
      </ul>
      <div class="news__button">
        <a href="#">
          Learn More
        </a>
      </div>
    </section>

    <section class="recruit" id="recruit">
      <div class="recruit__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit.jpg" alt="">
      </div>
      <div class="recruit__item">
        <h2>RECRUIT</h2>
        <p>
          ただ今、家事代行マッチングサービス・カジママにて多くの職種を募集中（業務委託、インターン）です。<br>
          <br>
          急成長中ですので、色んな経験ができる面白いフェーズです。
        </p>
        <div class="recruit__item--button">
          <a href="https://kajimama.jp/">See More</a>
        </div>
      </div>
    </section>

    <section class="company" id="company">
      <div class="company__bg"></div>
      <div class="company__title">
        <h2>company</h2>
      </div>
      <dl class="company__description">
        <dt>会社名</dt>
        <dd>株式会社MOPS</dd>
        <dt>設立年月日</dt>
        <dd>2013年1月4日</dd>
        <dt>所在地</dt>
        <dd>
          〒151-0053<br>
          東京都渋谷区代々木4-30-5 フェニックス西参道タワー9F
        </dd>
      </dl>
    </section>

    <section class="map" id="map">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7391019374713!2d139.68826461524688!3d35.6834255801938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f32d5a1bfffd%3A0x3801fae59590b19f!2z44CSMTUxLTAwNTMg5p2x5Lqs6YO95riL6LC35Yy65Luj44CF5pyo77yU5LiB55uu77yT77yQ4oiS77yVIOODleOCp-ODi-ODg-OCr-OCueilv-WPgumBk-OCv-ODr-ODvCA5Zg!5e0!3m2!1sja!2sjp!4v1658131568923!5m2!1sja!2sjp"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>