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

    <section class="newsDetail">
      <div class="newsDetail__detail">

        <?php
        $args = ['posts_per_page' => 5];
        $postslist = get_posts($args);

        foreach ($postslist as $post):
          setup_postdata($post); ?>
            <a href="<?php the_permalink($post); ?>" class="newsDetail__detail--contents">
              <h3>
                <?php the_date('Y/m/d'); ?> <?php the_title(); ?>
              </h3>
              <div>
                <?php the_excerpt(); ?>
              </div>
            </a>
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