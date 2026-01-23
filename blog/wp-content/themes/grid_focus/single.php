<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
<div id="filler" class="fix">
	<div id="mainColumnwide" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post">
			<div class="postMeta fix">
				<p class="container">
					<span class="date">Posted by <?php the_author_posts_link(); ?> <?php the_time('M j, Y') ?><?php edit_post_link(' (Edit)', '', ''); ?></span>
				</p>
			</div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			
			
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			</div>
			<div class="social">
				<div class="feedcountdiv">
					If you found this post useful make sure you subscribe to my RSS Feed:&nbsp;&nbsp;<a href="feed:http://feeds2.feedburner.com/Simonlong/blog" title="Subscribe to The SLOG's RSS Feed" target="_blank"><img src="http://farm4.staticflickr.com/3408/3417201231_b5d8883036_o.jpg" width="16" height="16" alt="Subscribe to The SLOG's RSS Feed"></a>    
					<div class="feedcountimg">
						
					</div>
				</div>
				<?php if (function_exists('tweetmeme')) echo tweetmeme();?><?php if (function_exists('sharethis_button')) { sharethis_button(); } ?>
				
			</div>
		</div>
		<div id="commentsContainer">
			<?php comments_template(); ?>
		</div>
		<?php endwhile; else: ?>
		<div class="post">
			<h2>No matching results</h2>
			<div class="entry">
				<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</div>
		</div>
		<?php endif; ?>
	</div>

		<?php include (TEMPLATEPATH . '/second.column.index.php'); ?>

</div>
<?php get_footer(); ?>