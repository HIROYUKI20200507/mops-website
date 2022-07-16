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

    <section class="philosophy">
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

    <section class="service">
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

    <section class="news">
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

    <section class="recruit">
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

  </main>

</body>

<?php get_footer(); ?>

</html>