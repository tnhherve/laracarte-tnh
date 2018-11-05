<?php

if (! function_exists('page_title')) {
	
	function page_title($title){
		$var = "Laracarte - List of Artisans";
		if ($title==='') {
			return $var;
		}else{
			return $title.' | '.$var;
		}
	}
}

if (! function_exists('set_active_route')) {
	
	function set_active_route($route){
		return Route::is($route)? 'active':'';
	}
}

?>