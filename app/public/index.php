<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D&S HW</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
	<script src="js/sorttable.js"></script>
	
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md sticky-top ms-auto">
		<div class="container-fluid">
			<a href="img/SOAA-logo.jpeg"><img src="img/SOAA-logo.jpeg" class="nav-logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto dropdown">
					<li class="nav-item">
						<ul class="nav navbar-nav">
							<li class="atopnavbar"><a href="index.php">Home</a></li>
							<li class="atopnavbar"><a href="MoreInfo.html">More Info</a></li>
							<li class="atopnavbar"><a href="Books.html">Reading List</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10"></div>
		</div>
	</div>

	<!-- https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_carousel&stacked=h -->
	<div id="carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="img/smallest-beret2.jpg" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
			  <h1 class="h1-responsive">The Giant Killer</h1>
			  <p>Source: https://blog.theveteranssite.greatergood.com/smallest-beret-vet/</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/littleman.png" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
				<h1 class="h1-responsive">Lessons from History</h1>
				<p>Source: https://medium.com/lessons-from-history/shortest-u-s-soldier-in-vietnam-war-was-the-armys-badass-combatant-48e5b1a2f3f8</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/spy.jpg" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
				<h1 class="h1-responsive">Far From Short on Courage</h1>
				<p>Source: https://www.miaminewtimes.com/news/a-homeless-man-in-aventura-was-secretly-a-dashing-war-hero-and-maybe-a-spy-9036982</p>
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>

	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10"></div>
		</div>
	</div>

	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4 padding">Jerry Rambo</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Jerry Rambo was probably the most unique Green Beret to ever serve in the U.S. Army’s Special Forces and served alongside his older brother Johnny Rambo during Vietnam. He stood at just 4″9 tall.</p>
				<p class="lead">Jerry served as a Green Beret communciations senior non-comissioned officer providing information and telecommunications support since technical core compentcies were required to facilitate combat operations.</p>
				<p class="lead">Accomplishments could not be understated for this unsung warrior who fought trouble-tickets due to his ODA's frequent password sharing on information systems. His actions outside of combat prevented PII and PHI from being leaked into enemy hands.</p>
				<p class="lead">Currently, Jerry leads a quiet life providing IT training and support to Indiana University Bloomington's University Information Technology Services (UITS).</p>
			</div>
			
			<!--- Cards -->
			<div class="container-fluid padding">
				<div class="row padding">
					<!--Card start-->
					<div class="col-md-6 center"> 
						<div class="card">
							<a href="img/towers.jpg"><img class="card-img-top headshot" src="img/towers.jpg"></a>
						</div>
					</div>
					<!-- Card end-->
					
					<!--Card start-->
					<div class="col-md-6 center"> 
						<div class="card">
							<a href="img/ironmike.jpg"><img class="card-img-top headshot" src="img/ironmike.jpg"></a>
							</div>
						</div>
					</div>
					<!-- Card end-->				
				</div>
			</div>

				<div class="col-12 left">
					<hr class="light">
					<h6 class="stylesource">Image Sources:</h6>
					<h6 class="stylesource">Clickable SOAA logo - https://soaa.org/smallest-green-beret/</h6>
					<h6 class="stylesource">Fort Benning Jump Towers photo - https://michaelqpowell.files.wordpress.com/2017/02/tower2_blog.jpg</h6>
					<h6 class="stylesource">Fort Benning Iron Mike photo - https://live.staticflickr.com/5211/5459813133_f719b72739_b.jpg</h6>
					<hr class="light">
				</div>
			</div>
		</div>
	</div>



	<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	

	<!--- Footer -->
	<footer>
		<div class="text-center">
			<div class="container-fluid padding col-12">
				<img src="img/IU_Trident_Image.jpg" class="footer-image">

						<hr class="light">
						<h5>MSIS Office</h5>
						<hr class="light">
						<p>1275 E 10th St</p>
						<p>Bloomington, IN 47405</p>


					<div class="col-12">
						<hr class="light-100">
						<h5>&copy; Indiana University</h5>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>


