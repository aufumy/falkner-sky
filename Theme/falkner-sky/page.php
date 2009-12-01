<?php get_header(); ?>

<div id="container">
<div id="content">

  <div id="inside-content"> 
	
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <div class="single-entry">
          <?php the_content(); ?>
        </div>
        <div class="clear"></div>
      </div><!-- end class .post -->	  

      <?php comments_template(); ?>
      </div>

    <?php endwhile; else: ?> 

    <?php include (TEMPLATEPATH . '/404.php'); ?>

  <?php endif; ?>

</div> 

<?php include (TEMPLATEPATH . "/leftbar.php"); ?>  

<?php get_sidebar(); ?>

<div class="clear"></div>
</div>
<?php get_footer(); ?>
