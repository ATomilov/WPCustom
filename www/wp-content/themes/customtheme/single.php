<?php
while (have_posts()) {
	the_post();
	$format = get_post_format();
	if ( false === $format )
		$format = 'standard';
	if($format=='standard'){
		get_template_part('content','single-post');
	}
}
?>