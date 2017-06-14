<?php
/*
 * project   :OD Base
 * file name : functions.php
 * created   :2017/06/13
 */

if ( ! function_exists( 'odbase_setup' ) ) :

function odbase_setup() {
	/*
	 * 自動フィードリンク
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * titleを自動で書き出し
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * アイキャッチ画像を設定できるようにする
	 */
	add_theme_support( 'post-thumbnails' );
	
	/*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * カスタム背景
	 */
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);
	add_theme_support( 'custom-background', $args );
	
	/*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * カスタムメニュー位置を定義
	 */
	register_nav_menus( array(
		'global' => 'グローバルナビ',
	) );
	
}
endif;
add_action( 'after_setup_theme', 'odbase_setup' );

/*
 * 動画や写真を投稿する際のコンテンツの最大幅を設定
 */
function odbase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'odbase_content_width', 640 );
}
add_action( 'after_setup_theme', 'odbase_content_width', 0 );

/*
 * サイドバーを定義
 */
function odbase_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'description'   => 'ここにウィジェットを追加',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'odbase_widgets_init' );

/*
 * スクリプトを読み込み
 */
function odbase_scripts() {
	wp_enqueue_style( 'lab-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'odbase_scripts' );

/*
 * カスタヘッダーの設定
 */
$args = array(
	'width'         => 1800,
	'height'        => 600,
	'default-image' => '',
);
add_theme_support( 'custom-header', $args );


?>