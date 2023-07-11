<?php get_header();?>
<?php
while(have_posts()){
    the_post();
?>
    <p>从首页跳转后,显示的文章，并且去掉了链接:</p><h2><?php the_title(); ?></h2>
    <p><?php the_content();?></p>
    <!-- <hr> -->
<?php 
}
get_footer();
?>