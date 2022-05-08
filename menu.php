<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag's -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Link to CSS file -->
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
	<!-- Navbar Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
	<?php include('templates/header.php'); ?>


	<!-- Navbar Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
	<?php include('./templates/navbar.php'); ?>


	<!-- Carousel of images Included -->
	<!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
	<?php include('./templates/carousel-of-image-1.php'); ?>



















	<div class="container mt-5">
		<h1 class="text-center mt-5 mb-5">Menuja jonë</h1>
		<ul class="nav nav-pills flex-row flex-sm-row mt-5 ">
			<?php
			$sql = "select * from category order by categoryid asc limit 1";
			$fquery = $conn->query($sql);
			$frow = $fquery->fetch_array();
			?>
			<li class="nav-item"><a data-toggle="tab" class="btn btn-outline-dark mr-3 mt-2" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
			<?php

			$sql = "select * from category order by categoryid asc";
			$nquery = $conn->query($sql);
			$num = $nquery->num_rows - 1;

			$sql = "select * from category order by categoryid asc limit 1, $num";
			$query = $conn->query($sql);
			while ($row = $query->fetch_array()) {
			?>
				<li class="nav-item"><a data-toggle="tab" class="btn btn-outline-dark mr-3 mt-2" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
			<?php
			}
			?>
		</ul>

		<div class="tab-content">
			<?php
			$sql = "select * from category order by categoryid asc limit 1";
			$fquery = $conn->query($sql);
			$ftrow = $fquery->fetch_array();
			?>
			<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
				<?php

				$sql = "select * from product where categoryid='" . $ftrow['categoryid'] . "'";
				$pfquery = $conn->query($sql);
				$inc = 4;
				while ($pfrow = $pfquery->fetch_array()) {
					$inc = ($inc == 4) ? 1 : $inc + 1;
					if ($inc == 1) echo "<div class='row'>";
				?>

					<div class="col-sm-3 mt-3">
						<div class="card">
							<img class="card-img-top" src="admin/<?php if (empty($pfrow['photo'])) {
																		echo "admin/upload/noimage.jpg";
																	} else {
																		echo $pfrow['photo'];
																	} ?>" alt="Card image cap" style="width: 100%;height: 200px;object-fit: cover;">
							<div class="card-body">
								<h5 class="card-text"><?php echo $pfrow['productname']; ?></h5>
								<hr>
								<h6 class="card-text"><?php echo number_format($pfrow['price'], 2); ?> &#8364; </h6>
							</div>
						</div>
					</div>

























				<?php
					if ($inc == 4) echo "</div>";
				}
				if ($inc == 1) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div><div class='col-sm-3'></div></div>";
				if ($inc == 2) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div></div>";
				if ($inc == 3) echo "<div class='col-sm-3'></div></div>";
				?>
			</div>
			<?php

			$sql = "select * from category order by categoryid asc";
			$tquery = $conn->query($sql);
			$tnum = $tquery->num_rows - 1;

			$sql = "select * from category order by categoryid asc limit 1, $tnum";
			$cquery = $conn->query($sql);
			while ($trow = $cquery->fetch_array()) {
			?>
				<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
					<?php

					$sql = "select * from product where categoryid='" . $trow['categoryid'] . "'";
					$pquery = $conn->query($sql);
					$inc = 4;
					while ($prow = $pquery->fetch_array()) {
						$inc = ($inc == 4) ? 1 : $inc + 1;
						if ($inc == 1) echo "<div class='row'>";
					?>

						<div class="col-sm-3 mt-3">
							<div class="card">
								<img class="card-img-top" src="admin/<?php if ($prow['photo'] == '') {
																			echo 'upload/noimage.jpg';
																		} else {
																			echo $prow['photo'];
																		} ?>" alt="Card image cap" style="width: 100%;height: 200px;object-fit: cover;">
								<div class="card-body">
									<h5 class="card-text"><?php echo $prow['productname']; ?></h5>
									<hr>
									<h6 class="card-text"><?php echo number_format($prow['price'], 2); ?> &#8364; </h6>
								</div>
							</div>
						</div>
					<?php
						if ($inc == 4) echo "</div>";
					}
					if ($inc == 1) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div><div class='col-sm-3'></div></div>";
					if ($inc == 2) echo "<div class='col-sm-3'></div><div class='col-sm-3'></div></div>";
					if ($inc == 3) echo "<div class='col-sm-3'></div></div>";
					?>
				</div>
			<?php
			}
			?>
		</div>

	</div>

	<!-- Footer Included -->
	<!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
	<?php include('./templates/footer.php'); ?>

</html>
</body>

</html>