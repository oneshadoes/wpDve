<?php 
function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    // wp_enqueue_style('font-awesome', get_theme_file_uri('css/maxcdn.bootstrapcdn.com_font-awesome_4.7.0_css_font-awesome.min.css'));
    //可以这样引用，但看不到图标
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //引入css文件
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts','university_files'); 
//这里名字不要输错.第二个函数随便起名

function university_features() {
    // register_nav_menu('headerMenuLocation','Header Menu Location');
    // register_nav_menu('footerMenuLocationOne','页脚链接');
    // register_nav_menu('footerMenuLocationTwo','友情链接');
    add_theme_support('title-tag');

}
add_action('after_setup_theme','university_features'); 

function university_adjust_queries($query) {
//这代码会影响整个网站的后台 $query->set('posts_per_page','1');
if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    // $query->set('posts_per_page','1');
    $today = date('Ymd');//记得这个自定义函数要加上
    $query->set('meta_key','event_date');
    $query->set('orderby','meta_value_num');
    $query->set('order','ASC');
    $query->set('meta_query',array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today, // 用这个的话，不够灵活，我们变成对象。date('Ymd);
          'type' => 'mumeric'
        )
      ));
}
}
add_action('pre_get_posts', 'university_adjust_queries');