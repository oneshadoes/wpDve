<?php get_header();?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
        ALL Events
            <?php
            
            //不需要动态标题
               // the_archive_title();

            // 2014年引入的新的档案查询方式
            //if (is_category()) {single_cat_title();}
        //if (is_author()) {
            // echo 'xxxxxxxxxxxxxxxxxxxxxxxxx';
          // echo 'Post By'; the_author();
        //}?>
        </h1>
        <!-- 归档 -->
        <div class="page-banner__intro">
          <p>看看世界上发送了啥<?php //不要动态内容了the_archive_description();?></p>
        </div>
      </div>
    </div>
<!-- 头图 -->
<div class="container container--narrow page-section">
<?php 
while(have_posts()) {
    the_post();?>  
                <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink();?>">
              <span class="event-summary__month"><?php
              //返回显示的是20220712字符串，需要转换成月。 the_field('event_date');
               $eventDate = new DateTime(get_field('event_date'));
               echo $eventDate->format('m')
               
               ?></span>
              <span class="event-summary__day"><?php  echo $eventDate->format('d')?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p><?php 
              //输出全部内容，不合适，只需要两行，wp_trim_words(内容，限制多少字) 两个参数
              //the_content();
              echo wp_trim_words(get_the_content(),20);
              ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
    <!-- <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title();?><?php //拼错单词了，我操！。the_litle();?></a></h2>
      <div class="metabox">
        <p>posted by <?php the_author_posts_link();?> on <?php the_time('y-j-n');?> in <?php echo get_the_category_list(', ');?></p>
      </div>
      <div class="generic-content">
        <?php the_excerpt();?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue reading &raquo;</a></p>
      </div>
    </div> -->

<?php 
}
echo paginate_links();
?>  
<?php 
get_footer();
?> 