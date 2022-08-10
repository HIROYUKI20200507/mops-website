<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>
  <main>
    <section class="kvNews">
      <div class="kvNews__bgImage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-news.png" alt="">
      </div>
      <div class="kvNews__text">
        <h1>NEWS</h1>
      </div>
    </section>

    <section class="newsDetail">
      <div class="newsDetail__detail">
        <?php while (have_posts()):
          the_post(); ?>
          <?php the_title(); ?>
          <?php the_content(); ?>
        <?php
        endwhile; ?>
        </main>
      </div>
    </section>

<?php get_footer(); ?>
</body>
</html>