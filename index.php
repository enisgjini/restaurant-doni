<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag's -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Fav Icon -->
	<link rel="icon" href="img/logo.png">

	<!-- Title of Webpage -->
	<title>Restauranti Juaj</title>

	<!-- Link to CSS -->
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<!-- Navbar Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
	<?php include('./templates/navbar.php'); ?>

	<!-- Carousel of images Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
	<?php include('./templates\carousel-of-images.php'); ?>



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


	<div class="container-fluid" id="section1">
		<h1 class="text-light text-center pt-5"><i>Shiko</i></h1>
		<h1 class="text-light text-center pt-5">Restaurant DONI</h1>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/1.jpg" alt="Card image cap" style="border-radius: 10px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Restorant romantik</h5>
							<p>Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark">Shiko më shumë →</a>
						</div>
					</div>
				</div>
				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/1.jpg" alt="Card image cap" style="border-radius: 10px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Restorant romantik</h5>
							<p>Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark">Shiko më shumë →</a>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/1.jpg" alt="Card image cap" style="border-radius: 10px;">
						</div>
						<div class="card-body">
							<h5 class="card-title">Restorant romantik</h5>
							<p>Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark">Shiko më shumë →</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Restaurant DONI - Menu | Start -->
	<div class="container-fluid" id="section2">
		<h1 class="text-light text-center pt-5"><i>Shiko</i></h1>
		<h1 class="text-light text-center pt-5">Restaurant DONI - Menu</h1>
	</div>
	<div class="container mt-5 mb-5">
		<div class="row">
		<div class="col-sm-6 mt-5 text-center">
				<img src="img/drekë.jpg" alt="" class="menu mx-auto d-block">
				<a class="btn btn-info" href="index.php">Drekë</a>
			</div>
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/mengjesi.jpg" alt="" class="menu mx-auto d-block">
				<a class="btn btn-info" href="index.php">Mëngjesi</a>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/darka.jpg" alt="" class="menu mx-auto d-block">
				<a class="btn btn-info" href="index.php">Darka</a>
			</div>
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/ahengu.jpg" alt="" class="menu mx-auto d-block">
				<a class="btn btn-info" href="index.php">Ahengu</a>
			</div>
		</div>
	</div>
	<!-- Restaurant DONI - Menu | End -->


	<?php include('./testimonials.php') ?>































	<!-- Footer Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
	<?php include('./templates/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
</body>

</html>