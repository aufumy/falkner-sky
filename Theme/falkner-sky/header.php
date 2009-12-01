<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <meta name="generator" content="WordPress" /> <!-- leave this for stats -->
<title><?php if (is_home () ) { bloginfo('name'); }elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
elseif (is_single() ) { single_post_title();}
elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title();}
else { wp_title('',true); } ?></title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?'.filemtime( get_stylesheet_directory().'/style.css'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pagenavi-css.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tabber.css" type="text/css" media="screen" />
<!--[if gte IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/IE8.css" />
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/IE.css" />
<![endif]-->


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
 <!--[if lte IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/unitpngfix.js"></script>
<![endif]-->

<?php
#DISPLAY SMOOTHGALLERY
if(is_home())
{
?>
 <link rel="stylesheet" type="text/css" media="screen" href="<?php echo bloginfo('template_directory'); ?>/css/jd.gallery.css" />
<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/mootools.v1.11.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jd.gallery.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tabber.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 <?php wp_head(); ?>	
</head>

<body>
<?
global $options;
foreach ($options as $value) {
  if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="header-wrap">
  <div id="logo">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  </div>
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>

<div class="clear"></div>
</div>

<div id="menu-wrap">
 <ul >
 <li ><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
 <?php wp_list_pages('title_li='); ?>
 </ul>
 </div>
 
 
