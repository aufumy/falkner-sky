<?php
if ( function_exists('register_sidebar') )
 register_sidebar(array('name'=>'leftsidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 >',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
 register_sidebar(array('name'=>'RightSidebar',
        'before_widget' => '<div class="right-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="right-heading" >',
        'after_title' => '</h2>',
    ));

$themename = "Falkner Press Theme";
$shortname = "theme";
$options = array (
  array("name" => "Theme Settings",
         "type" => "titles",),

  array("name" => "<span style='float: left;'>Featured Category Name</span>",
        "id" => $shortname."_featured",
        "type" => "text",
        "std" => "",
        ),

  array("name" => "<span style='float: left;'>Feedburner ID</span>",
        "id" => $shortname."_feed",
        "type" => "text",
        "std" => "camelgraph",
        ),

  array("name" => "<span style='float: left;'>Twitter ID</span>",
        "id" => $shortname."_twitter",
        "type" => "text",
        "std" => "cameljourney",
        ),		


  array("name" => "<span style='float: left;'>Youtube Embed Code</span>",
        "id" => $shortname."_video",
        "type" => "textarea",
        "std" => "test",
        ),				  

  array("name" => "Banner Management",
        "type" => "titles"),

  array("name" => "468x60 Banner Image",
        "id" => $shortname."_banner_468",
        "std" => "http://cameljourney.com/wp-content/themes/thestars/images/ads-468x60.gif",
        "type" => "text"),

  array("name" => "468x60 Banner URL",
        "id" => $shortname."_banner_468_url",
        "std" => "http://tinyurl.com/698azk",
        "type" => "text"),

  array("name" => "85x85 Banner #1 Image",
        "id" => $shortname."_banner_image_one",
        "std" => "http://ads.psd2html.com/125x125.jpg",
        "type" => "text"),

  array("name" => "85x85 Banner #1 URL",
        "id" => $shortname."_banner_url_one",
        "std" => "http://www.psd2html.com/order-now.html",
        "type" => "text"),

  array("name" => "85x85 Banner #2 Image",
        "id" => $shortname."_banner_image_two",
        "std" => "http://www.elegantthemes.com/images/banners/125x125-7.gif",
        "type" => "text"),

  array("name" => "85x85 Banner #2 URL",
        "id" => $shortname."_banner_url_two",
        "std" => "http://tinyurl.com/698azk",
        "type" => "text"),

  array("name" => "85x85 Banner #3 Image",
        "id" => $shortname."_banner_image_three",
        "std" => "http://hongki.at/images/ads/125x125/w3markup.jpg",
        "type" => "text"),

  array("name" => "85x85 Banner #3 URL",
        "id" => $shortname."_banner_url_three",
        "std" => "http://w3-markup.com/order",
        "type" => "text"),

  array("name" => "85x85 Banner #4 Image",
        "id" => $shortname."_banner_image_four",
        "std" => "http://hongki.at/images/ads/125x125/markup4u.png",
        "type" => "text"),

  array("name" => "85x85 Banner #4 URL",
        "id" => $shortname."_banner_url_four",
        "std" => "http://www.markup4u.com/order-now.html",
        "type" => "text"),		

  array("name" => "250x100 Bottom Ads Image",
        "id" => $shortname."_banner_image_250",
        "std" => "http://i44.tinypic.com/2vj5wrq.jpg",
        "type" => "text"),

  array("name" => "250x100 Bottom Ads URL",
        "id" => $shortname."_banner_url_250",
        "std" => "http://camelgraph.com", 
        "type" => "text"),				
);

function mytheme_add_admin() {
  global $themename, $shortname, $options;

  if ( $_GET['page'] == basename(__FILE__) ) {
    if ( 'save' == $_REQUEST['action'] ) {

      foreach ($options as $value) {
        update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
      }

      foreach ($options as $value) {
        if ( isset( $_REQUEST[ $value['id'] ] ) ) {
          update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
        } else {
          delete_option( $value['id'] );
        } 
      }

      header("Location: themes.php?page=functions.php&saved=true");
      die;

    } else if( 'reset' == $_REQUEST['action'] ) {
      foreach ($options as $value) {
        delete_option( $value['id'] ); 
      }

      header("Location: themes.php?page=functions.php&reset=true");
      die;
    }
  }

  add_theme_page($themename." Options", "Current Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin() {

  global $themename, $shortname, $options;

  if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
  if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
  ?>

  <div class="wrap">
  <h2><?php echo $themename; ?> settings</h2>

  <form method="post">

  <?php foreach ($options as $value) { 
    
  if ($value['type'] == "text") { ?>

    <div style="float: left; width: 880px; background-color:#f9f9f9; border-left: 1px solid #C6C6C6; border-right: 1px solid #C6C6C6;  border-bottom: 1px solid #C6C6C6; padding: 10px;">     
    <div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
    <div style="width: 680px; float: left;"><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px;" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></div>
    </div>
 
  <?php } elseif ($value['type'] == "text2") { ?>
        
    <div style="float: left; width: 880px; background-color:#f9f9f9; border-left: 1px solid #C6C6C6; border-right: 1px solid #C6C6C6;  border-bottom: 1px solid #C6C6C6; padding: 10px;">     
    <div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
    <div style="width: 680px; float: left;"><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px; height: 200px;" type="<?php echo $value['type']; ?>"><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></div>
    </div>

  <?php } elseif ($value['type'] == "textarea") { ?>
        
    <div style="float: left; width: 880px; background-color:#f9f9f9; border-left: 1px solid #C6C6C6; border-right: 1px solid #C6C6C6;  border-bottom: 1px solid #C6C6C6; padding: 10px;">     
    <div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
    <div style="width: 680px; float: left;"><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px; height: 200px;" type="<?php echo $value['type']; ?>"><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></div>
    </div>

  <?php } elseif ($value['type'] == "select") { ?>

    <div style="float: left; width: 880px; background-color:#f9f9f9; border-left: 1px solid #C6C6C6; border-right: 1px solid #C6C6C6;  border-bottom: 1px solid #C6C6C6; padding: 10px;">   
    <div style="width: 200px; float: left;"><?php echo $value['name']; ?></div>
    <div style="width: 680px; float: left;"><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width: 400px;">
    <?php foreach ($value['options'] as $option) { ?>
      <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
    <?php } ?>
    </select></div>
    </div>

  <?php } elseif ($value['type'] == "titles") { ?>

    <div style="float: left; width: 870px; padding: 15px; background-color:#464646; border: 1px solid #C6C6C6; ; font-size: 16px; font-weight: bold; margin-top: 25px;color:#fff">   
    <?php echo $value['name']; ?>
    </div>

    <?php 
  } 
  }
  ?>

  <div style="clear: both;"></div>

  <p class="submit">
  <input name="save" type="submit" value="Save changes" />    
  <input type="hidden" name="action" value="save" />
  </p>
  </form>
  <form method="post">
  <p class="submit">
  <input name="reset" type="submit" value="Reset" />
  <input type="hidden" name="action" value="reset" />
  </p>
  </form>

  <?php
}

function mytheme_wp_head() { ?>

<?php }

add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin'); ?>
