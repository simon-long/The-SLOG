<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<div class="navStripWrapper">
	
	<ul class="nav fix">
		<li><a href="http://www.simonlong.co.uk/blog/" title="Return to the the frontpage">Home<br /><span>Return home</span></a></li>
		<li><a href="http://www.simonlong.co.uk/blog/about" title="About Simon Long">About<br /><span>Simon Long</span></a></li>
		<li><a href="http://www.simonlong.co.uk/blog/horizon-view-api/" title="Horizon View API">Horizon View API<span></span></a></li>
		<li><a href="http://www.simonlong.co.uk/blog/vcp6-5-dcv-practice-exams" title="VCP6.5 DCV Practice Exams">VCP6.5 DCV<br /><span>Exams</span></a></li>
		<li><a href="https://www.simonlong.co.uk/blog/public-cloud-hosted-vmware-cloud-foundation-services/" title="Comparison: Pubic Cloud-Hosted – VMware Cloud Foundation Services">CLOUD<br /><span>vmware solutions</span></a></li>
		
		<li><a href="http://www.simonlong.co.uk/blog/category/vcdxpodcast/" title="The VCDX Podcast">Podcast<br /><span>The VCDX</span></a></li>

		<li><a href="https://www.twitter.com/simonlong_" target="_blank" title="Contact Simon Long">Contact<br /><span>Simon Long</span></a></li>
		<li id="searchBar1" class="searchField">
			<div>
				
<form action="http://www.simonlong.co.uk/blog/search" id="cse-search-box">
  <div class="google">
    <input type="hidden" name="cx" value="000981533065326099150:vmqd-ofyxrg" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    

  </div>
</form>


<script async src="https://cse.google.com/cse.js?cx=52d63febca13e4585"></script>
<div class="google"></div>

			</div>
		</li>
		</ul>

	<div class="bleetwrap">
		<div class="bleettitle">
			<strong>Latest vBeers:&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php require_once (ABSPATH . WPINC . '/rss.php');$rss = @fetch_rss('http://feeds.feedburner.com/vBeers');if ( isset($rss->items) && 0 != count($rss->items) ) {?>
																  																  <?php $rss->items = array_slice($rss->items, 0, 1);foreach ($rss->items as $item ) {?>
																  
																  <a href='<?php echo wp_filter_kses($item['link']); ?>' target='_new'onClick='javascript: pageTracker._trackPageview('/outgoing/vbeers;')'>
																  <?php echo wp_specialchars($item['title']); ?>
																  </a>
																  
																  <?php } ?>
																  
																  <?php } ?>
		</div>
			<div class="bleetsall"><a href="http://vbeers.org" target="_new" onClick="javascript: pageTracker._trackPageview('/outgoing/allvbeers;')">View all vBeer events</a>
		</div>
	</div>
	</div>