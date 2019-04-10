<?php
	include 'questions.php';
?>

<html>

	<head>
	
	
		<link rel="stylesheet" href="trial_CBT.css">
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
	<body>
		<header>
		</span>	SCRIPTURE UNION NIGERIA IDR1<br/>
			<em>2015/2016 Eclat Exam</em>
		</header>
		<aside>
		
		
		
		</aside>
		<div id = "right">
			<div  id="watch"></div>
			<div id= "warning"></div>
		</div>
		
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
					echo '<div class="questions'.$q.'"><span id="numbers">'.$q.'  </span>'.$questions[$q].'</div>';
				}
			?>
			
		</div>
		<div class="options">
			<?php
				for($x=1; $x<=$questionsTotal; $x++){
					for($o=1; $o<=4; $o++){
					echo '<div class="options'.$x.'" ><span><input onclick = "javascript: colourChange('.$x.')" type="radio" name="boss['.$x.']" value= "'.$options[$x][$o].'"/></span>'.$options[$x][$o].'</div>';
					
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