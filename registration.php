<?php
		$host="localhost";
		$fusername="root";
		$fpassword="";





mysql_connect("$host", "$fusername", "$fpassword") or die();


	$db = "CREATE DATABASE IF NOT EXISTS registration";
	$db_run = mysql_query($db);
	
	
	$sql = "CREATE TABLE IF NOT EXISTS `registration`.`users` (
`id` INT( 100 ) NOT NULL AUTO_INCREMENT ,
`name` VARCHAR( 200 ) NOT NULL ,
`regnumber` VARCHAR( 100 ) NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = INNODB;";

        $sql_run= mysql_query($sql);

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
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="exam.css">
		<script>
			function savefile(){
	canvas = document.getElementById('canvas');
	var DataUrl = canvas.toDataURL('image/png');
	var postData = "canvasData=" + DataUrl;
	var ajax = new XMLHttpRequest();
	ajax.open("POST","saveImage.php", true);
	ajax.setRequestHeader('Content-Type', 'canvas/upload');
	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4){
			alert("Image Captured");
		}
	}
	ajax.send(postData);
}
		</script>
	</head>
	<body>
		<div class = "webcam">
			<video id = "video" height="300" width ="400" alt = ""></video>
			<a href="#" id ="capture" class="webcam-snap">Take Photo</a>
			
			<a href="#" id ="download" class="download">Download</a>
			
			
		</div>
		
		<div class="regForm" >
			<canvas id="canvas" height="300" width="400"></canvas>
				<script src="webcam.js"></script>
				
			<form class="babasky" method="POST" action="registration.php">
				
			Register for Exam<br/>
			
				
				
				<input class="text"  type="text" name="fullName" placeholder="  Full name"/><br/>
				
				<em> *Enter Surname first</em></br>
				<input class="text"  type="text" name="school" placeholder="  School"/><br/>
				<input class="text"  type="text" name="class" placeholder="  Class"/><br/>
				<input type="submit" value="Register" class="webcam-snap"/>
				</form>
				
				</div>
		</div>
		<a  href="#" class="webcam-snap"  onClick="savefile();">Proceed to View Slip</a>
	</body>
	
</html>