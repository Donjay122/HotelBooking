<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/dejicv.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<meta name="author" content="Adediran Ayodeji">
		<meta name="description" content="Ayodeji's Online CV">
		<meta name="keywords" content="Ayodeji Adediran , Online CV , Codespace challenge ">
		<title>Hotel Reservation</title>

	</head>
		<body>
			<div class="wrapper">
			
	
          <div class="main-container">		
			  
			  
			<div class="container" id="first-container">
					<header>
						<div class="main-header">
							<img src="image/codespace.svg" width="150px"><br>
							<h1>Travel Booking</h1>
							<a href="index.php?app=booknow"><p class="button"><i class="far fa-list-alt"></i>&nbsp;Book now</p></a>&nbsp;&nbsp;&nbsp;
							<a href="index.php?app=faq"><p class="button"><i class="far fa-question-circle"></i>&nbsp;FAQ</p></a>
						</div>
					</header>
			</div><!--container-->
		

		
			<div class="container" id="second-container">
					<header>
						<div class="main-form">
                       

                      
                      <?php

                       require_once("form.php");
                       




                      ?>














							
						</div>
					</header>
			</div><!--container-->
			  
			  
		</div><!--main-container-->
				
		</div><!--wrapper-->	
			
			
	        <footer>
				<div class="footer">
					<p class="copyright">&copy; Ayodeji Adediran Codespace</p>
				</div>
			</footer>
			
			
			<script src="js/dejicv.js"></script>
		</body>
</html>