<?php 

if(! function_exists('page_title')) {
	function page_title($title) {
		$base_title = 'Nunyalab';

		if($title === '') {
			return $base_title;
		} else {
			return $base_title.'-'.$title;
		}
	}
}
