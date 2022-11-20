<?php
	include("dbcon.php");
	
	if (isset($_POST["btnRegister"]))
	{
		$collegename = $_POST['txtCollegeName'];
		$username = $_POST['txtUsername'];
		$password = $_POST['txtPassword'];
		
		$query = "select * from tabusers where username='$username'";
		$result = mysql_query($query, $con);
		
		if (mysql_num_rows($result) == 0)
		{
			//New Record
			$query = "insert into tabusers values('$collegename', '$username', '$password')";
			mysql_query($query, $con);
			
			if (mysql_affected_rows($con) > 0)
			{
				$info_message = "<strong>Account created.</strong>";
			}
		}
		else
		{
			//Username already exists!
			$error_message = "<strong>Account already registered!</strong>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>College Selection</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="form1" class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="">
					<span class="login100-form-title">
						College Selection - Registration
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter college name">
						<input class="input100" type="text" name="txtCollegeName" placeholder="College Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="txtUsername" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="txtPassword" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="btnRegister" class="login100-form-btn" value="Register" />
					</div>
					
					<div class="p-t-13 p-b-23">
						<?php
							if (isset($error_message))
							{
								include("show_error.php");
							}
							if (isset($info_message))
							{
								include("show_info.php");
							}
						?>
					</div>
					
					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Do have an account?
						</span>

						<a href="index.php" class="txt3">
							Sign in now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
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