<?
global $options;
foreach ($options as $value) {
  if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<!-- Ad1 start -->
<a  href="<?php echo $theme_banner_url_one; ?>"><img  alt="Advertisement" src="<?php echo $theme_banner_image_one; ?>" class="ads" /></a>
        
<!-- Ad2 start -->
<a  href="<?php echo $theme_banner_url_two; ?>"><img  alt="Advertisement" src="<?php echo $theme_banner_image_two; ?>" class="ads"/></a>
        
<div class="clear"></div>
<div style="overflow: hidden;">
  <!-- Ad3 start -->
  <a  href="<?php echo $theme_banner_url_three; ?>"><img  alt="Advertisement" src="<?php echo $theme_banner_image_three; ?>" class="ads" /></a>
        
  <!-- Ad4 start -->
  <a href="<?php echo $theme_banner_url_four; ?>"><img  alt="Advertisement" src="<?php echo $theme_banner_image_four; ?>" class="ads"/></a>
</div>
<div class="clear"></div>
