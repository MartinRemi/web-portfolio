<?php
	if(get_exists('lang')) {
		// TODO: check 'GET' parameter
		$LANG = $_GET['lang'];
	} else {
		$LANG = "en";
	}
?>