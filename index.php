<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag's -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">


	<!-- Fav Icon -->
	<link rel="icon" href="img/logo.png">

	<!-- Title of Webpage -->
	<title>Restauranti Juaj</title>

	<!-- Link to CSS -->
	<link rel="stylesheet" href="./css/main.css">

	
	
</head>

<body>
	<!-- Navbar Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
	<?php include('./templates/navbar.php'); ?>

	<!-- Carousel of images Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
	<?php include('./templates/carousel-of-images-1.php'); ?>



	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-6 mt-2 text-center">
				<h1 class="text-center mt-3 doni-text-second">Restaurant DONI</h1>
				<h3 class="text-center mt-3 doni-bg-text text-body">Mirë se vini</h3>
				<p class="text-center mt-3 doni-paragraph"> Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.</p>

				<a href="rreth-nesh.php" class="pt-5 text-body text-decoration-none doni-paragraph">HISTORIA JONË →</a>
			</div>
			<div class="col-sm-6">
				<img src="img/slide-1.webp" alt="">
			</div>
		</div>
	</div>


	<div class="container-fluid" id="section1">
		<h1 class="text-light text-center pt-5 doni-text-second">Shiko</h1>
		<h1 class="text-center pt-5 doni-bg-text">Restaurant DONI</h1>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/gallery-img/pamja-jasht-1.webp" alt="Card image cap" style="width: 100%;height: 350px;object-fit: cover;border-radius:25px">
						</div>
						<div class="card-body">
							<h5 class="card-title doni-card-text">Restorant romantik</h5>
							<p class="doni-paragraph">Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark doni-paragraph">Shiko më shumë →</a>
						</div>
					</div>
				</div>
				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/gallery-img/ushqimi-2.webp" alt="Card image cap" style="width: 100%;height: 350px;object-fit: cover;border-radius:25px">
						</div>
						<div class="card-body">
							<h5 class="card-title doni-card-text">Restorant romantik</h5>
							<p class="doni-paragraph">Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark doni-paragraph">Shiko më shumë →</a>
						</div>
					</div>
				</div>

				<div class="card-wrapper col-sm-4 ">
					<div class="card border-0">
						<div class="card-img-wrapper">
							<img class="card-img-top" src="img/gallery-img/pamja-mbrenda-1.webp" alt="Card image cap" style="width: 100%;height: 350px;object-fit: cover;border-radius:25px">
						</div>
						<div class="card-body">
							<h5 class="card-title doni-card-text
							">Restorant romantik</h5>
							<p class="doni-paragraph">Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.</p>
							<a href="" class="text-decoration-none text-dark doni-paragraph">Shiko më shumë →</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Restaurant DONI - Menu | Start -->
	<div class="container-fluid" id="section2">
		<h1 class="text-light text-center pt-5 doni-text-second"><i>Shiko</i></h1>
		<h1 class="text-light text-center pt-5 doni-bg-text">Menuja jonë</h1>
	</div>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/drekë.webp" alt="" class="menu mx-auto d-block">
				<a class="btn btn-outline-dark mr-2 mt-2 doni-card-text" href="menu.php">Drekë </a>
			</div>
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/mengjesi.webp" alt="" class="menu mx-auto d-block">
				<a class="btn btn-outline-dark mr-2 mt-2 doni-card-text" href="menu.php">Mëngjesi</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/darka.webp" alt="" class="menu mx-auto d-block">
				<a class="btn btn-outline-dark mr-2 mt-2 doni-card-text" href="menu.php">Darka </a>
			</div>
			<div class="col-sm-6 mt-5 text-center">
				<img src="img/ahengu.webp" alt="" class="menu mx-auto d-block">
				<a class="btn btn-outline-dark mr-2 mt-2 doni-card-text" href="menu.php">Ahengu </a>
			</div>
		</div>
	</div>
	<!-- Restaurant DONI - Menu | End -->


































	<!-- Footer Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
	<?php include('./templates/footer.php'); ?>


</html>
</body>

</html>