<?php
global $options;
foreach ($options as $value) {
  if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="left-sidebar">

  <div id="twitter">
  <div id="twitter-inside">
    <?php twitter_messages($theme_twitter,1, false, true, '>> ', true, true, false); ?>
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
