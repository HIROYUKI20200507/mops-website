<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body>
  <?php get_template_part('template-parts/navigation'); ?>
  <main>
    <section class="kvNews">
      <div class="kvNews__bgImage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-news.png" alt="">
      </div>
      <div class="kvNews__text">
        <h1>NEWS</h1>
      </div>
    </section>

    <?php
    $page_name = 'NEWS';
    get_template_part('template-parts/breadcrumb', null, $page_name);
    ?>

    <section class="contactDetail">
      <div class="contactDetail__detail">
        <h1>お問い合わせ</h1>

        <!-- TODO: contact form 7 -->
        <?php
        $args = ['posts_per_page' => 5];
        $postslist = get_posts($args);
        foreach ($postslist as $post):
          setup_postdata($post); ?>
            <div>
                <?php the_date(); ?> 日付
                <br />
                <?php the_title(); ?> タイトル
                <?php the_excerpt(); ?>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
</html>