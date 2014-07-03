<?php
	function statusCheck($ip, $port) {
		$checkSock = @fsockopen($ip, $port, $empty, $empty, 3);
		if($checkSock !== FALSE) {
			echo '<font color="green"><b>ONLINE</b></font>';
		} else {
			echo '<font color="red"><b>OFFLINE</b></font>';
		}
	}
	function uptimeCheck($path) {
		$data = file_get_contents($path, 0);
		$trim = substr($data, 11);
		$format = substr($trim, 0, strpos($trim, '","m'));
		echo $format;
	}
?>