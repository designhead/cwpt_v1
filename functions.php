<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'cwpt_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'cwpt_wrapper_end', 10);


function cwpt_wrapper_start() {
	echo '<div id="body">';
		echo '<div class="wrapper">';
			echo '<div id="content">';
				echo '<div class="wc">';
}

function cwpt_wrapper_end() {
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}

/*
add_action( 'init', 'remove_wc_breadcrumbs' );

function remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
*/

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}

function cwpt_scripts() {
	wp_enqueue_script('jquery');
	
	wp_register_style( 'cwpt-styles', get_template_directory_uri() . '/css/styles.css' );
	wp_enqueue_style('cwpt-styles');
	
	wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style('fontawesome');
}

add_action('wp_enqueue_scripts', 'cwpt_scripts');

//define('WP_POST_REVISIONS', 3);

?>