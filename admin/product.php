<?php include('scripts/head-script.php'); ?>

<body>
	<?php include('templates/bootstrap-navbar-admin.php'); ?>
	<main class="container">
		<div class="row">
			<div class="col p-4">
				<h2 class="text-left">Lista e produkteve</h1>
					<hr>

					<select id="catList" class="btn btn-default" style="border: 1px solid black; border-radius:5px;">
						<option value="0">Te gjitha kategorit</option>
						<?php
						$sql = "select * from category";
						$catquery = $conn->query($sql);
						while ($catrow = $catquery->fetch_array()) {
							$catid = isset($_GET['category']) ? $_GET['category'] : 0;
							$selected = ($catid == $catrow['categoryid']) ? " selected" : "";
							echo "<option$selected value=" . $catrow['categoryid'] . ">" . $catrow['catname'] . "</option>";
						}
						?>
					</select>
					<a href="#addproduct" data-bs-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Shto nje produkt</a>

					<div style="margin-top:10px;">
						<table class="table table-hover table-bordered table-responsive ">
							<thead>
								<th>Foto</th>
								<th>Emri i produktit</th>
								<th>Cmimi</th>
								<th>Vepro</th>
							</thead>
							<tbody>
								<?php
								$where = "";
								if (isset($_GET['category'])) {
									$catid = $_GET['category'];
									$where = " WHERE product.categoryid = $catid";
								}
								$sql = "select * from product left join category on category.categoryid=product.categoryid $where order by product.categoryid asc, productname asc";
								$query = $conn->query($sql);
								while ($row = $query->fetch_array()) {
								?>
									<tr>
										<td><a href="<?php if (empty($row['photo'])) {
															echo "upload/noimage.jpg";
														} else {
															echo $row['photo'];
														} ?>"><img src="<?php if (empty($row['photo'])) {
																			echo "upload/noimage.jpg";
																		} else {
																			echo $row['photo'];
																		} ?>" height="30px" width="40px"></a></td>
										<td><?php echo $row['productname']; ?></td>
										<td>&#8364; <?php echo number_format($row['price'], 2); ?></td>
										<td>
											<a href="#editproduct<?php echo $row['productid']; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Ndrysho</a> <a href="#deleteproduct<?php echo $row['productid']; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Fshij</a>
											<?php include('modules/product_modal.php'); ?>
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

		<script type="text/javascript">
			$(document).ready(function() {
				$("#catList").on('change', function() {
					if ($(this).val() == 0) {
						window.location = 'product.php';
					} else {
						window.location = 'product.php?category=' + $(this).val();
					}
				});
			});
		</script>
		<?php include('./modules/modal.php'); ?>
		<?php include('scripts/body-script.php') ?>
</body>

</html>