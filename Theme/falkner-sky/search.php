<?php get_header(); ?>

<div id="container">
<div id="content">
<div id="inside-content"> 

  <h2 class="searchtitle">Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h2>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <h2 ><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="date"><?php the_time('F j, Y'); ?>, Posted by <?php the_author() ?> at <?php the_time() ?></div>
        <div class="entrysearch"> 
          <?php the_excerpt(); ?> 
        </div>
        <span class="more">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading <?php the_title(); ?>">Read More</a>
        </span>
        <div class="clear"></div>
      </div><!-- end class .post -->

      <div class="clear"></div>
    <?php endwhile; ?>

  <?php else : ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>

  <div id="postnav">
    <?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); }?>
  </div> <!-- end #postnavigation -->
</div> 
</div>
<div id="left-sidebar">

  <div id="twitter">
  <div id="twitter-inside">
    <?php twitter_messages(cameljourney,1, false, true, '>> ', true, true, false); ?>
  </div>
  <div class="clear"></div>
  </div>

  <div class="categories">
  <h2>Categories</h2>
  <ul>
  <?php wp_list_categories('title_li='); ?>
  </ul>
  </div>
	 
  <div id="ads-wrap">
  <div id="ads-image">
    <?php include (TEMPLATEPATH . "/ads.php"); ?>  
  </div>
  </div>

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(leftsidebar) ) : ?>
  <?php endif; ?> 	
  <div class="clear"></div>
</div> 
 
<?php get_sidebar(); ?>

<div class="clear"></div>
</div>

<?php get_footer(); ?>
