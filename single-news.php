<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/styles/news.css">

<main>
  <div class="news_box">
    <ul id="breadcrumb">
      <li><a href="/">TOP</a><span>▶︎</span></li>
      <li><a href="/news/">お知らせ一覧</a><span>▶︎</span></li>
      <li>
        <?php
          if(mb_strlen($post->post_title)>19) {
          $title= mb_substr($post->post_title,0,19) ;
            echo $title . '...';
          } else {
            echo $post->post_title;
          }
        ?>
      </li>
    </ul>

    <section id="news_single">
      <?php
        if (have_posts()) :
        while (have_posts()) :
        the_post();
      ?>
      <article class="news_single_inner">
        <h2>
          <?php the_title(); ?>
        </h2>
        <p class="news_single_date">
          <?php echo get_the_date('Y/n/j'); ?>
        </p>
        <div class="news_single_content">
          <?php the_content(); ?>
        </div>
        <div class="blog_new_single_pagenavi">
        <?php
        $prev_post = get_previous_post();
        if (!empty($prev_post)): ?>
          <a href="<?php echo get_permalink($prev_post->ID); ?>" rel="prev">
            <div class="previous" id="previous-article">
              ◂ 前の記事
            </div>
          </a>
        <?php endif; ?>
        <?php
          $next_post = get_next_post();
          if (!empty($next_post)): ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" rel="next">
              <div class="next" id="next-article">
                次の記事 ▸
              </div>
            </a>
          <?php endif; ?>
        </div>
      </article>
      <?php
        endwhile;
        endif;
      ?>
    </section>
  </div>

<?php get_footer(); ?>
