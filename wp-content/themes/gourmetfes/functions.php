<?php
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

//---------------------------------------------------------------------------
//スマホならtrueを返すis_mobile関数作成
//---------------------------------------------------------------------------
function is_mobile(){
    $useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'Android',         // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//---------------------------------------------------------------------------
//タブレットならtrueを返すis_tablet関数作成
//---------------------------------------------------------------------------
function is_tablet(){
    $useragents = array(
		'iPad',            // iPad
		'tablet',          // tablet
		'kindle',          // kindle
		'silk',            // silk
		'playbook'         // playbook
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//---------------------------------------------------------------------------
//新着情報のカスタム投稿タイプを追加
//---------------------------------------------------------------------------
function create_post_type() {
	$Supportcustom = [// 投稿画面で表示される項目の設定
		'title', // 記事タイトル
		'editor', // 記事本文
		'thumbnail', // アイキャッチ画像
	];
	register_post_type( 'custom', // URLになる部分
		array(
		'label' => '新着情報', // 管理画面の左メニューに表示されるテキスト
		'labels' => array(
		'all_items' => '投稿一覧'// 管理画面の左メニューの下層に表示されるテキスト
	),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 7,
		'supports' => $Supportscustom
	)
	);
	}
	add_action( 'init', 'create_post_type' );
//---------------------------------------------------------------------------
//カスタム投稿タイプにツールバーを追加
//---------------------------------------------------------------------------

    function my_acf_toolbars($toolbars) {
      $toolbars['Simple' ] = array();
      $toolbars['Simple' ][1] = array('link','underline'); // 「Simple」の中に表示したいボタンを選択

      return $toolbars;
    }
    add_filter('acf/fields/wysiwyg/toolbars' , 'my_acf_toolbars');

//---------------------------------------------------------------------------
//管理画面の投稿非表示
//---------------------------------------------------------------------------
	function remove_menus () {
	  global $menu;
	  remove_menu_page( 'edit.php' ); // 投稿を非表示
	}
	add_action('admin_menu', 'remove_menus');

//---------------------------------------------------------------------------
//編集者の不要部分を非表示
//---------------------------------------------------------------------------
	
	function remove_menusadmin () {
			if (!current_user_can('administrator')) {
			remove_menu_page( 'index.php' );
			remove_menu_page( 'edit-comments.php' );
			remove_menu_page( 'tools.php' );
			remove_menu_page( 'edit.php' );
			}
		}
		add_action('admin_menu', 'remove_menusadmin');