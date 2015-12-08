<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
 
/** Loads the WordPress Environment and Template */
require( 'C:\wamp\www\nsg\source_codes\wp-includes\post.php' );

$contents = get_post();
print_r($contents);exit;
