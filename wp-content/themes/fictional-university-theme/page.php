<?php
get_header();
while(have_posts()){
    the_post();
?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
        <?php 
        // echo get_the_ID();
        //输出和下面父id一样   echo wp_get_post_parent_id();
        // echo wp_get_post_parent_id(get_the_ID());
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) {?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>">
          <i class="fa fa-home" aria-hidden="true"></i>
           Back to <?php echo get_the_title($theParent); ?></a>
            <!--echo 输出和下面the_title不一样，前面的函数可以填数字id值  -->
           <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>
        <?php }
        ?>


      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#"><?php the_title();?></a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>

      <div class="generic-content">
<?php the_content(); ?>
      </div>
    </div>
<?php 
}
get_footer();
?>