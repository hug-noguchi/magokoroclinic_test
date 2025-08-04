<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      if (is_front_page() || is_home()) {
          echo '福山内科クリニック';
      } else {
          wp_title('|', true, 'right');
          echo '福山内科クリニック';
      }
    ?>
  </title>
  <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/script.js">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fatNav.min.css">
  <meta name="description" content="福山内科クリニック 東久留米市、西東京市、新座市、清瀬市、所沢市の一部、東村山市の一部、小平市の一部、練馬区の一部の訪問診療・外来診療">
  <script>
    (function(d) {
      var config = {
        kitId: 'zbw6vru',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <header>
    <div class="pc">
      <div class="hd">
        <h1 id="clinic"><a href="/">福山内科クリニック</a></h1>
        <div class="hd_box">
          <p class="hd_box-tel">
            外来<br>
            <span><a href="tel:0424709177">TEL:042-470-9177</a><br>
            FAX:050-3535-6556</span>
          </p>
          <!-- <p class="hd_box-tel">
            訪問診療<br>
            <span>
              <a href="tel:0424555586">TEL:042-455-5586</a>
              <br>
              <a href="tel:09018193109" class="tel_sub">090-1819-3109</a>
              <br>
              FAX:050-3535-6556
            </span>
          </p> -->
          <p class="hd_box-tel">
            訪問診療<br>
            <span class="tel-row">
              <span class="tel-label">TEL:</span><a href="tel:0424555586">042-455-5586</a>
            </span>
            <span class="tel-row">
              <span class="tel-label">　</span><a href="tel:09018193109">090-1819-3109</a>
            </span>
            <span class="tel-row">
              <span class="tel-label">FAX:</span><span>050-3535-6556</span>
            </span>
          </p>
          <div class="btn_contact">
            <a href="/contact/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_contact_pc.png" alt="お問合せ・お申し込み">
            </a>
          </div>
        </div>
      </div>
      <nav class="hd_nav hd_nav_contact">
        <ul>
          <li><a href="/docter/">医師の紹介</a></li>
          <li><a href="/about/">当院について</a></li>
          <li><a href="treatment/">訪問診療とは</a></li>
          <li><a href="/area/">訪問対象エリア</a></li>
          <li><a href="/faq/">よくあるご質問</a></li>
          <li><a href="/recruit/">求人案内</a></li>
        </ul>
      </nav>
    </div>
    <div class="sp">
      <h1 id="clinic"><a href="/">福山内科クリニック</a></h1>
      <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <nav class="menu-content">
        <ul>
          <li><a href="/docter/">医師の紹介</a></li>
          <li><a href="/about/">当院について</a></li>
          <li><a href="treatment/">訪問診療とは</a></li>
          <li><a href="/area/">訪問対象エリア</a></li>
          <li><a href="/faq/">よくあるご質問</a></li>
          <li><a href="/recruit/">求人案内</a></li>
          <li><a href="/contact/">お問合せ・お申し込み</a></li>
          <li><a href="tel:0424709177">外来 042-470-9177</a></li>
          <li>
            <a href="tel:0424555586">訪問 042-455-5586</a>
            <a href="tel:09018193109">090-1819-3109</a>
          </li>
        </ul>
      </nav>
      </div>
    </div>
  </header>
