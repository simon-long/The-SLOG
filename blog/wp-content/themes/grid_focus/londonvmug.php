<?php
/*
Template Name: Londonvmug
*/
?>

<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>

<div id="filler" class="fix">
	<div id="mainColumn" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post">
			<div class="postMeta">
				<p class="container">
					<span class="date">&nbsp;<?php edit_post_link(' (Edit)', '', ''); ?></span>
				</p>
			</div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div>
			<div class="social">
				<div class="feedcountdiv">
					<span class="feedcount"><?php include("feedcount.php"); ?></span>
					<div class="feedcountimg">
						<a href="feed:http://feeds2.feedburner.com/Simonlong/blog" title="Subscribe to The SLOG's RSS Feed" target="_blank"><img src="http://farm5.static.flickr.com/4004/4343679290_884d49f4b8_o.jpg"></a>
					</div>
				</div>
				<?php if (function_exists('tweetmeme')) echo tweetmeme();?><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/second.column.index.php'); ?>

</div>
<?php get_footer(); ?>