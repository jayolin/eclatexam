<?php
	
			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="examination";
			
			mysql_connect("$host", "$fusername", "$fpassword") or die();
			mysql_select_db("$db_name") or die();
	
	session_start();
	if(isset($_SESSION['start'])){
		unset($_SESSION['start']);
	}
	
			
			
	
	$result = 0;
	
	//foreach($POST['boss'] as $answer){
	//	if($)
	//}
	
	
	
		
	
	if(!empty($_POST['boss'][1])){
		;		
		if($_POST['boss'][1] == 'God'){
			$result++;
		}
		}
		
	if(!empty($_POST['boss'][2])){
		;		
		if($_POST['boss'][2] == 'Judas'){
			$result++;
		}
		}	
	
	
	if(!empty($_POST['boss'][3])){
		;		
		if($_POST['boss'][3] == 'Stone'){
			$result++;
		}
		}
	
	
	if(!empty($_POST['boss'][4])){
		;		
		if($_POST['boss'][4] == '12'){
			$result++;
		}
		}
	
	
	if(!empty($_POST['boss'][5])){
		;		
		if($_POST['boss'][5] == 'Acts'){
			$result++;
		}
		}
	
	
	if(!empty($_POST['boss'][6])){
		;		
		if($_POST['boss'][6] == 'God the Father, son and Holy Spirit'){
			$result++;
		}
		}
	
	
	
	if(!empty($_POST['boss'][7])){
		;		
		if($_POST['boss'][7] == 'Joseph'){
			$result++;
		}
		}
	
	if(!empty($_POST['boss'][8])){
		;		
		if($_POST['boss'][8] == 'Mary'){
			$result++;
		}
		}
	
	
	if(!empty($_POST['boss'][9])){
		;		
		if($_POST['boss'][9] == 'Jesus wept'){
			$result++;
		}
		}
	
	
	if(!empty($_POST['boss'][10])){
		;		
		if($_POST['boss'][10] == 'John'){
			$result++;
		}
		}
	
	
	
	
	$result =  $result/10 *100;
	
?>
<html>
	<head>
		<head>
		<link rel="stylesheet" href="exam.css">
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body>
		<header>
			SCRIPTURE UNION NIGERIA IDR1<br/>
			<em>2015/2016 Eclat Exam</em>
		</header>
		<div class="container">
		Your Score is:
		<?php echo '<div class="result">'.$result.'%</div>';?>
		
		</div>
		<a class = "close" href="register.php">Click to Close and Leave the Hall</a>
		<?php
		$regnumber = $_SESSION['reg'];
		$fullname = $_SESSION['fullname'];
		
		$sql="INSERT INTO `users` VALUES ('','$regnumber','$fullname', '$result') ";
		$sql_run = mysql_query($sql);
		
		
		?>
		
	</body>
	</head>
</html>