<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
session_start();
 ?>
<html>
<head>
<title>Random Hotel name</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Riviera Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>

</head>
<body>
  <?php
 if (isset($_GET["login"]) && $_GET["login"]==0) {
   echo "<script type='text/javascript'>alert(\"Your ID or password is wrong.\");</script>";
 }
 ?>
<!-- header -->
<?php
print (isset($_SESSION["loged"]));
if (isset($_SESSION["loged"])) {
  # code...
  echo "<div class=\"banner\">
		<div class=\"container\" >
				<div class=\"head-nav navbar-fixed-top\" style=\"background-color: #d9d9d9;\">
						<span class=\"menu\"> </span>
							<ul class=\"cl-effect-7\" >
								<li><a href=\"#ourresort\" class=\"scroll\">Resort</a></li>
								<li><a href=\"#suites\" class=\"scroll\">suites</a></li>
								<li><a href=\"#services\" class=\"scroll\">services</a></li>
								<li><a href=\"#reservations\" class=\"scroll\">reservations</a></li>
								<li><a href=\"#contact\" class=\"scroll\">contact</a></li>
                <form  action=\"session_close.php\" method=\"post\">
                <a href=\"session_close.php\"></a><input type=\"submit\" name=\"logout\" value=\"Logout\">
                </form>
								<div class=\"clearfix\"> </div>
							</ul>
				</div>
					<!-- script-for-nav -->
					<script>
						$( \"span.menu\" ).click(function() {
						  $( \".head-nav ul\" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				
				<div class=\"banner-info\">
					<p>Enjoy the stupendous calm and peace of this tree-shaded location cradled by mountains where time stands still.choose ease, harmony and wellbeing over the hectic pace of today's lifestyle!</p>
				</div>
		</div>
	</div>";

}else {
  # code...
  echo ";<div class=\"banner\">
		<div class=\"container\" >
				<div class=\"head-nav navbar-fixed-top\" style=\"background-color: #d9d9d9;\">
						<span class=\"menu\"> </span>
							<ul class=\"cl-effect-7\" >
								<li><a href=\"#ourresort\" class=\"scroll>Resort</a></li>
								<li><a href=\"#suites\" class=\"scroll\">suites</a></li>
								<li><a href=\"#services\" class=\"scroll\">services</a></li>
								<li><a href=\"#reservations\" class=\"scroll\">reservations</a></li>
								<li><a href=\"#contact\" class=\"scroll\">contact</a></li>
                <li><form  onsubmit=\"return validateForm()\" action=\"sessions_users_query.php\" name=\"loginform\" method=\"POST\">
                  <table >
                    <tr>
                      <td>user ID:</td><td><input class=\"login\" type=\"text\" name=\"userid\"></td>
                    </tr>
                    <tr>
                      <td>Password: </td> <td><input class=\"login\" type=\"password\" name=\"password\"></td>
                    </tr>
                  </table>
                  <input type=\"submit\" name=\"login\"  value=\"Login\">
                </form></li>
                <h2>Modal Example</h2>
                <!-- Trigger the modal with a button -->
                <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>

                <!-- Modal -->
                <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                  <div class=\"modal-dialog\">

                    <!-- Modal content-->
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Modal Header</h4>
                      </div>
                      <div class=\"modal-body\">
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                        <p>Some text in the modal.</p>
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                      </div>
                    </div>

                  </div>

                </div>
									<div class=\"clearfix\"> </div>



							</ul>
				</div>
					<!-- script-for-nav -->
					<script>
						$( \"span.menu\" ).click(function() {
						  $( \".head-nav ul\" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				<div class=\"logo\">
					<a href=\"index.html\"><img src=\"images/logo.png\" class=\"img-responsive\" alt=\"\" /></a>
				</div>
				<div class=\"banner-info\">
					<p>Enjoy the stupendous calm and peace of this tree-shaded location cradled by mountains where time stands still.choose ease, harmony and wellbeing over the hectic pace of today's lifestyle!</p>
				</div>
		</div>
	</div>";
}




?>

<!-- ENCHANTMENT  -->
	<div class="ENCHANTMENT" id="ourresort">
			<div class="col-md-6 ENCHANTMENT-left">
				<img src="images/5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 ENCHANTMENT-right">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="slider-info">
										<img src="images/room1.jpg" class="img-responsive" alt="">

								</li>
								<li>
									<div class="slider-info">
										<img src="images/room2.jpg" class="img-responsive" alt="">
									</div>
								</li>
								<li>
									<div class="slider-info">
										<img src="images/room3.jpg" class="img-responsive" alt="">
									</div>
								</li>
							</ul>
						</div>
					</section>
						<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
	<!-- slider -->
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- ENCHANTMENT  -->
<!-- wonder -->
	<div class="wonder" id="">
		<div class="col-md-2 wonder-left">
			<img src="images/2.jpg" class="img-responsive" alt="">
		</div>
		<div class="col-md-4 wonder-mid">
			<img src="images/logo1.png" class="img-responsive" alt="">
			<h5>Rooms</h5>
      <?php
               include("test_conect_db.php");
               $link=conectDataBase();
               $result=mysqli_query($link, "select * from rooms;");
             ?>
             <table class="table">
               <thead>
               <tr>
                 <th>Room Number</th><th>Floor Number</th><th>Type of Room</th>
               </tr>
             </thead>
               <?php
                 while ($erregistroa=mysqli_fetch_array($result)) {
                   # code...
                   echo "<tbody><tr><td>".$erregistroa["roomNumber"]."</td><td>".$erregistroa["floorNumber"]."</td><td>".$erregistroa["type_of_room"]."</td></tr></tbody>";
                 }
                 echo "</table>";
                 mysqli_free_result($result);
                 mysqli_close($link);
                ?>
    </div>
		<div class="col-md-6 wonder-right">
			<img src="images/bed2.jpg" class="img-responsive" alt="">
		</div>
			<div class="clearfix"> </div>
	</div>
<!-- wonder -->
<!-- rooms -->
	<div class="rooms" id="suites">
		<div class="col-md-4 rooms-1">
			<div class="room-info">
				<img src="images/logo2.png" class="img-responsive" alt="">
			</div>
			<div class="room-info1">
					<ul>
						<li><a href="#"><i class="search"></i>explore</a></li>
						<li><a href="#"><i class="bro"></i>booking</a></li>
					</ul>
			</div>
		</div>
		<div class="col-md-4 rooms-2">
			<div class="room-info">
				<img src="images/logo3.png" class="img-responsive" alt="">
			</div>
			<div class="room-info1">
					<ul>
						<li><a href="#"><i class="search"></i>explore</a></li>
						<li><a href="#"><i class="bro"></i>booking</a></li>
					</ul>
			</div>
		</div>
		<div class="col-md-4 rooms-3">
			<div class="room-info">
				<img src="images/logo4.png" class="img-responsive" alt="">
			</div>
			<div class="room-info1">
					<ul>
						<li><a href="#"><i class="search"></i>explore</a></li>
						<li><a href="#"><i class="bro"></i>booking</a></li>
					</ul>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
<!-- rooms -->
<!-- services -->
	<div class="services" id="services">
		<div class="col-md-6 services-left">
			<img src="images/logo1.png" class="img-responsive" alt="">
			<h2>SERVICES</h2>
			<div class="col-md-3 services-left1">
				<h5>FAMILIES</h5>
					<ul>
						<li><a href="#">Facilities available for children</a></li>
						<li><a href="#">Children's bathrobes</a></li>
						<li><a href="#">Children's slippers</a></li>
						<li><a href="#">Sweets</a></li>
						<li><a href="#">Cartoon DVD</a></li>
						<li><a href="#">Babysitting</a></li>
						<li><a href="#">Highchairs </a></li>
					</ul>
			</div>
			<div class="col-md-3 services-left1">
				<h5>Disabled Access</h5>
				<p>Thanks to its refurbishment, completed in 2000, Resort offers the necessary facilities and equipment to welcome disabled clients in the best conditions. An adapted entrance, lifts and six rooms were especially designed for them.</p>
			</div>
			<div class="col-md-3 services-left1">
				<h5>Pet friendly hotel</h5>
				<p>Complimentary pet basket (for cats and dogs) available, Custom-designed bowl with the name of the pet can be easily arranged in advance,
Specific menus and food </p>
			</div>
			<div class="col-md-3 services-left1">
				<h5>Concierge</h5>
				<p>From a simple restaurant booking to the complete organisation of a personalised stay, our Concierge are available 24 hours a day to meet your requirements. Their secret address book makes the least of your desires </p>
			</div>
		</div>
		<div class="col-md-6 services-right">
			<img src="images/3.jpg" class="img-responsive" alt="">
		</div>
			<div class="clearfix"> </div>
	</div>
<!-- services -->
<!-- contact -->
	<div class="contact" id="reservations">
		<div class="col-md-4 contact-left">
			<div class="contact-left1">
				<img src="images/logo5.png" class="img-responsive" alt="">
				<h3>RESERVATION</h3>
			</div>
		</div>
		<div class="col-md-8 contact-right" id="contact">
			<div class="contact-details">
				<h3>CONTACT DETAILS</h3>
				<div class="text-field-name-1">
						<form>
							<input type="text" class="text" value=" Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Name*';}">
							<input type="text" class="text" value="Surname*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Surname*';}">
							<input type="text" class="text" value=" Country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Country';}">
							<input type="text" class="text" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}">
							<input type="text" class="text" value=" Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Phone';}">
						</form>
				</div>
			</div>
			<div class="reservation-details">
			<h3>RESERVATION DETAILS</h3>
				<div class="text-field-name-1">
						<form>
							<input type="text" class="text" value=" Arrival Date*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Arrival Date*';}">
							<input type="text" class="text" value="Departure Date*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Departure Date';}">
							<input type="text" class="text" value=" Rooms*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Rooms*';}">
						</form>
				</div>
				<div class="text-field-name-2">
						<form>
							<input type="text" class="text" value="Departure Date*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Departure Date';}">
							<input type="text" class="text" value=" Rooms*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Rooms*';}">
						</form>
						<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Privacy</label>
				</div>
			</div>
				<div class="clearfix"> </div>
				<div class="button">
						<form>
							<input type="submit" value="send message">
						</form>
					</div>
		</div>
			<div class="clearfix"> </div>
	</div>
<!-- contact -->
<!-- guests -->
	<div class="guests" >
		<div class="container">
			<img src="images/logo5.png" class="img-responsive" alt="">
			<h3>BE OUR GUESTS</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis convallis vel id </p>
		</div>
	</div>
<!-- guests -->
<!-- footer -->
	<div class="footer">
		<div class="col-md-6 footer-left">
		<img src="images/4.jpg" class="img-responsive" alt="">
			<div class="col-md-6 footer-left1">
				<img src="images/logo5.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 footer-left2">
				<ul>
					<li>rooms Resort</li>
					<li>matera (Italy)</li>
					<li>PO Box 68789</li>
					<li>Street 445 </p></li>
				</ul>
				<p>+911234567895</p>
				<h6><a href="#">info@rooms.com</h6></a>
			</div>
				<div class="clearfix"> </div>
					<div class="footer-left3">
						<ul>
							<li><a href="#"><i class="fb"></i></a></li>
							<li><a href="#"><i class="twt"></i></a></li>
							<li><a href="#"><i class="goop"></i></a></li>
							<li><a href="#"><i class="in"></i></a></li>
							<li><a href="#"><i class="do"></i></a></li>
							<li><a href="#"><i class="drib"></i></a></li>
							<li><a href="#"><i class="tet"></i></a></li>
								<div class="clearfix"> </div>
						</ul>
					</div>
		</div>
		<div class="col-md-6 footer-right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et varius turpis. Donec enim sapien, sollicitudin quis volutpat nec, sagittis eget ex. Pellentesque in accumsan orci.-<span>Ian Solo-</span></p>
			<div class="col-md-6 footer-right1">
				<img src="images/fo.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 footer-right2">
				<img src="images/un.png" class="img-responsive" alt="">
			</div>
				<div class="clearfix"> </div>
			<h6>Copyrights © 2015 Riviera All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></h6>
		</div>
			<div class="clearfix"> </div>
	</div>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- footer -->
</body>
</html>
