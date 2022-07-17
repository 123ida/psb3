<?php
//start the session
session_start();

include 'koneksi/koneksi.php';

$redirect = "";

if (isset($_SESSION['is_data_student_exist'])) {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
} else {
    $redirect = "<script> window.location='daftar_siswa_baru.php'; </script>";
}


//check if button next is clicked
if (isset($_POST['submit'])) {



    //set all name attr and value to created variable
    foreach ($_POST as $key => $val) {
        ${$key} = $val;
        $_SESSION['' . $key . ''] = $val;
    }

    $query  =   "SELECT email FROM akun WHERE email='$email'";

    $exac   = mysqli_query($conn, $query);

    if ($exac) {
        $email_count = mysqli_num_rows($exac);
        if ($email_count > 0) {
            echo '<script>alert("Email sudah digunakan, silahkan gunakan email lain..")</script>';
        } else {
            $cost = 10;
            $hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => $cost]);

            $_SESSION['password'] = $hash;

            //check if session is not empty, then redirect to daftar_data_orangtua.php
            if (!empty($_SESSION)) {
                echo $redirect;
                print_r($_SESSION);
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
    <title>Halaman Registrasi</title>
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
                                        <h5 class="text-primary">Halaman Registrasi</h5>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/assets/images/image/logo.png" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
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
                                    <input type="email" class="form-control" name="email" required autofocus value="<?php isset($_SESSION['email'])  ?  print($_SESSION['email']) : ""; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" class="form-control" name="password" required value="<?php isset($_SESSION['password'])  ?  print($_SESSION['password']) : ""; ?>">
                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                            </div>



                            <div class="mt-3 d-grid">
                                <button class="btn btn-primary waves-effect waves-light" name="submit" type="submit">Daftar</button>
                            </div>



                            <div class="mt-4 text-center">
                                <p>Already have an account ? <a href="login.php" class="fw-medium text-primary"> Signin </a> </p></a>
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