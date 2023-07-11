<?php
while(have_posts()){
    the_post();
?>
    <h1>这里是主题的首页（也是站点的首页）</h1>
    <p>循环出最新的文章和内容，添加链接:</p>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content();?>
    <hr>
<?php 
}
?>