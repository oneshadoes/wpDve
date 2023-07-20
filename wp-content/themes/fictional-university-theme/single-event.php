<?php get_header();?>
<?php
while(have_posts()){
    the_post();
?>
    <!-- <p>从首页跳转后,显示的文章，并且去掉了链接:</p><h2><?php //the_title(); ?></h2> -->
    <!-- <p><?php //the_content();?></p> -->
    <!-- <hr> -->
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Events DAY<?php //the_title();?></h1>
        <div class="page-banner__intro">
          <p>我是sigle页面1111Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event');?>">
          <i class="fa fa-home" aria-hidden="true"></i>
           Events home</a>
            <!--echo 输出和下面the_title不一样，前面的函数可以填数字id值  -->
           <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>
      <!-- neirong内容 -->
        <div class="generic-content">
        <?php the_content();?>
        </div>
    </div>
<?php 
}
get_footer();
?>