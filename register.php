<?php
		
		session_start();
	
	$host="localhost";
$fusername="root";
$fpassword="";





mysql_connect("$host", "$fusername", "$fpassword") or die();
//mysql_select_db("$db_name") or die();


$database = "CREATE DATABASE IF NOT EXISTS Examination";
$retval = mysql_query($database);

$table = "CREATE TABLE IF NOT EXISTS `Examination`.`users` (
`id` INT( 20 ) NOT NULL AUTO_INCREMENT,
`regnumber` VARCHAR( 20 ) NOT NULL ,
`fullname` VARCHAR( 100 ) NOT NULL ,
`score` INT( 20 ) NOT NULL,
PRIMARY KEY(`id`)
) ENGINE = INNODB;";

$table_run = mysql_query($table);
	
?>


<html>
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
		
		<div class="instructions">
			<h4>
				You are required to adhere to the following instructions strictly:
			</h4>
			<ol>
				<li><strong>DO NOT REFRESH OR RELOAD THE EXAM PAGE!<br/></strong>Once the page is refreshed/reloaded, your progress is lost and you will automatically be logged out.<br>Consequently, you will not be able to log back in.</li>
				<li>
					All candidates should have, prior to this exam, registered. Only Registered candidates are eligible for this exam. 
				</li>
				<li>
					Fill in your Fullname(<strong>surname first</strong>) and Registration number(given to you during registration) in the log in form provided below.
				</li>
				<li>
					Click the "Start Exam" button once you are done.<br/>
					Note that once the button is clicked, your exam starts automatically and your time starts counting down.
				</li>
				<li>
					Once you are done with the exams, click the "Submit/End Exam" button to submit. Any candidate that fails to submit will not have any result.
				</li>
				<li>
					Your score will appear once your time is up.<br/><br/><br/>Goodluck!
				</li>
			</ol>
		</div>
		<form class="reg_form" method="POST" action="suid1eclat_exam.php">
			Login to Start Exam<br/>
			
				
				
				<input class="text"  type="text" name="fullname" placeholder="  Full name"/><br/>
				
				<em> *Enter Surname first</em></br>
				<input class="text"  type="text" name="regnumber" placeholder="  Registration Number"/><br/>
				
				<?php
					if(isset($_SESSION['empty'])){
						echo $_SESSION['empty'];
						unset($_SESSION['empty']);
					}
					if(isset($_SESSION['unregistered'])){
						echo $_SESSION['unregistered'];
						unset($_SESSION['unregistered']);
					}
				?>
				
				<br/>
				<input class="submit" type="submit" value="Start Exam"/>
			
		</form>
		</body>
</html>