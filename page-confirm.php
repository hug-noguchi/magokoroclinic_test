<?php get_header(); ?>

  <style>
    #button_box {
      display: none;
    }
    .hd_nav_contact {
      max-width: 1170px;
      width: 70%;
      float: unset;
      margin: 0 auto 40px;
    }
    .hd_nav_contact ul {
      justify-content: center;
    }
  </style>

  <main>
    <section id="contact">
      <ul id="breadcrumb" class="contact_bd">
        <li><a href="/">TOP</a><span>▶︎</span></li>
        <li>お問合せ・お申し込み 入力</li>
      </ul>
      <div class="contact_inner">
        <h2><span>お問合せ・お申し込み</span></h2>
        <div class="contact_flow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow02.png" alt="②確認" class="pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow02_sp.png" alt="②確認" class="sp">
        </div>
        <p class="contact_confirm_text">
          内容をご確認の上、送信するボタンをクリックしてください。
        </p>
        <?php
					if (have_posts()) :
						while (have_posts()):
							the_post();
						the_content();

						endwhile;
					endif;
        ?>
      </div>
    </section>

<?php get_footer(); ?>
