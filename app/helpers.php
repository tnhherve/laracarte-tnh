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

?>