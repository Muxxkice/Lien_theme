<?php
function mypath(){
  return get_theme_file_uri() . '/';
}

// add_action('WPの処理のタイミング','差し込みたい処理');
add_action('after_setup_theme', function(){
  // ページタイトルの有効化
  add_theme_support('title-tag');
// // Gutenberg用スタイルの読み込みf
add_theme_support('wp-block-style');
  //アイキャッチ
  add_theme_support('post-thumbnails');
});
// function mytheme_setup() {
// // Gutenberg用スタイルの読み込みf
// add_theme_support('wp-block-style');
// // レスポンシブの有効化

// // editor.cssを有効化&エディターに読み込み
// //ページのタイトルの有効化
// add_theme_support('title-tag');
// //link,style,scriptをhtml5での表記にする
// // アイキャッチ画像の有効化
// add_theme_support('post-thumbnails');

// // ナビゲーションを登録
// //「幅広」と「全幅」に対応
// // size属性とsrcset属性の無効化
// }
// add_action('after_setup_theme', 'theme_setup');
// // add_action('WPの処理のタイミング','差し込みたい処理');

  // ウィジェットエリアの登録
function mytheme_widgets() {
  register_sidebar( array(
    'name' => 'Footer menue',
    'id' => 'sidebar-1',
    'before_widget' => '<section>',
    'after_widget' => '</section>',
  ) );
}
add_action( 'widgets_init', 'mytheme_widgets' );
