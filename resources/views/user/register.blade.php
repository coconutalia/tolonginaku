<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pinjam Ruang Kopma</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_user_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_user_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_user_login/css/main.css">
<!--===============================================================================================-->

</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets_user_login/images/hero.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Register
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Nama Lengkap">
						<input class="input100" type="text" name="username" placeholder="Nama Lengkap" required>
						<div class="validation"></div>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "NIM">
						<input class="input100" type="text" name="username" placeholder="NIM" required>
						<div class="validation"></div>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="dropdown">
                    <div class="wrap-input100 validate-input" data-validate = "Status">
						<input class="input100" type="text" name="status" data-toggle="dropdown" placeholder="Status" required>
						<div class="validation"></div>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        <ul class="dropdown-menu" style="center">
                        <li><a href="#">Anggota</a></li>
                        <li><a href="#">Non Anggota</a></li>
                        </ul>
					</div>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Email">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<div class="validation"></div>
						<span class="focus-input100" data-placeholder="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<div class="validation"></div>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Ulangi Password" required>
						<div class="validation"></div>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
          
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Sudah punya akun?<a href="{{Route('signin')}}">Masuk</a></label>
                    </div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
                        <a href="{{Route('signin')}}">Register</a>
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets_user_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets_user_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets_user_login/js/main.js"></script>

</body>
</html>