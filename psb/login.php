<?php

session_start();

include 'koneksi/koneksi.php';

if (isset($_POST['submit'])) {

	foreach ($_POST as $key => $val) {
		${$key} = $val;
	}

	$query	=	"SELECT a.password,a.role_user as role,a.id as id_akun, b.id as id_daftar from akun a, pendaftaran b 
				WHERE email='$email' 
				AND b.id = a.id_user";

	$exec 	= mysqli_query($conn, $query);

	if ($exec) {

		if (mysqli_num_rows($exec) > 0) {
			while ($rows = mysqli_fetch_array($exec)) {

				if (password_verify($password, $rows['password'])) {
					$_SESSION['role_user'] 	= $rows['role'];
					$_SESSION['auth']		= $rows['id_daftar'];


					echo '<script> window.location="dashboard/index.php"; </script> ';
				} else {
					echo '<script>alert("Password Salah!")</script>';
				}
			}
		} else {

			$query	=	"SELECT password,role_user,id from akun 
				WHERE email='$email'";

			$exec 	= mysqli_query($conn, $query);

			if ($exec) {
				if (mysqli_num_rows($exec) > 0) {
					while ($rows = mysqli_fetch_array($exec)) {

						if (password_verify($password, $rows['password'])) {
							$_SESSION['role_user'] 	= $rows['role_user'];
							$_SESSION['auth']		= $rows['id'];

							echo '<script> window.location="dashboard/index.php"; </script> ';
						} else {
							echo '<script>alert("Password Salah!")</script>';
						}
					}
				} else {
					echo '<script>alert("User Tidak Terdaftar")</script>';
				}
			} else {

				$exec 	= mysqli_query($conn, $query);
			}
		}
	} else {

		echo mysqli_error($conn);
	}
}

?>
<!doctype html>
<html lang="en">




<head>

	<meta charset="utf-8" />
	<title>Halaman Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />

	<link rel="shortcut icon" href="assets/assets/images/image/logo.png">

	<!-- Bootstrap Css -->
	<link href="assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="assets/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>



	<div class="account-pages my-5 pt-sm-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card overflow-hidden">
						<div class="bg-primary bg-soft">
							<div class="row">
								<div class="col-7">
									<div class="text-primary p-4">
										<h5 class="text-primary">Halaman Login</h5>

									</div>
								</div>

							</div>
						</div>
						<div class="card-body pt-0">
							<div class="auth-logo">
								<a href="#" class="auth-logo-light">
									<div class="avatar-md profile-user-wid mb-4">
										<span class="avatar-title rounded-circle bg-light">
											<img src="assets/assets/images/image/logo.png" alt="" class="rounded-circle" height="34">
										</span>
									</div>
								</a>

								<a href="#" class="auth-logo-dark">
									<div class="avatar-md profile-user-wid mb-4">
										<span class="avatar-title rounded-circle bg-light">
											<img src="assets/assets/images/image/logo.png" alt="" class="rounded-circle" height="34">
										</span>
									</div>
								</a>
							</div>
							<div class="p-2">
								<form class="form-horizontal" method="post" action=""">

									<div class=" mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
							</div>

							<div class="mb-3">
								<label class="form-label">Password</label>
								<div class="input-group auth-pass-inputgroup">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
									<button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
								</div>
							</div>



							<div class="mt-3 d-grid">
								<button class="btn btn-primary waves-effect waves-light" name="submit" type="submit">Log In</button>
							</div>



							<div class="mt-4 text-center">
								<p>Don't have an account ? <a href="daftar_akun.php" class="fw-medium text-primary"> Signup now </a> </p></a>
							</div>
							</form>
						</div>

					</div>
				</div>


			</div>
		</div>
	</div>
	</div>

	<script src="assets/assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/assets/libs/node-waves/waves.min.js"></script>


	<script src="assets/assets/js/app.js"></script>
</body>



</html>