<?php include('scripts/head-script.php'); ?>

<body>
	<?php include('templates/bootstrap-navbar-admin.php'); ?>
	<main class="container">
		<div class="row">
			<div class="col p-4">
			<h2 class="text-left">Kategoritë e menus</h2>
			<hr>
				<div class="row">
					<div class="col-md-12">
						<a href="#addcategory" data-bs-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Shto Kategori</a>
					</div>
				</div>
				<div style="margin-top:10px;">
					<table class="table table-hover table-bordered table-responsive">
						<thead>
							<th>Emri i Kategoris</th>
							<th>Vepro</th>
						</thead>
						<tbody>
							<?php
							$sql = "select * from category order by categoryid asc";
							$query = $conn->query($sql);
							while ($row = $query->fetch_array()) {
							?>
								<tr>
									<td><?php echo $row['catname']; ?></td>
									<td>
										<a href="#editcategory<?php echo $row['categoryid']; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Ndrysho </a> <a href="#deletecategory<?php echo $row['categoryid']; ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Fshij</a>
										<?php include('modules/category_modal.php'); ?>
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
			<?php include('modules/modal.php'); ?>
			<?php include('scripts/body-script.php') ?>
</body>