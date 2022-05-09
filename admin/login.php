<?php
session_start();
?>


<html>
<?php include('scripts/head-script.php'); ?>

</html>
















<body>
	<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
		<div class="mask d-flex align-items-center h-100 gradient-custom-3">
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-9 col-lg-7 col-xl-6">
						<div class="card" style="border-radius: 15px;">
							<div class="card-body p-5">
								<h2 class="text-uppercase text-center mb-5">Create an account</h2>

								<form method="post" action="login.php">


									<div class="form-floating mb-4">
										<input class="input100 form-control form-control-lg" type="text" name="username" autocomplete="off" placeholder="Username" id="floatingInput">
										<label class="form-label" for="form3Example1cg">Emri i perdoruesit</label>
									</div>

									<div class="form-floating mb-4">
										<input class="input100 form-control form-control-lg" type="password" name="password" placeholder="Password" id="floatingInputPassword">

										<label for="floatingInputPassword">Fjalekalimi</label>
									</div>


									<div class="d-flex justify-content-center">
										<button type="submit" class="btn btn-success" name="login" value="Login">Kycu</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	$con = mysqli_connect("localhost", "root", "", "foodsys");
	mysqli_select_db($con, "foodsys");

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) || empty($password)) {

			echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
		} else if ($username != '' || $password != '') {

			$password = md5($password);

			$admin_query = "select * from admin_login where username='$username' AND password='$password'";

			$run = mysqli_query($con, $admin_query);

			if (mysqli_num_rows($run) > 0) {

				$_SESSION['username'] = $username;
				
				header('location: index.php');
			} else {

				echo "<script>alert('Username ose password eshte gabim')</script>";
			}
		}
	}
	?>


</body>

</html>