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
    <section id="contact" class="contact_thanks">
      <ul id="breadcrumb" class="contact_bd">
        <li><a href="/">TOP</a><span>▶︎</span></li>
        <li>お問合せ・お申し込み 入力</li>
      </ul>
      <div class="contact_inner">
        <h2><span>お問合せ・お申し込み</span></h2>
        <div class="contact_flow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow03.png" alt="③完了" class="pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow03_sp.png" alt="③完了" class="sp">
        </div>
        <p class="contact_thanks_lead">
          送信ありがとうございます
        </p>
        <p class="contact_thanks_text">
          この度はお問い合わせメールをお送りいただきありがとうございます。<br>
          後ほど、担当者よりご連絡をさせていただきます。<br>
          今しばらくお待ちくださいますようよろしくお願い申し上げます。
          <br><br>
          ※夜間、土、日、祝日に頂いたメールは翌日、もしくは休み明けの返信になります。
          <br><br>
          なお、しばらくたっても当院より返信、返答がない場合は、<br>
          お客様によりご入力いただいたメールアドレスに誤りがある場合がございます。<br>
          その際は、お手数ですが再度送信いただくか、<br>
          お電話（外来:<a href="tel:0424709177">042-470-9177</a>/訪問:<a href="tel:09018193109">090-1819-3109</a>,<a href="tel:0424555586">042-455-5586</a>）にてご連絡いただけますと幸いです。
        </p>
        <?php
					if (have_posts()) :
						while (have_posts()):
							the_post();
						the_content();

						endwhile;
					endif;
        ?>
        <div class="contact_button">
          <a href="/">
            <p id="btn_contact_top"><span>TOPへ戻る</span></p>
          </a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
