<?php
while(have_posts()){
    the_post();
?>
    <p>这是一个帖子，一个单独的页面</p>
    <h5>这是最新的文章:</h5><h2><?php the_title(); ?></h2>
    <?php the_content();?>
    <!-- <hr> -->
<?php 
}
?>