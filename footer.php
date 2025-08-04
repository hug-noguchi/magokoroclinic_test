    <div class="btn_contact fixedBtn sp">
      <a href="/contact/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_contact_sp.png" alt="お問合せ・お申し込み">
      </a>
    </div>

    <footer>
      <div class="ft_inner">
        <div class="ft_content">
          <div class="ft_box">
            <p class="ft_box-clinic"><a href="/"><span>福山内科クリニック</span></a></p>
            <p class="ft_box-adress">〒203-0013<br>東京都東久留米市新川町1-9-22</p>
            <div class="ft_box-tel gairai">
              <p class="ft_box-tel-main">外来</p>
              <p class="ft_box-tel-text">
                <a href="tel:0424709177">
                  TEL:042-470-9177
                </a>
                  FAX:050-3535-6556
              </p>
            </div>
            <!-- <div class="ft_box-tel houmon">
              <p class="ft_box-tel-main">訪問</p>
              <p class="ft_box-tel-text">
                <a href="tel:0424555586">
                  TEL:042-455-5586
                </a>
                <br>
                <a href="tel:09018193109" class="tel_sub">
                  090-1819-3109
                </a>
                <br>
                  FAX:050-3535-6556
              </p>
            </div> -->
            <div class="ft_box-tel houmon">
              <p class="ft_box-tel-main">訪問</p>
              <div class="ft_box-tel-box">
                <span class="tel-row">
                  <span class="tel-label">TEL:</span><a href="tel:0424555586">042-455-5586</a>
                </span>
                <span class="tel-row">
                  <span class="tel-label"></span><a href="tel:09018193109">090-1819-3109</a>
                </span>
                <span class="tel-row">
                  <span class="tel-label">FAX:</span><span>050-3535-6556</span>
                </span>
              </div>
            </div>
          </div>
          <div class="ft_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.572387351539!2d139.5341077113112!3d35.76131367244707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e899b6e8ad37%3A0xbec5dca32090ee30!2z44CSMjAzLTAwMTMg5p2x5Lqs6YO95p2x5LmF55WZ57Gz5biC5paw5bed55S677yR5LiB55uu77yZ4oiS77yS77yS!5e0!3m2!1sja!2sjp!4v1714060785336!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <nav class="ft_nav">
          <ul>
            <li><a href="/docter/">医師の紹介</a></li>
            <li><a href="/about/">当院について</a></li>
            <li><a href="treatment/">訪問診療とは</a></li>
            <li><a href="/area/">訪問対象エリア</a></li>
            <li><a href="/faq/">よくあるご質問</a></li>
            <li><a href="/recruit/">求人案内</a></li>
            <li><a href="/privacy_policy/">個人情報保護方針</a></li>
            <li><a href="/news/">お知らせ</a></li>
            <li><a href="/contact/">お問合せ・申し込み</a></li>
          </ul>
        </nav>
        <p class="copyright">Copyright © 2024 福山内科クリニック All Rights Reserved.</p>
      </div>
    </footer>

    <script>
      window.addEventListener("scroll", function () {
        const elm = document.querySelector(".fixedBtn");
        const scroll = window.pageYOffset;
        if (scroll > 500) {
          elm.style.opacity = "1";
          elm.style.zIndex = "1";
          // console.log(scroll);
        } else {
          elm.style.opacity = "0";
          elm.style.zIndex = "-1";
          // console.log(scroll);
        }
      });

      // よくあるご質問 アコーディオン
      $(function() {
        $(document).on('click', '.js_accordion_btn', function() {
          let js_accordion_row = $(this).parents('.js_accordion_row');
          let js_accordion_content = js_accordion_row.find('.js_accordion_content');

          if (js_accordion_row.hasClass('-active')) {
            js_accordion_row.removeClass('-active');
            js_accordion_content.slideUp();
          } else {
            js_accordion_row.addClass('-active');
            js_accordion_content.slideDown();
          }
        });
      });
    </script>
  </main>
	<?php wp_footer(); ?>
</body>

</html>
