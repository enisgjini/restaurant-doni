<?php
session_start();

if (!isset($_SESSION['username'])) {

	header("location: login.php");
} else {

?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include('scripts/head-script.php'); ?>
	</head>

	<body>

		<?php include('templates/bootstrap-navbar-admin.php'); ?>

		<main class="container">
			<div class="row">
				<div class="col p-4">
					<h2 class="text-left">Shitjet</h2>
					<hr>
					<div class="col">
						<table class="table table-hover table-bordered table-responsive">
							<thead>
								<th>Data</th>
								<th>Konsumatori</th>
								<th>Shitja Totale</th>
								<th>Detailet</th>
							</thead>
							<tbody>
								<?php
								$sql = "select * from purchase order by purchaseid desc";
								$query = $conn->query($sql);
								while ($row = $query->fetch_array()) {
								?>
									<tr>
										<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
										<td><?php echo $row['customer']; ?></td>
										<td class="text-right">&#8364; <?php echo number_format($row['total'], 2); ?></td>
										<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Shiko </a>
											<a href="#deletesales<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
											<?php include('sales_modal.php'); ?>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>

		<?php include('scripts/body-script.php') ?>
		<script src="js/script.js"></script>
	</body>

	</html>

<?php } ?>