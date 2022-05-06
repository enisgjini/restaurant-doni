<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag's -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to CSS file -->
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<!-- Header Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\header.php -->
	<?php include('./templates/header.php'); ?>

	<!-- Navbar Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
	<?php include('./templates/navbar.php'); ?>

	<!-- Top content -->
	<div class="top-content">
		<!-- Carousel -->
		<div id="carousel-example" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example" data-slide-to="1"></li>
				<li data-target="#carousel-example" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h1>Carousel Fullscreen Template</h1>
						<div class="carousel-caption-description">
							<p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
						</div>
					</div>
					<img src="img/1.jpg" class="d-block w-100" alt="slide-img-1">

				</div>
				<div class="carousel-item">
					<img src="img/2.jpg" class="d-block w-100" alt="slide-img-2">
					<div class="carousel-caption">
						<h1>Carousel Fullscreen Template</h1>
						<div class="carousel-caption-description">
							<p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/3.jpg" class="d-block w-100" alt="slide-img-3">
					<div class="carousel-caption">
						<h1>Carousel Fullscreen Template</h1>
						<div class="carousel-caption-description">
							<p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- End carousel -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-6 mt-2">
				<h1 class="text-center mt-3">Restaurant DONI</h1>
				<h3 class="text-center mt-3">Mirë se vini</h3>
				<p class="text-center mt-3"> Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.</p>

				<a href="rresh-nesh.php" class="btn btn-outline-info d-flex justify-content-center text-center">HISTORIA JONË →</a>
			</div>
			<div class="col-sm-6">
				<img src="img/1.jpg" class="img-thumbnail" alt="">
			</div>
		</div>
	</div>




































	<!-- Footer Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
	<?php include('./templates/footer.php'); ?>

</html>
</body>

</html>