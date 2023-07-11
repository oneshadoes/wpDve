<?php 
function university_files() {
    // wp_enqueue_style('font-awesome', get_theme_file_uri('css/maxcdn.bootstrapcdn.com_font-awesome_4.7.0_css_font-awesome.min.css'));
    //可以这样引用，但看不到图标
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts','university_files'); 
//这里名字不要输错.第二个函数随便起名
