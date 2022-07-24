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

    <section class="recruitmentType">
      <div class="recruitmentType__title">
        <h2>募集職種</h2>
      </div>
      <div class="recruitmentType__description">
        <p>
          ただ今、家事代行マッチングサービス・カジママにて以下の職種を募集中（業務委託、インターン）です。
          <br>
          急成長中ですので、色んな経験ができる面白いフェーズです。
        </p>
      </div>
      <div class="recruitmentType__items">
        <ul>
          <!--MEMO: cssで自動改行をするために半角スペースを開ける -->
          <li>
            <a href="">フロントエンド エンジニア職</a>
          </li>
          <li>
            <a href="">バックエンド エンジニア職</a>
          </li>
          <li>
            <a href="">運営事務</a>
          </li>
        </ul>
      </div>
    </section>

    <section class="recruitDetail">
      <div class="recruitDetail__title">
        <h2>フロントエンドエンジニア職</h2>
      </div>

      <div class="recruitDetail__detail">
        <h3>仕事内容</h3>
        <div class="recruitDetail__detail--description">
          ０→１フェーズが好きな方にはぴったりです。
          フロントエンドエンジニアとしてさまざまなデザイン業務をお任せいたします。
          <br>
          成長フェーズのWebサービスなので、事業のステージに合わせて貴重な経験が可能です。
          上流から下流まで様々な工程の理解を高めることができます。
          <br>
          フロントエンドはもちろん、事業に興味がある方にピッタリのお仕事です。
        </div>
      </div>

      <div class="recruitDetail__detail">
        <h3>応募資格・条件</h3>
        <div class="recruitDetail__detail--description">
          高校卒以上 / 経験者のみ募集
          ■求める人材：
          ・Vue.js Nuxt.jsを使った開発経験。
          ・slack、チャットワーク、AWS、GitHub、Google Workspaceの使用経験。
          ・向上心を持って上記スキルをキャッチアップできる方。
          ・コミュニケーション能力 口下手、無口の人でも問題なし。
          <br>
          【以下の方は優遇いたします】
          ・独学でもWebサービス、アプリの制作経験（自作でも可）のある方。世の中の問題を解決したいという意欲がある方。
          <br>
          ■歓迎スキル
          ・デザインシステムに関する基礎知識、構築経験
          ・CtoCサービスでの開発経験
          ・UXリサーチの実務経験
          ・定性、定量分析からのサービスの改善経験
          ・サービスブランディングの経験
        </div>
      </div>

      <div class="recruitDetail__detail">
        <h3>待遇・福利厚生</h3>
        <div class="recruitDetail__detail--description">
            ■待遇：
          ・時給1,300円以上
          ・週1日からOK
          <br>
          ■福利厚生：
          ・テレワーク/在宅OK
          ・服装自由
        </div>
      </div>


    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>