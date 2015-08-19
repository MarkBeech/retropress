<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
function alpha_and_omega() {
 global $wpdb;
 $dates_dates = $wpdb->get_results("
 SELECT
 YEAR(min(post_date_gmt)) AS alpha,
 YEAR(max(post_date_gmt)) AS omega
 FROM
 $wpdb->posts
 WHERE
 post_status = 'publish'
 ");
 $output = '';
 if($dates_dates) {
 $dates = $dates_dates[0]->alpha;
 if($dates_dates[0]->alpha != $dates_dates[0]->omega) {
 $dates .= '-' . $dates_dates[0]->omega;
 }
 $output = $dates;
 }
 return $output;
 }
 ?>
