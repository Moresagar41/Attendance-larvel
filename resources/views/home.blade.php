<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!--<link rel="stylesheet" type="text/css" href="css/home.css">-->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	html {
	scroll-behavior: smooth;
}

.bgimg{
	background-image: url('../images/PerfectAttendance.jpg');
	background-size: 100% 100%;
	background-attachment: fixed;
	opacity: 0.8;
	width: 100%;
	height: 90vh;
}

.hearderset{
	padding-top: 200px;
	box-sizing: border-box;
}

.hearderset h2{
	font-size: 42px;
}

.hearderset h1{
	font-size: 50px;
	font-weight: bold;
}

</style>

</head>

<body>

	<header class="navbar navbar-expand-md bg-dark navbar-dark navbar-top">
		
		<div class="container">
			<a href="" class="navbar-brand text-warning font-weight-bold"> ATTENDANCE PORTAL
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-centre" id="collapsenavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> 
						<a href="" class="nav-link text-white">HOME &nbsp;&nbsp;</a>
					</li>
					<li class="nav-item"> 
						<a href="#aim" class="nav-link text-white">Aim &nbsp;&nbsp;</a>
					</li>
				</ul>
			</div>
		</div>
	</header>



	<div class="bgimg">

		<div class="container text-center text-white hearderset">
			<h2> Welcome To Our System!!! </h2>
			<button class="btn btn-warning text-white btn-lg">Admin </button>&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="btn btn-warning text-white btn-lg">Staff </button>
		</div>
	</div>

	<section id="aim" class="container aboutus text-center p-5">
     <div class="bg-dark text-center text-light p-3" style="width:100%;">
		<h1>Attend Today,Achieve Tommarow</h1>
		<br>
		<a href="" class="btn-primary p-3 m-3 rounded text-decoration-none">Log-in</a>
		<br><br>
	</div>
	
	<div class="text-center bg-white" style="height:95vh; display: flex; align-items: center">
		<div style="margin: auto">
			<h1>Our Aim</h1>
			<hr>
			
			<h5 class="lead">"Get the Attendance you've always demanded about."</h5>
		</div>
	</div>
  </section>

	
	<footer class="w3-container w3-padding-large w3-mobile w3-center w3-row w3-black">
	
		<p class="w3-half w3-left-align w3-mobile">&copy; Copyright 2019 Sagar More - All Rights Reserved</p>
		
		<p class="w3-half w3-right-align w3-mobile">
			<a href="feedback" class="w3-hover-text-teal">Feedback</a>&nbsp;&nbsp;
			<a href="contactus" class="w3-hover-text-teal">Contact</a>
		</p>
		
		
	</footer>
	


</body>
</html>




