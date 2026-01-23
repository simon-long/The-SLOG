<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Primary - Index',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Primary - Post',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Secondary - Shared',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
	add_theme_support('post-thumbnails', array(
	'post',
	'page',
	'custom-post-type-name',
	));
} 




?>
