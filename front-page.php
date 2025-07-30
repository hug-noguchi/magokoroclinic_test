<?php get_header(); ?>

  <main>
    <div id="fv">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv_pc.png" alt="一人ひとりにまごころを込めて" class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv_sp.png" alt="一人ひとりにまごころを込めて" class="sp">
    </div>

    <section id="news">
      <div class="news_box">
        <div class="news_title">
          <h2>お知らせ</h2>
          <a href="/news/">
            <p class="btn_news"><span>一覧はこちら</span></p>
          </a>
        </div>
        <div class="news_right">
          <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 4,
            );

            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
              while ($news_query->have_posts()):
                $news_query->the_post();
                ?>
                <div class="news_detail">
                  <p class="news_date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('Y.n.j'); ?></a></p>
                  <p class="news_text">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                        if(mb_strlen($post->post_title)>19) {
                        $title= mb_substr($post->post_title,0,19) ;
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                      ?>
                    </a>
                  </p>
                </div>
                <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </div>
      </div>
    </section>

    <section id="subject_about" class="subject_top">
      <h2><span>診療科目</span></h2>
      <ul class="subject_list">
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject01.svg" alt="内科アイコン">
          </div>
          <p class="subject_text">内科</p>
        </li>
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject02.svg" alt="消化器内科アイコン">
          </div>
          <p class="subject_text">消化器内科</p>
        </li>
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject03.svg" alt="循環器内科アイコン">
          </div>
          <p class="subject_text">循環器内科</p>
        </li>
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject04.svg" alt="訪問診療アイコン">
          </div>
          <p class="subject_text">訪問診療</p>
        </li>
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject05.svg" alt="各種健診アイコン">
          </div>
          <p class="subject_text">各種健診</p>
        </li>
        <li>
          <div class="subject_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subject06.svg" alt="各種ワクチン外来アイコン">
          </div>
          <p class="subject_text">各種ワクチン外来</p>
        </li>
      </ul>
    </section>

    <section id="day">
      <div class="day_inner">
        <div class="day_title">
          <h2><span>診療日</span></h2>
        </div>
        <div class="day_box">
          <div class="day_text day_gairai">
            <h3>外来診療</h3>
            <div class="table_scroll">
              <table>
                <tbody>
                  <tr>
                    <th>受付時間</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                    <th>日・祝</th>
                  </tr>
                  <tr>
                    <td>午前  9:00〜12:30</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td rowspan="2" class="row">ー</td>
                  </tr>
                  <tr>
                    <td>午後  2:00〜5:30</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>ー</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="day_note">
              ※受付時間は8時45分〜12時、14〜17時です。
            </p>
          </div>
          <div class="day_text">
            <h3>訪問診療</h3>
            <div class="table_scroll">
              <table>
                <tbody>
                  <tr>
                    <th>受付時間</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土・日・祝</th>
                  </tr>
                  <tr>
                    <td>午前  9:00〜12:00</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td rowspan="2" class="row">※</td>
                  </tr>
                  <tr>
                    <td>午後  1:00〜5:30</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="day_note">
              ※土・日・祝日は緊急往診のみです。<br>
              <span>　新規ご相談は平日の9時から17時になります。</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="visit">
      <div class="visit_inner">
        <h2><span>訪問診療について</span></h2>
        <ul class="visit_list">
          <li>
            <div class="visit_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visit01.png" alt="訪問診療とは">
            </div>
            <p class="visit_list-title"><span>訪問診療とは</span></p>
            <div class="btn_visit">
              <a href="/treatment/">
                <p class="btn_home"><span>詳しく見る</span></p>
              </a>
            </div>
          </li>
          <li>
            <div class="visit_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visit02.png" alt="訪問診療とは">
            </div>
            <p class="visit_list-title"><span>診療内容</span></p>
            <div class="btn_visit">
              <a href="/treatment#detail">
                <p class="btn_home"><span>詳しく見る</span></p>
              </a>
            </div>
          </li>
          <li>
            <div class="visit_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visit03.png" alt="訪問診療とは">
            </div>
            <p class="visit_list-title"><span>訪問対象エリア</span></p>
            <div class="btn_visit">
              <a href="/area/">
                <p class="btn_home"><span>詳しく見る</span></p>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- <section id="detail">
      <div class="detail_inner">
        <h2><span>診療内容</span></h2>
        <div class="detail_box">
          <p class="detail_text">基本的には病院と変わらない診療を受けられます。</p>
          <div class="detail_list">
            <ul>
              <li>・訪問診療および緊急往診（24 時間365日）</li>
              <li>・各種検査</li>
              <li>（血液検査、レントゲン、超音波検査、心電図など）</li>
              <li>・糖尿病、高血圧などの生活習慣病の予防と治療</li>
              <li>・がんや老衰、慢性呼吸不全、</li>
              <li>心不全などの終末期医療（緩和ケア、お看取り）</li>
              <li>・痛みの治療（腰痛、関節痛、がんなど）</li>
              <li>・褥瘡（じょくそう）の管理、治療</li>
              <li>・認知症のサポート、治療</li>
              <li>・糖尿病の自己注射指導、血糖管理</li>
            </ul>
            <ul>
              <li>・脳血管障害後（脳出血、脳梗塞）の治療、リハビリ指導</li>
              <li>・腹水穿刺、胸水穿刺</li>
              <li>・酸素吸入、人工呼吸器、在宅酸素療法（HOT）の管理</li>
              <li>・尿道カテーテル、バルーンの管理、交換</li>
              <li>・経管栄養（胃ろう、経鼻カテーテル）の管理、交換</li>
              <li>・点滴治療、中心静脈栄養</li>
              <li>・多職種との連携（ケアマネージャー、訪問看護師など）</li>
              <li>・薬局との連携による薬の配達、服薬指導</li>
              <li>・連携病院、医療機関へのご紹介、入院の手配</li>
              <li>・各種書類作成（主治医意見書など）</li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section id="renkei">
      <div class="renkei_inner">
        <h2><span>連携医療機関</span></h2>
        <ul class="renkei_list">
          <div>
            <li><span>●</span>東京医科大学病院</li>
            <li><span>●</span>西東京中央総合病院</li>
          </div>
          <li><span>●</span>医療法人社団時正会　佐々総合病院</li>
          <li><span>●</span>公益財団法人結核予防会　複十字病院</li>
        </ul>
      </div>
    </section> -->

    <!-- <section id="collabo">
      <div class="collabo_inner">
        <h2><span>連携医療機関</span></h2>
        <ul class="collabo_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/collabo01.png" alt="福山内科クリニック　訪問診療">
            <div class="collabo_text">
              <h3>福山内科クリニック　訪問診療</h3>
              <div class="tel_box">
                <p class="tel_text">TEL</p>
                <p class="tel">
                  <a hraf="09018193109"><span>090-1819-3109</span></a>
                </p>
              </div>
              <p class="fax"><span>FAX:</span>050-3535-6556</p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/collabo01.png" alt="福山内科クリニック　外来診療">
            <div class="collabo_text">
              <h3>福山内科クリニック　外来診療</h3>
              <div class="tel_box">
                <p class="tel_text">TEL</p>
                <p class="tel">
                  <a hraf="09018193109"><span>090-1819-3109</span></a>
                </p>
              </div>
              <p class="fax"><span>FAX:</span>050-3535-6556</p>
            </div>
          </li>
        </ul>
      </div>
    </section> -->

    <!-- <div class="btn_contact fixedBtn sp">
      <a href="/contact/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_contact_sp.png" alt="お問合せ・お申し込み">
      </a>
    </div> -->

<?php get_footer(); ?>
