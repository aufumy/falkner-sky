<div id="right-sidebar">

<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="feeds"> 

			<form action="http://feedburner.google.com/fb/a/mailverify" id="feedform" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $theme_feed; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <input name="email" type="text" value="Enter email address here" class="textarea" onfocus="if (this.value == 'Enter email address here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter email address here';}" />
        <br />
        <input type="hidden" value="<?php echo $theme_feed; ?>" name="uri"/>
        <input type="hidden" value="<?php bloginfo('name'); ?>" name="title"/>
        <input type="hidden" name="loc" value="en_US"/>
 
      </form>
	  
	  <p><a href="http://feeds2.feedburner.com/<?php echo $theme_feed; ?>"><img src="http://feeds2.feedburner.com/~fc/<?php echo $theme_feed; ?>?bg=FD6D00&amp;fg=202931&amp;anim=1" height="26" width="88" style="border:0" alt="" /></a></p>
	  
	
	  <p>
		<a   href="<?php bloginfo('rss2_url'); ?>">Post (RSS)</a> | <a  href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> </p>
		</div> 
		
<div id="tabs">
<div class="tabber">   


	 <div class="tabbertab">
	  <h2>Recent Comments</h2>
		<div class="tablist">
			<ul>
            <?php $myposts = get_posts('numberposts=5&offset=1');
			foreach($myposts as $post) :?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
			<?php endforeach; ?>
            </ul>
		</div>
     </div>

  <div class="tabbertab">
	  <h2>Tags</h2>
        <div class="tablist">
        <?php wp_tag_cloud(); ?>
        </div>
     </div>
     
     

</div>
		<div class="clear"></div>
</div>		
	<h2 class="video-heading">Video</h2>	
<div class="video-widget">

<?php  echo stripslashes($theme_video);?>
</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(RightSidebar) ) : ?>
				<?php endif; ?> 	



		<div class="clear"></div>

</div>
<div class="clear"></div>
</div> 