<?php
/*
Template Name: Cloud Comparison 
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
	<div id="cloudPageColumn" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post">
			<div class="postMeta">
				<p class="container">
				<div id="greet_block"></div>
					<span class="date">&nbsp;<?php edit_post_link(' (Edit)', '', ''); ?></span>
				</p>
			</div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div>
			<div class="social">
				<div class="feedcountdiv">
					
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
		<?php endif; ?>
	</div>

</div>
<?php get_footer(); ?>