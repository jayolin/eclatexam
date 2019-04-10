<?php
		
	$session = preg_replace('/\s+/', '', $_POST['fullName']);
		session_start();
		$_SESSION['name'] = $session;

		$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			mysql_connect("$host", "$fusername", "$fpassword") or die();
			mysql_select_db("$db_name") or die();

	

			
	
	
			
	if(isset($_POST['fullName']) and isset($_POST['school']) and isset($_POST['class'])){
		
		$session = preg_replace('/\s+/', '', $_POST['fullName']);
		session_start();
		$_SESSION['name'] = $session;
		
		$fullName = $_POST['fullName'];
		$session = preg_replace('/\s+/', '', $fullName);
		
		$school = $_POST['school'];
		$class = $_POST['class'];
		$regNo = rand(10000, 20000). chr(64+rand(0,26)). chr(64+rand(0,26));
		
		
		
		$regNo = rand(10000, 20000). chr(64+rand(0,26)). chr(64+rand(0,26));
		
		echo $regNo;
		
		$sql = "INSERT INTO `users` VALUES ('','$fullName', '$regNo')";
		$sql_run = mysql_query($sql);
		
		
	}

?>