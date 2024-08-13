<?php 
require('header.php'); 
if(!isset($_SESSION['username']) && !$_SESSION['admin']) {	
	header('location:login.php');	
}
?>
	<main>
			
		<!-- Slider -->
		<div class="slider">
			<div class="slide">
				<img src="images/slide1.jpg" alt="Slide 1">
			</div>
			<div class="slide">
				<img src="images/slide2.jpg" alt="Slide 2">
			</div>
			<div class="slide">
				<img src="images/slide3.jpg" alt="Slide 3">
			</div>
			<a class="prev" href="#">&#10094;</a>
			<a class="next" href="#">&#10095;</a>
		</div>

		<div class="container-fluid">
			<img src="images/taxi.jpg">
			
		</div>
		<div style="margin-bottom:50px;">
			<h1 style="font-size:2vw;color:#292929;margin:3% 0 0 28%;">&lt;</h1>
			<hr align="left" width="9%" color="#dddddd" style="margin:-1.3% 0 0 30%;">
			<h1 style="font-size:30px;color:#292929;text-align:center;margin: -1.3% 0 0 0;">OUR FLEET</h1>
			<hr align="left" width="9%" color="#dddddd" style="margin:-2.0% 0 0 60%;">
			<h1 style="font-size:2vw;color:#292929;margin:-0.9% 0 0 71%">&gt;</h1>
		</div>
		<div class="fleet">		
			<div class="box1">
				<h2>Cars</h2>            
			</div>
			<div class="box2">
				<h2>Bike</h2>            
			</div>
		</div>	
		<div class="char-dham">	
			<img src="images/char-dham-banner.jpg">        
		</div>
		<div class="pricing" >		
			<label>
				<h2>WHAT ABOUT PRICING?</h2>    
			</label>		
			
			 <label>
				<p>  DONT WORRY. WE PROVIDE VERY NICE DEALS AND THE MOST COMPETATIVE PRICE JUST FOR YOU!</p>    
			</label>
		</div>
		<div class="our-services" >		
			
			   <hr align="left" width="8.5%" color="#dddddd" style="margin:2% 0 0 29%;position:relative;">
			   <h1 style="font-size:1.7vw;color:white;text-align:center;margin:-1.4% 0 0 0;">OUR SERVICES</h1>
			   <hr align="left" width="8.5%" size="2%" color="#dddddd" style="margin:-1.4% 0 0 62.3%;">	
			   
				<p style="margin:50px"> "TO TRAVEL IS TO TAKE A JOURNEY INTO YOURSELF AND BE A 'STORY TELLER' FOR GENERATIONS</p>  
			  
			   </div>
			
			   
			
		</div>
		<div class="rental-services">
			<div class="rental-sub">
				<img src="images/carp.png">
				<h2>CAR RENTAL SERVICE</h2>
				<p>Rental Car & Bikes OFFERS TO MAKE IT EASY FOR CLIENTS TO GET THE RIGHT CAR AT THE RIGHT PRICE AT THE RIGHT TIME. IF YOU ARE LOOKING FOR CAR RENTAL SERVICE IN DELHI/INDIA OR MINIBUSSES HIRE SERVICES, THEN OUR COMPANY IS THE RIGHT OPTION FOR YOU. GET THE BEST DEAL ON BOOKING OF LUXURY CAR AND COACHES IN DELHI.</p>
				<button class="button-27" onclick="window.location.href='rental.php'" role="button">Read More</button>
			</div>
			<div class="rental-sub">
				<img src="images/busi.png">
				<h2>CORPORATE CAR RENTAL</h2>
				<p>OUR PLANNING, COMMUNICATION AND TRACKING SUPPORT, MAKE US ACCESSIBLE TO YOU WHENEVER AND WHEREVER YOU REQUIRE. OUR PROPRIETARY PLANNING METHODOLOGY AND OUR CUSTOM-DESIGNED AND ENGINEERED FLEET MANAGEMENT SYSTEM GIVES US A COMPETITIVE EDGE IN THE INDUSTRY.</p>
				<button class="button-27" onclick="window.location.href='corporate.php'" role="button">Read More</button>
			</div>
			<div class="rental-sub">
				<img src="images/marriage.png">
				<h2>WEDDING CAR RENTAL</h2>
				<p>Rental Car & Bikes IS EMERGING CAR RENTAL COMPANY IN DELHI/INDIA . WE HAVE BEEN KNOWN IN INDUSTRY FOR OUR 100% CUSTOMER SATISFACTION. WE THINK FOR A SPECIAL OCCASION WE NEED THE RIGHT CAR AT RIGHT PRICES, Rental Car & Bikes PROVIDES THE BEST CAR ACCORDINGLY THE CUSTOMER REQUIREMENT.</p>
				<button class="button-27" onclick="window.location.href='wedding.php'" role="button">Read More</button>
			</div>
		</div>
		<div class="rental-services">
			<div class="rental-sub">
				<img src="images/one.png">
				<h2>EVENT TRANSPORTATION</h2>
				<p>WHILE CUSTOMER IS TRAVELING WITH US WE CARE THE ALL NEEDS OF OUR CLIENTS. WE OFFER WELL-MAINTAINED CARS WITH PROFESSIONALLY TRAINED CHAUFFEURS TO CORPORATE AT SUITABLE RATES ON PREMIUM AND LUXURY CAR RENTAL CHOICES. ONLINE BOOKING AND BOOK-KEEPING FOR BETTER MANAGEMENT.</p>
				<button class="button-27" onclick="window.location.href='corporate.php'" role="button">Read More</button>
			</div>
			<div class="rental-sub">
				<img src="images/event.png">
				<h2>SELFDRIVE CAR RENTAL</h2>
				<p>Rental Car & Bikes IS A VERY CUSTOMER FRIENDLY COMPANY WHERE CUSTOMER SERVICE AND SATISFACTION COME FIRST. Rental Car & Bikes PROVIDES SELF-DRIVEN CARS TO CUSTOMERS AT VERY CONVENIENT PRICES AND GIVES ABSOLUTELY NEW AND YOUNG WELL-MAINTAINED FLEET FOR HASSLE-FREE AND MEMORABLE DRIVING EXPERIENCE.</p>
				<button class="button-27" onclick="window.location.href='self.php'" role="button">Read More</button>
			</div>
			<div class="rental-sub">
				<img src="images/self.png">
				<h2>ONE WAY DROP SERVICE</h2>
				<p>Rental Car & Bikes IS PROVIDING ONE WAY DROP SERVICES FROM DELHI / NCR. WE OFFER TO MAKE IT EASY FOR CLIENTS TO GET THE RIGHT CAR AT THE RIGHT PRICE AT THE RIGHT TIME. IF YOU ARE LOOKING FOR CAR RENTAL SERVICE IN DELHI/INDIA, WE ARE THE RIGHT CHOICE FOR YOU.</p>
				<button class="button-27" onclick="window.location.href='oneway.php'" role="button">Read More</button>
			</div>
			
		</div>	
		<div class="promise" >        
			<h1>WE PROMISE, YOU WILL HAVE THE BEST EXPERIENCE</h1>	    
			<div style="height:50px"></div>        
			<p>QUALITY IS NEVER AN ACCIDENT, IT IS ALWAYS THE RESULT OF HIGH INTENTION, SINCERE EFFORT, INTELLIGENT DIRECTION, AND SKILLFUL EXECUTION.</p>    		
		</div>
	</main>
	
	<?php require('footer.php'); ?>	

