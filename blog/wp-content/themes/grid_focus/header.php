<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Posts tagged &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://www.simonlong.co.uk/blog/wp-content/themes/grid_focus/style.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="Subscribe to The SLOG" href="http://feeds2.feedburner.com/Simonlong/blog" />


	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
 	{lang: 'en-GB'}
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26882223-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-54150-8");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</head>
<body>
<!-- BuySellAds Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds Ad Code -->
<div id="wrapper">
	
	<div id="masthead" class="fix">

		
		<?php include (TEMPLATEPATH . '/forth.column.shared.php'); ?>	
	</div>
	
	<?php include (TEMPLATEPATH . '/navigation.strip.php'); ?>