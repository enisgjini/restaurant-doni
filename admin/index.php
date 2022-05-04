<?php
session_start();

if(!isset($_SESSION['username'])){

header("location: login.php");	
}
else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Restauranti Juaj</title>
 <meta http-equiv="refresh"content="100">
</head>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">Shitjet</h1>
	
	<table class="table table-striped table-bordered">
		<thead>
			<th>Data</th>
			<th>Konsumatori</th>
			<th>Shitja Totale</th>
			<th>Detailet</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
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
</body>
</html>

<?php } ?>