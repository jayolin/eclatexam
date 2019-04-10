
<?php

			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			mysql_connect("$host", "$fusername", "$fpassword") or die();
			mysql_select_db("$db_name") or die();
	
	session_start();
	$session = $_SESSION['name'];
	if(isset($GLOBALS['HTTP_RAW_POST_DATA'])){
		
		$rawImage = $GLOBALS['HTTP_RAW_POST_DATA'];
		$removeHeaders = substr($rawImage, strpos($rawImage,",") + 1);
		$decode = base64_decode($removeHeaders);
		$fopen = fopen('snapshots/'.$session.'.png', 'wb');
		fwrite($fopen, $decode);
		fclose($fopen);
		
	}
	
?>