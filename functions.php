<?php
/**
 * Lightning Child theme functions
 *
 * @package lightning
 */



/************************************************
 * 独自CSSファイルの読み込み処理
 *
 * 主に CSS を SASS で 書きたい人用です。 素の CSS を直接書くなら style.css に記載してかまいません.
 */

 function my_styles()  {
	// トップページ用のCSS
	if ( is_front_page() ) {
		wp_enqueue_style(
			'my-lightning-custom',
			get_stylesheet_directory_uri() . '/assets/css/original-top.css',
			array( 'lightning-design-style' ),
			filemtime( dirname( __FILE__ ) . '/assets/css/original-top.css' )
		);
		wp_enqueue_style( 'google-fonts-Marcelluss', 'https://fonts.googleapis.com/css2?family=Marcellus&display=swap', array(), '1.0.0', 'all' );
		wp_enqueue_script('my', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery'), '1.0.1', true);
	  }
	 	else  { //トップページ以外
			wp_enqueue_style(
				'my-lightning-custom',
				get_stylesheet_directory_uri() . '/assets/css/orignal-sub.css',
				array( 'lightning-design-style' ),
				filemtime( dirname( __FILE__ ) . '/assets/css/orignal-sub.css' )
			);
	 		wp_enqueue_script('my', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery'), '1.0.1', true);
	}
 }

  add_action( 'wp_enqueue_scripts', 'my_styles' );


/************************************************
 * 独自の処理を必要に応じて書き足します