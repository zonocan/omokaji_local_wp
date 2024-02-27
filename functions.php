<?php 
function omokaji_v_01_css() {
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/css/reset.css' );  
    wp_enqueue_style('common_css', get_stylesheet_directory_uri() . '/css/common.css' );    
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css' ); 
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css' );     
}

add_action( 'wp_enqueue_scripts', 'omokaji_v_01_css' );
// css

function add_file_types_to_uploads($file_types) {
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
// svgのアップロード
?>