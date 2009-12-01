<!--INITIALIZE SMOOTH GALLERY-->
<script type="text/javascript">
function startGallery()
{
  var myGallery = new gallery($('myGallery'),
  {
    timed: true,
    showCarousel: false 
  });
}
window.addEvent('domready', startGallery);
</script> 
 
 <?php
  global $options;
  foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
  }
?>
 
<div id="myGallery">
<?php
#RETRIEVE THE SMOOTH GALLERY POSTS
$smoothgallery_posts = new WP_Query("category_name=$theme_featured&posts_per_page=5");
 
#DISPLAY SMOOTH GALLERY ELEMENTS
while($smoothgallery_posts->have_posts())
{
  $smoothgallery_posts->the_post();
 
  #RETRIEVE THE SMOOTH GALLERY IMAGE URL
  $picture = get_post_meta($post->ID, 'featured', true);
 
  #RETRIEVE THE SMOOTH GALLERY URL
  $url = get_post_meta($post->ID, 'url', true);
 
  #SMOOTH GALLERY IMAGE URL EXISTS
  if(!empty($picture))
  {
    ?>
    <!-- SMOOTH GALLERY ELEMENT - START -->
    <div class="imageElement">
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    <?php
    #SMOOTH GALLERY URL EXISTS
    if(!empty($url))
    {
      ?>
      <a href="<?php echo $url; ?>" title="Read more" class="open"></a>
      <?php
    }
    #SMOOTH GALLERY URL DOES NOT EXIST - USE POST URL
    else
    {
      ?>
      <a href="<?php the_permalink(); ?>" title="Read more" class="open"></a>
      <?php
    }
    ?>						
    <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, "featured", true); ?>&amp;h=280&amp;w=490&amp;zc=0&amp;q=85" class="full" alt="<?php the_title(); ?>"/>
    <img src="<?php echo $picture; ?>" class="thumbnail" alt="<?php the_title(); ?>"/>
    </div>
    <!-- SMOOTH GALLERY ELEMENT - END -->					
  <?php
  }
}
?>
</div>
