<?php get_header(); ?>

<div id="container">
<div id="content">
<div id="inside-content"> 

  <?php is_tag(); ?>
  <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
     <h3 class="searchtitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
     <h3 class="searchtitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
     <h3 class="searchtitle">Archive for <?php the_time('F jS, Y'); ?></h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
     <h3 class="searchtitle">Archive for <?php the_time('F, Y'); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
     <h3 class="searchtitle">Archive for <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?> 
     <h3 class="searchtitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
     <h3 class="searchtitle">Blog Archives</h2>
    <?php } ?>

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
    <?php endwhile; ?>
				
  <?php else : ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
  <?php endif; ?>
  <div id="postnav">
    <?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); }?>
  </div> <!-- end #postnavigation -->
</div>
</div> 

<?php include (TEMPLATEPATH . "/leftbar.php"); ?>  
 
<?php get_sidebar(); ?>

<div class="clear"></div>
</div>

<?php get_footer(); ?>
