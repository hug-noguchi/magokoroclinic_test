<?php get_header(); ?>

<main>
  <div class="news_box">
    <section id="news_list">
      <ul id="breadcrumb" class="privacy_bd">
        <li><a href="/">TOP</a><span>▶︎</span></li>
        <li>お知らせ</li>
      </ul>
      <div class="news_list_inner">
        <h2><span>お知らせ</span></h2>
        <?php
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 10,
          );

          $news_query = new WP_Query($args);

          if ($news_query->have_posts()) :
            while ($news_query->have_posts()):
              $news_query->the_post();
              ?>
              <div class="news_list_box">
                <p class="news_list_date">
                  <?php echo get_the_date('Y/n/j'); ?>
                </p>
                <p class="news_list_title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </p>
              </div>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
        <?php wp_pagenavi(); ?>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
