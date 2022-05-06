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



































	<!-- Footer Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
	<?php include('./templates/footer.php'); ?>

</html>
</body>

</html>