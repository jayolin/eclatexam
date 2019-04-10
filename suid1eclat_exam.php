<?php
	
			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			$host="localhost";
			$fusername="root";
			$fpassword="";
			$db_name="registration";
			



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
			if( $count!= 1){
				
				header("location:suid1eclat_exam.php");
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
	
	$delete = "DELETE FROM `users` WHERE `regnumber` = '$regnumber'";
	$delete_query = mysql_query($delete);

	
	
	

	


				
				//session_start();
			if(!isset($_SESSION['start'])){
					header("location:register.php");
				}	
			
				
				
			

	
	
	$seconds = 0;	
	
	
	
?>

<html>

	<head>
	
	<script>
		
		var hours = 1;
		var minutes = 0;
		var seconds = <?php echo $seconds?>;
		function emmanuel(){
			var ugo = document.getElementById('watch');
			seconds--;
			if(seconds<0){
				seconds=59;
				minutes--;
			}
			
			if(minutes < 0){
				minutes = 0;
				hours--;
			}
			
			if(hours<=0){
				hours=0;
				
			}
			if(hours == 0 && minutes == 0 && seconds <10){
				var warning = document.getElementById('warning');
				warning.innerHTML = "You have only " +seconds+ " seconds to submit";
			}
			
			ugo.innerHTML = hours + ': ' + minutes + ':' + seconds;
			
			var timeout = setTimeout('emmanuel()', 1000);
			if(hours == 0 && minutes ==0 && seconds == 0){
				clearTimeout(timeout);
				window.location="check_answers.php";
			}
		}
	</script>
		<link rel="stylesheet" href="exam.css">
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body onload="emmanuel();">
		<header>
		</span>	SCRIPTURE UNION NIGERIA IDR1<br/>
			<em>2015/2016 Eclat Exam</em>
		</header>
		<aside>
		
		<?php
				
				
		if(isset($_SESSION['start'])){
					
					echo $_SESSION['fullname']."<br/>";
					echo $_SESSION['reg']."<br/>";
					$session = preg_replace('/\s+/', '', $fullname);
				echo '<img class="passport" src = "snapshots/'.$session.'.png" height="150" width="150"/>';	
				}
		?>
		
		</aside>
		<div id = "right">
			<div  id="watch"></div>
			<div id= "warning"></div>
		</div>
		<?php
			
			$questionsTotal= 10;
			
			$questions[1] = "who was the father of Jesus?";
			$questions[2] = "who betrayed Jesus?";
			$questions[3] = "What did David kill Goliath With?";
			$questions[4] = "How many sons did Jacob have?";
			$questions[5] = "After the book of John comes? ";
			$questions[6] = "What is the trinity?";
			$questions[7] = "Who was Jesus' earthly father?";
			$questions[8] = "who was Jesus earthly mother?";
			$questions[9] = "John 11 verse 35 says what?";
			$questions[10] = "Who was the forerunner of Jesus?";
			
			//answers
			$options[1][1]= "Jesse";
			$options[1][2 ]= "Jacob";
			$options[1][3 ]= "God";
			$options[1][4 ]= "Moses";
			$options[2][1 ]= "Cain";
			$options[2][2 ]= "Saul";
			$options[2][3 ]= "peter";
			$options[2][4 ]= "Judas";
			$options[3][1 ]= "Stone";
			$options[3][2 ]= "Gun";
			$options[3][3 ]= "Spear";
			$options[3][4 ]= "Bomb";
			$options[4][1 ]= "10";
			$options[4][2 ]= "11";
			$options[4][3 ]= "12";
			$options[4] [4]= "13";
			$options[5][1]= "James";
			$options[5][2 ]= "Acts";
			$options[5][3 ]= "Romans";
			$options[5][4 ]= "1 Corinthians";
			$options[6][1 ]= "God the Father, son and Holy Spirit";
			$options[6 ][2]= "God the Father, son and Moses";
			$options[6][3 ]= "God the Father, son and Abraham";
			$options[6][4 ]= "Saul, son and Abraham";
			$options[7][1 ]= "God";
			$options[7][2 ]= "Mary";
			$options[7][3 ]= "Moses";
			$options[7][4 ]= "Joseph";
			$options[8][1 ]= "Mary";
			$options[8][2 ]= "Martha";
			$options[8][3 ]= "Rebecca";
			$options[8][4 ]= "Angelina";
			$options[9][ 1]= "Jesus swept";
			$options[9][2 ]= "Jesus wept";
			$options[9][ 3]= "Jesus slept";
			$options[9][4 ]= "Jesus dreamt";
			$options[10][ 1]= "John";
			$options[10][2 ]= "Isaiah";
			$options[10][ 3]= "Abraham";
			$options[10][ 4]= "Jeremiah";
			
		?>
		<form class="form" action= "check_answers.php " method = "POST">
			
			<div class= "sections">
			<a href = "#" class="dailyPower" onclick="changequestion(1)">Daily Power</a>
			<a href = "#" class="bibleStudy" onclick="changequestion(3)">Bible Study</a>
			<a href = "#" class="su" onclick="changequestion(5)">S.U and You</a>
			<a href = "#" class="jhn" onclick="changequestion(7)">1 John 2</a>
			<a href = "#" class="searchMagazine" onclick="changequestion(9)">Search Magazine</a>
			</div>
		
			<div class="questions">
			<?php
				for($q=1; $q<=$questionsTotal; $q++){
					echo '<div class="questions'.$q.'"><span id="numbers" >'.$q.'</span>'.$questions[$q].'</div>';
				}
			?>
			
		</div>
		<div class="options">
			<?php
				for($x=1; $x<=$questionsTotal; $x++){
					for($o=1; $o<=4; $o++){
					echo '<div class="options'.$x.'"><span><input onclick = "javascript: colourChange('.$x.')" type="radio" name="boss['.$x.']" value= "'.$options[$x][$o].'"/></span>'.$options[$x][$o].'</div>';
					
					}
				}
			?>
			
		</div>
		<div class="galleryPreviewArrows">
				<a href="#" class="previousSlideArrow">Previous</a>
				<a href="#" class="nextSlideArrow">Next</a>
				
		</div>
		
		
		
		<div class="NavigationBullets">
			<?php
				for($b=1; $b<=$questionsTotal; $b++){
					echo '<a href="javascript: changequestion('.$b.')" class="questionBullet'.$b.'"><span>'.$b.'</span></a>';
				}
			?>
			
		</div>
		
		<input class="submit" type="submit" value="Submit/End Exam"/>
		</form>
		
		<script type="text/javascript">
		
	
	var questionsTotal= <?php echo $questionsTotal;?>;
	var currentImage=1;
	var thumbsTotalWidth = 0;
	$('a.dailyPower').addClass("active");
	$('a.questionBullet' + currentImage).addClass("active");
	
	//Next Arrow Code
		$('a.nextSlideArrow').click(function(){
		$('div.questions'+ currentImage).hide();
		$('div.options'+ currentImage).hide();
		$('a.questionBullet' + currentImage).removeClass("active");
		currentImage++;
		
		
		
		
		if(currentImage > questionsTotal){
			currentImage = 1;
		}
		
		
		
		if(currentImage <= 2){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.dailyPower').addClass("active");
		}
		else if(currentImage > 2 && currentImage <=4){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.bibleStudy').addClass("active");
		}
		else if(currentImage > 4 && currentImage <=6){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.su').addClass("active");
		}
		else if(currentImage > 6 && currentImage <=8){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.jhn').addClass("active");
		}
		else if(currentImage > 8 && currentImage <=10){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.searchMagazine').addClass("active");
		}
		
		
		
		
		$('div.questions'+ currentImage).show();
		$('div.options'+ currentImage).show();
		$('a.questionBullet' + currentImage).addClass("active");
		
		return false;
	});
	
	//previous Arrow Code
		$('a.previousSlideArrow').click(function(){
		$('div.questions'+ currentImage).hide();
		$('div.options'+ currentImage).hide();
		$('a.questionBullet' + currentImage).removeClass("active");
		currentImage--;
		if(currentImage < 1){
			currentImage = questionsTotal;
		}
		
		
		
		if(currentImage <= 2){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.dailyPower').addClass("active");
		}
		else if(currentImage > 2 && currentImage <=4){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.bibleStudy').addClass("active");
		}
		else if(currentImage > 4 && currentImage <=6){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.su').addClass("active");
		}
		else if(currentImage > 6 && currentImage <=8){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.jhn').addClass("active");
		}
		else if(currentImage > 8 && currentImage <=10){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.searchMagazine').addClass("active");
		}
		
		
		
		
		
		$('div.questions'+ currentImage).show();
		$('div.options'+ currentImage).show();
		$('a.questionBullet' + currentImage).addClass("active");
		return false;
	});
	
	//Bullets code
	function changequestion(imageNumber){
		$('div.questions' + currentImage).hide();
		$('div.options' + currentImage).hide();
		currentImage = imageNumber;
		
		if(currentImage <= 2){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.dailyPower').addClass("active");
		}
		else if(currentImage > 2 && currentImage <=4){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.bibleStudy').addClass("active");
		}
		else if(currentImage > 4 && currentImage <=6){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.su').addClass("active");
		}
		else if(currentImage > 6 && currentImage <=8){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.jhn').addClass("active");
		}
		else if(currentImage > 8 && currentImage <=10){
			$('a.dailyPower').removeClass("active");
			$('a.bibleStudy').removeClass("active");
			$('a.su').removeClass("active");
			$('a.jhn').removeClass("active");
			$('a.searchMagazine').removeClass("active");
			$('a.searchMagazine').addClass("active");
		}
		
		
		
		
		$('div.questions' + currentImage).show();
		$('div.options' + currentImage).show();
		
		$('.NavigationBullets a').removeClass("active");
		
		
	
		$('a.questionBullet' + imageNumber).addClass("active");
		
	}
	
	//colour of answered questions
		function colourChange(name){
			$('a.questionBullet' + name).addClass("answered");
		}
	

	
	
	</script>
	</body>
</html>