<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function subtheme_preprocess_page(&$vars){
	//dpm($vars,'vars1');
	if($vars['is_front']){
		drupal_add_js('sites/all/themes/subtheme/slick-1.6.0/slick/slick.js');
		drupal_add_css('sites/all/themes/subtheme/slick-1.6.0/slick/slick.css');
		drupal_add_css('sites/all/themes/subtheme/slick-1.6.0/slick/slick-theme.css');
		
	}
	//dpm($vars,'vars2');

	$start_year = "2015";
	$actual_year = date('Y');

	if($start_year == $actual_year){
		$copyright = $start_year;
	}else{
		$copyright = $start_year."-".$actual_year;
	}

	$vars['copyright_year'] = $copyright;
}