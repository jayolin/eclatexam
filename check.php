<?php
			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			session_start();
			$_SESSION['start'];



mysql_connect("$host", "$fusername", "$fpassword") or die();
mysql_select_db("$db_name") or die();
	
	
	if(isset($_POST['regnumber']) and isset($_POST['fullname'])){
			session_start();
			$_SESSION['start'] ="lucky";
			$_SESSION['reg'] =$_POST['regnumber'];
			$_SESSION['fullname'] =$_POST['fullname'];
		if(!empty($_POST['regnumber']) and !empty($_POST['fullname'])){
			
			$regnumber = $_POST['regnumber'];
			$fullname = $_POST['fullname'];
			$get_reg_no = "SELECT `regnumber` FROM `users` WHERE `regnumber` = '$regnumber'";
			$reg_no = mysql_query($get_reg_no);
			$count = mysql_num_rows($reg_no);
			if( $count== 1){
				
				header("location:suid1eclat_exam.php");
				
			}
			else{
				session_start();
			$_SESSION['unregistered']= "<em>You are not registered</em>";
			header("location:register.php");
			
			}
			
		}
		else{
			session_start();
			$_SESSION['empty']= "<em>You are required to fill the form</em>";
			
			header("location:register.php");
			
			
		}
	}

	
	
	
?>