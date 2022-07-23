<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body>
  <?php get_template_part('template-parts/navigation'); ?>
  <main>
    <section class="kvRecruit">
      <div class="kvRecruit__bgImage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-recruit.jpg" alt="">
      </div>
      <div class="kvRecruit__text">
        <h1>RECRUIT</h1>
      </div>
    </section>

    <?php
    $page_name = 'RECRUIT';
    get_template_part('template-parts/breadcrumb', null, $page_name);
    ?>

    <section class="RecruitmentType">
      <div class="RecruitmentType__title">
        <h2>募集職種</h2>
      </div>
      <div class="RecruitmentType__description">
        <p>
          ただ今、家事代行マッチングサービス・カジママにて以下の職種を募集中（業務委託、インターン）です。
          <br>
          急成長中ですので、色んな経験ができる面白いフェーズです。
        </p>
      </div>
      <div class="RecruitmentType__items">
        <ul>
          <li>
            <a href="">フロントエンドエンジニア職</a>
          </li>
          <li>
            <a href="">バックエンドエンジニア職</a>
          </li>
          <li>
            <a href="">運営事務</a>
          </li>
        </ul>
      </div>
    </section>

  </main>
  <?php get_footer(); ?>
</body>
</html>