<?php

// カスタム投稿タイプ
function create_post_type(){
	register_post_type('news',
		array(
			'labels' => array(
				'name' => __('お知らせ'),
			),
			'public' => true,
			'menu_position' => 3,
			'supports' => array(
				'title',
				'editor',
				'revisions',
			),
			'has_archive' => true,
			'show_in_rest' => true,
		)
	);
	register_taxonomy(
		'newscategory',
		'news',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true,
			'show_in_quick_edit' => false,
			'show_in_rest' => true,
			'meta_box_cb' => false,
		)
	);
}
add_action('init', 'create_post_type');

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}

function enqueue_name() {
	if (is_page('docter')) {
			wp_enqueue_style('style_docter', get_template_directory_uri() . '/assets/styles/docter.css', array(), '1.0.0');
	}
	if (is_post_type_archive('news')) {
			wp_enqueue_style('style_news', get_template_directory_uri() . '/assets/styles/news.css', array(), '1.0.0');
	}
	if (is_page('privacy_policy')) {
		wp_enqueue_style('style_docter', get_template_directory_uri() . '/assets/styles/privacy.css', array(), '1.0.0');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_name');

?>
