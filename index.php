<!DOCTYPE html>
<html lang="en">

<head>
	<title>Member Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://cdn4.iconfinder.com/data/icons/web-mobile-universal/32/universal_icons-09-512.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
<br><br>

	<div class="limiter">
		<div class="container-login100">
			<!-- <div class="wrap-login100"> -->
			<!-- <div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div> -->

			<style>
				.custom-select {
					padding-right: 30px;
					/* Adjust this value to move the arrow */
				}
			</style>

			<form action="">
				<span class="login100-form-title">
					Member Login
				</span>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<select class="input100 custom-select" name="user_role">
						<option value="" disabled selected>Select Role</option>
						<option value="student">STUDENT</option>
						<option value="proctor">PROCTOR</option>
						<option value="warden">WARDEN</option>

						<option value="admin">ADMIN</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enrollment Number is required">
					<input class="input100" type="text" name="email" placeholder="UNIQUE ID">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-user-circle" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>

				<div class="text-center p-t-12">
					<span class="txt1">
						
					</span>
					<a class="txt2" href="#">
					Forgot Password
					</a>
				</div>


			</form>


			<!-- </div> -->
		</div>
	</div>






	<!-- Footer -->
	<!-- <footer class="text-center mt-5">
        <div class="container">
            <p>DESIGNED BY <a href="https://thegreattech.tech/" target="_blank" style="color:blue;">THEGREAT TECH</a></p>
            <p>For any queries or issues, contact us at <a href="mailto:thegreattechofficial@gmail.com"  style="color:blue;">TheGreatTech</a></p>
        </div>
    </footer> -->



</body>

</html>