<?php
session_start();
?>

<html>
	<head>
		<title>Logini per Admin</title>
		<link rel="stylesheet"href="adminstyle.css">
			<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	</head>

<body>

		<form method="post" action="login.php">

		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Kycja per Menaxherin
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username"autocomplete="off" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div>
							<a href="#" class="txt1">
								*Ne qofse keni harruar Username dhe Password kontaktoni stafin e IllyrianDev
							</a>
						</div>
			

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn"type="submit" 
				name="login" value="Login">
							Kycu						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","foodsys");
mysqli_select_db($con,"foodsys");

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    if(empty($username)||empty($password)){
        
        echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
    }
    else if($username!='' || $password!=''){
        
        $password = md5($password);
	
	   $admin_query = "select * from admin_login where username='$username' AND password='$password'";
	
	   $run = mysqli_query($con, $admin_query);
	
	   if(mysqli_num_rows($run) > 0){
	
	       $_SESSION['username']=$username;
	
           echo "<script>window.open('index.php','_self')</script>";
           
	   }
	   else{
	
	       echo "<script>alert('Username ose password eshte gabim')</script>";
	   }
    }
    
}
?>