<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php
		if (get_post_meta($post->ID, 'robots', TRUE) != "")
		{
			echo '<meta name="robots" content="'.get_post_meta($post->ID, 'robots', TRUE).'" />';
		}
	?>

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="/wp-content/themes/minid/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="/wp-content/themes/minid/alternate.css" type="text/css" media="handheld" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="http://feeds.feedburner.com/negonation/blog/es" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


		<?php wp_get_archives('type=monthly&format=link'); ?>

		<?php wp_head(); ?>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-128262-9";
urchinTracker();
</script>

<style type="text/css">
 div.post img {behavior: url(http://blog.negonation.com/en/iepngfix.htc) }
</style>
  <script type="text/javascript" src="/jquery/jquery.js?1360401146"></script>
  <script>jQuery.noConflict();</script>
  
	</head>

<body>

   <div id="header-content">
     <!-- begin shared/nav_public -->
     <ul id="ulnav">
           <li><a href="http://www.tractis.com" title="" rel="section">Home</a></li>
           <li><a href="http://blog.negonation.com" title="" class="selected" rel="section">Blog</a></li>
<li><a href="http://twitter.com/tractis" title="" rel="section">Twitter</a></li>
           <li><a href="mailto:blog@negonation.com" title="" rel="section">Contact</a></li>
     </ul>
     <!-- end shared/nav_public -->
<ul id="ulnav2">
<li><a href="/es/" rel="start" title="Negonation Blog in Spanish" lang="es">Español</a></li>
<li><a href="/en/" rel="start"	title="Negonation Blog in English" lang="en" class="selected">English</a></li>
</ul>

	<div class="clear"></div>

   </div>
<div id="super">
		<div id="header">

				<h1><a href="<?php echo get_settings('home'); ?>/"><img src="http://blog.negonation.com/en/wp-content/themes/minid/images/n
egonation_logo.png" alt="negonation blog" title="<?php bloginfo('name'); ?>" /></a></h1>



<?php
        iinclude_page(289);
?>

		</div>

		<hr />
