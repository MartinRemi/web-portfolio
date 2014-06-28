<?php
	if(get_exists('page')){
		$page = $_GET['page'];

		if($page == "index") {
			$view = "index";
			$action = "NONE_ACTION";
		} else if($page == "contact") {
			$view = "contact";
			$action = "NONE_ACTION";
		}
	} else {
		$view = "index";
		$action = "NONE_ACTION";
	}
?>