<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<div class="thirdColumn">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>
	<div id="elseWhere">
<!--			<h3>Follow me</h3>
		<a href="http://www.twitter.com/simonlong_"><img src="<?php bloginfo('template_directory'); ?>/images/twitter1.gif" border="0" alt="Follow Simon Long on Twitter" width="143" height="63"/></a></br>
		<a href="http://www.linkedin.com/in/longsimon"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.jpg" border="0" alt="Simon Long's LinkedIn Profile" width="143"/></a>
	<div class="middle_links"> -->
		<h3>Follow me</h3>
		<ul>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href="http://www.twitter.com/simonlong_" title="Follow Simon Long on Twitter" target=_new">Follow Simon Long on Twitter</a></li>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/linked-in.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href="http://www.linkedin.com/in/longsimon" title="Follow Simon Long on LinkedIn" target=_new">Follow Simon Long on LinkedIn</a></li>		
			</ul>
		
	</div>	
	<div class="middle_links">
		<h3>Subscribe</h3>
		<ul>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/feed__plus.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href="http://feeds2.feedburner.com/Simonlong/blog" title="Full content RSS feed" target=_new">Subscribe to main content</a></li>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/feed__plus.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Full comments RSS feed" target=_new">Subscribe to all comments</a></li>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/mails__plus.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href=http://feedburner.google.com/fb/a/mailverify?uri=Simonlong/blog&amp;loc=en_US" title="Full comments RSS feed" target=_new">Subscribe via email</a></li>
			<li><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" border="0" width="16" height="16" alt="Subscribe" style="padding-right:5px;"/><a href="http://twitter.com/statuses/user_timeline/18046941.rss" title="Subscribe to My Twitter Feed1" target=_new">Subscribe to my Twitter feed</a></li>			
			</ul>
	</div>
	<div class="middle_links">
		<h3>Advertisements</h3>

	</div>
	</div><!-- close #imgLinks -->
</div><!-- close #tertCol -->

</div>