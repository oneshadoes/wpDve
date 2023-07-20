<?php get_header();?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>我是index页面Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>
<!-- 头图 -->
<div class="container container--narrow page-section">
<?php 
while(have_posts()) {
    the_post();?>  
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title();?><?php //拼错单词了，我操！。the_litle();?></a></h2>
      <div class="metabox">
        <p>posted by <?php the_author_posts_link();?> on <?php the_time('y-j-n');?> in <?php echo get_the_category_list(', ');?></p>
      </div>
      <div class="generic-content">
        <?php the_excerpt();?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue reading &raquo;</a></p>
      </div>
    </div>

<?php 
}
echo paginate_links();
?>  
</div>
    <!-- <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
              <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div> -->



<?php 
get_footer();
?> 