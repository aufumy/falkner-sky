<?php get_header(); ?>

		
<div id="container">


<div id="content">

<?php include (TEMPLATEPATH . '/gallery.php'); ?>



	<div id="ads468">
		<a href="<?php echo $theme_banner_468_url; ?>" title="Advertisement">
	<img src="<?php echo $theme_banner_468; ?>" alt="top-ads" />
	</a>
	</div>
	
	<div id="latest"> 
	Latest News
	</div>

	<?php if (have_posts()) : ?>
		
				<?php while (have_posts()) : the_post(); ?>
				<div class="post-home">
				<h2><a class="posttitle" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="date"> Posted by <?php the_author() ?> <?php the_time('F j, Y'); ?>, under <?php the_category(', ') ?> |  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div> 
				<div class="thumbnail">
				
				<?php
$thumbnail = get_post_custom();
					$scrap = get_bloginfo('stylesheet_directory') . '/timthumb.php?';
					if (empty($thumbnail['thumbnail'][0])) {
						$imagpath = $scrap . 'src=' . get_bloginfo('stylesheet_directory') . '/images/thumbnail.jpg' . '&amp;w=125&amp;h=125&amp;zc=0';
					} else {
						$imagpath = $scrap . 'src=' .   $thumbnail['thumbnail'][0] . '&amp;w=125&amp;h=125&amp;zc=0';
					}
				?>  
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $imagpath; ?>" alt="<?php the_title(); ?>" /></a>
					
				</div>
				<div class="entryhome"><?php the_excerpt(); ?></div> 
				<div class="clear"></div>
				</div>
	
	<?php endwhile; ?>
			<?php else : ?>
				<?php include (TEMPLATEPATH . '/404.php'); ?>
	<?php endif; ?>
		 
	<div id="postnav">
	<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); }?>
 </div> <!-- end #postnavigation -->
	<div class="clear"></div>

	</div> 
			<?php include (TEMPLATEPATH . "/leftbar.php"); ?>  
 
   <?php get_sidebar(); ?>

<div class="clear"></div>
</div>

	<?php get_footer(); ?>