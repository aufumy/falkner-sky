<?
global $options;
foreach ($options as $value) {
  if (get_settings( $value['id'] ) === FALSE) {
    $$value['id'] = $value['std'];
  } else {
    $$value['id'] = get_settings( $value['id'] );
  }
}
?>
<div id="footer">	
<div id="bottombar">
  <div id="flickr-wrap">
  <div id="flickr">
  <div id="flickr-title">
    <h2>Flickr Photostream</h2>
  </div>
  <div id ="flickr-image">
    <?php get_flickrRSS(); ?>
  </div>
  </div>
  </div>
			
  <div id="share-wrap">	
    <div id="share-title">
      <h2>Let's Go Social.</h2>
    </div>
    <div id="share-link">
      <div class="share-list">
        <li><a href="http://del.icio.us/post?v=4&noui&jump=close&url=<?php echo get_option('home'); ?>/">Del.icio.us</a></li>
        <li><a title="Digg it!" href="http://digg.com/submit?phase=2&url= <?php echo get_option('home'); ?>/">Digg</a></li>
        <li><a title="facebook" href="http://www.facebook.com/share.php?u=<?php echo get_option('home'); ?>/" onclick="return fbs_click()" target="_blank">Facebook</a></li>
        <li><a title="Stumble it!" href="http://www.stumbleupon.com/submit?url=<?php echo get_option('home'); ?>/">Stumble It!</a></li>
      </div>

      <div class="share-list2"> 
        <li ><a href="http://technorati.com/faves?add=<?php echo get_option('home'); ?>/">Technorati</a></li>
        <li ><a href="http://twitter.com/home?status=Currently reading <?php echo get_option('home'); ?>/" title="Click to send this page to Twitter!" target="_blank">Twitter</a></li>
      </div>

      <div class="clear"></div>
    </div>	
    <div class="clear"></div>
  </div> 

  <div id="bottom-ads">
    <div id="bottom-ads-title">
      <h2>Advertisement</h2>
    </div>

    <a  href="<?php echo $theme_banner_url_250; ?>"><img  alt="Advertisement" src="<?php echo $theme_banner_image_250; ?>" class="bottom-ads" /></a>

  </div>
  <div class="clear"></div>
</div>
