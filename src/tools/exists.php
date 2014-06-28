<?php
	function get_exists($variable) {
		if(isset($_GET[$variable]) && !empty($_GET[$variable])) {
			return true;
		} else {
			return false;
		}
	}
?>