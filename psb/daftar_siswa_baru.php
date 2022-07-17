<?php
//start the session
session_start();

$redirect = "";

if (isset($_SESSION['is_data_student_exist'])) {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
} else {
    $redirect = "<script> window.location='daftar_data_orangtua.php'; </script>";
}

//check if button next is clicked
if (isset($_POST['submit'])) {

    //set all name attr and value to created variable
    foreach ($_POST as $key => $val) {
        ${$key} = $val;
        $_SESSION['' . $key . ''] = $val;
    }

    //check if session is not empty, then redirect to daftar_data_orangtua.php
    if (!empty($_SESSION)) {
        echo $redirect;
        print_r($_SESSION);
    }
}
?>


<!doctype html>
<html lang="en">




<head>

    <meta charset="utf-8" />
    <title>Halaman Daftar Siswa Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/assets/images/image/logo.png">

    <!-- Bootstrap Css -->
    <link href="assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">


    <div>

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12 ">
                        <div>
                            <h1 style="text-align: center; margin-top:-70px">Data Calon Siswa Baru</h1>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Isi form pendaftaran dengan benar!</h4>

                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Nama lengkap</label>
                                        <input type="text" class="form-control" name="full_name" required autofocus value="<?php isset($_SESSION['full_name'])  ?  print($_SESSION['full_name']) : ""; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Nama panggilan</label>
                                        <input type="text" class="form-control" name="nick_name" required value="<?php isset($_SESSION['nick_name'])  ?  print($_SESSION['nick_name']) : ""; ?>">
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Tempat lahir</label>
                                                <input type="text" class="form-control" name="birth_place" required value="<?php isset($_SESSION['birth_place'])  ?  print($_SESSION['birth_place']) : ""; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Tanggal lahir</label>
                                                <input type="date" class="form-control" name="birth_date" value="<?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : print("2009-01-01"); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Jenis kelamin</label>
                                        <select name="gender" class="form-control">
                                            <option value="" disabled selected>-- Pilih jenis kelamin --</option>

                                            <option value="L" <?php isset($_SESSION['gender']) && $_SESSION['gender'] == "L" ? print("selected") : "" ?>>Laki-laki</option>
                                            <option value="P" <?php isset($_SESSION['gender']) && $_SESSION['gender'] == "P" ? print("selected") : "" ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Anak ke-</label>
                                                <input type="number" class="form-control" name="child_number" value="<?php isset($_SESSION['child_number'])  ?  print($_SESSION['child_number']) : ""; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Jumlah saudara kandung</label>
                                                <input type="number" class="form-control" name="child_total" value="<?php isset($_SESSION['child_total'])  ?  print($_SESSION['child_total']) : ""; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Alamat tempat tinggal</label>
                                        <input type="text" class="form-control" name="in_jakarta_follow" value="<?php isset($_SESSION['in_jakarta_follow'])  ?  print($_SESSION['in_jakarta_follow']) : ""; ?>" required>
                                    </div>


                                    <div>
                                        <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </div>




    </div>




    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/assets/js/app.js"></script>

</body>



</html>