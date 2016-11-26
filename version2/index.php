	<!DOCTYPE HTML>
<html>
	<head>
		<title>AcaD | Home</title>
<link rel="stylesheet" type="text/css" href="animate/animate.min.css">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/animations.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
			<script type="text/javascript" src="js/css3-animate-it.js"></script>
		    <script type="text/javascript" src="js/camera.min.js"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});



	      $(document).ready(function(){
	      $("#btn").click(function(){
	        $("#myModal").modal().addClass('animated flipInX');
	      });
	    });
		</script>
	</head>
	<body>
	<!----start-wrap----->
	<div class="wrap">
		<!----start-header----->
		<div class="header"  id="top">
			<!----top-header----->

				<!----start-logo----->

				<center>	<a href="index.php"><img src="images/logo3.png" title="logo" /></a>
				</center>

				<!----End-logo----->
				<!----start-social-icons----->

				<!----End-social-icons----->

			<!----End-top-header----->
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li> </li>
						<li> </li>

						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="faculties.html">Faculties</a></li>
						<li><a href="allcoureses.html">Courses</a></li>
						<li><a href="news.html">News</a></li>
									</ul>
				</div>

				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
		<!----End-header----->

	<!----End-wrap----->
	<!--start-image-slider---->
			<div class="slider">
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
						<!-- <div data-src="images/slider10.jpg" width = '1400px' height='300px'>  </div>	 -->
						<div data-src="images/temp1.png" width = '400px' >  </div>

						<div data-src="images/temp3.jpg" width = '400px' >  </div>
							<div data-src="images/temp4.jpg" width = '400px' >  </div>
					<div data-src="images/temp2.jpg" width = '400px' >  </div>
							<!-- <div data-src="images/temp3.jpg" width = '400px' >  </div> -->
						<!-- <div data-src="images/slider1.jpg">  </div>
						<div data-src="images/slider2.jpg">  </div>
						<div data-src="images/slider5.jpg" width = '1400px' height='500px'>  </div>
						<div data-src="images/slider1.jpg">  </div>
						<div data-src="images/slider2.jpg">  </div> -->
					</div>
					<div class="clear"> </div>
			</div>
			<br>
			<br>
			<br>
			</div>
		 <!--End-image-slider---->
		 <!---start-content---->
		 <div class="content">
		 	<div class="top-grids">
		 		<div class="wrap">
			 		<div class="top-grid">
			 			<a href="Student_Login.php"><img src="images/icon7.png" width="80px" height="80px" title="icon-name"></a>
			 			<h3>Student</h3>
			 			<p> Login | Register </p>
			 			<a class="button" href="Student_Login.php">Click</a>
			 		</div>
			 		<div class="top-grid">
			 			<a href="#"><img src="images/icon4.png" width="80px" height="80px" title="icon-name"></a>
			 			<h3>Faculty</h3>
			 			<p>Login | Register  </p>
			 			<a class="button" href="Faculty_Login.php">Click</a>
			 		</div>
			 		<div class="top-grid last-topgrid">
			 			<a href="#"><img src="images/icon6.png" width="80px" height="80px" title="icon-name"></a>
			 			<h3>Admin</h3>
			 			<p>Login | Register </p>
			 			<a class="button" href="Admin_Login.php">Click</a>
			 		</div>
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
		 	<div class="mid-grid">
		 		<div class="wrap">
			 		<h1></h1>
			 <!--		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
			 		<p>" consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat "</p>
-->




		 		</div>
		 	</div>

		 <!---End-footer---->
	</body>
</html>
