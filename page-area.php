<?php get_header(); ?>

  <main>
    <div id="fv">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv_area_pc.png" alt="訪問対象エリア" class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv_area_sp.png" alt="訪問対象エリア" class="sp">
    </div>

    <ul id="breadcrumb">
      <li><a href="/">TOP</a><span>▶︎</span></li>
      <li>訪問対象エリア</li>
    </ul>

    <div id="area">
      <section class="area_box">
        <div class="area_box_inner">
          <h2><span>訪問対象エリア</span></h2>
          <div class="area_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/area_map.png" alt="訪問対象エリア">
          </div>
          <p class="area_text">
            東久留米市 / 西東京市 / 新座市 / 清瀬市 /<br>
            所沢市の一部 / 東村山市の一部 / 小平市の一部 / 練馬区の一部
            <br><br>
            <span>※ 上記以外のご訪問に関しても、気軽にご相談ください。</span>
          </p>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
