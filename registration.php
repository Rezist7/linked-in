<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGN UP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" enctype="multipart/form-data" action="registration.php">
					<span class="login100-form-title p-b-49">
						Sign up
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username"reqi>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "phone number is reauired">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="Number" name="phone" placeholder="Phone Number">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password_1" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="please confirm password">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="password_2" placeholder="Confirm your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div  >
						<span class="label-input100">Referral code</span>
						<input class="input100" type="text" name="reffcode" placeholder="enter referral code if any">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Profile image is required"><span class="focus-input100" data-symbol="&#xf206;"></span>
						<span class="label-input100">Choose profile picture</span>

						<input class="input100" id="uploadImage1"  type="file" accept="image/*" name="image" onchange="PreviewImage1();" >
						
						
					
					</div><img id="uploadPreview1" style="width: 400px;border-radius: 10px;"  />
					<?php include('errors.php'); ?>
					
					
							<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="client">
								SIGN UP .
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						Have an account? <a href="index.php" class="txt2">
							<u>Login.</u></a><br>
						
					</div>

					

					
				</form>
			</div>
		</div>
	</div><script type="text/javascript"> function PreviewImage1() { 
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);
        oFReader.onload = function (ofREvent){
            document.getElementById("uploadPreview1").src = ofREvent.target.result;
        };
     };</script>
	

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