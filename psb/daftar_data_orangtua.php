<?php
//start the session
session_start();

$redirect = "";

if (isset($_SESSION['is_data_parent_exist'])) {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
} else {
    $redirect = "<script> window.location='daftar_syarat.php'; </script>";
}

if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $val) {
        ${$key} = $val;
        $_SESSION['' . $key . ''] = $val;
    }

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
                            <h1 style="text-align: center; margin-top:-70px">Data Orangtua</h1>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Data Ayah</h4>

                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Nama Ayah</label>
                                        <input type="text" class="form-control" name="father_name" required value="<?php isset($_SESSION['father_name'])  ?  print($_SESSION['father_name']) : ""; ?>" autofocus>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Tempat lahir</label>
                                                <input type="text" class="form-control" name="birth_place_father" value="<?php isset($_SESSION['birth_place_father'])  ?  print($_SESSION['birth_place_father']) : ""; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Tanggal lahir</label>
                                                <input type="date" class="form-control" name="birth_date_father" value="<?php isset($_SESSION['birth_date_father'])  ?  print($_SESSION['birth_date_father']) : print("1980-01-01"); ?>" required>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Pendidikan terakhir ayah</label>
                                        <input type="text" class="form-control" name="father_last_education" required value="<?php isset($_SESSION['father_last_education'])  ?  print($_SESSION['father_last_education']) : ""; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="father_job" required value="<?php isset($_SESSION['father_job'])  ?  print($_SESSION['father_job']) : ""; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <!-- <label for="formrow-firstname-input" class="form-label">Agama</label>
                                        <input type="text" class="form-control" name="father_religion" value="<?php isset($_SESSION['father_religion'])  ?  print($_SESSION['father_religion']) : ""; ?>" required> -->

                                        <label for="formrow-firstname-input" class="form-label">Agama</label>
                                        <select name="father_religion" class="form-control">
                                            <option value="" disabled selected>-- Pilih Agama --</option>

                                            <option value="Katholik" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "kt" ? print("selected") : "" ?>>Katholik</option>
                                            <option value="Kristen" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "kr" ? print("selected") : "" ?>>Kristen</option>
                                            <option value="Islam" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "I" ? print("selected") : "" ?>>Islam</option>
                                            <option value="Buddha" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "BU" ? print("selected") : "" ?>>Buddha</option>
                                            <option value="Hindu" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "Hi" ? print("selected") : "" ?>>Kristen</option>
                                            <option value="Khonghucu" <?php isset($_SESSION['father_religion']) && $_SESSION['father_religion'] == "KH" ? print("selected") : "" ?>>Khonghucu</option>
                                        </select>
                                    </div>



                                    <h4 class="card-title mb-4">Data Ibu</h4>



                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control" name="mother_name" required value="<?php isset($_SESSION['mother_name'])  ?  print($_SESSION['mother_name']) : ""; ?>" autofocus>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Tempat lahir</label>
                                                <input type="text" class="form-control" name="birth_place_mother" value="<?php isset($_SESSION['birth_place_mother'])  ?  print($_SESSION['birth_place_mother']) : ""; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Tanggal lahir</label>
                                                <input type="date" class="form-control" name="birth_date_mother" value="<?php isset($_SESSION['birth_date_mother'])  ?  print($_SESSION['birth_date_mother']) : print("1980-01-01"); ?>" required>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Pendidikan terakhir ibu</label>
                                        <input type="text" class="form-control" name="mother_last_education" value="<?php isset($_SESSION['mother_last_education'])  ?  print($_SESSION['mother_last_education']) : ""; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="mother_job" value="<?php isset($_SESSION['mother_job'])  ?  print($_SESSION['mother_job']) : ""; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <!-- <label for="formrow-firstname-input" class="form-label">Agama</label>
                                        <input type="text" class="form-control" name="mother_religion" value="<?php isset($_SESSION['mother_religion'])  ?  print($_SESSION['mother_religion']) : ""; ?>" required> -->

                                        <label for="formrow-firstname-input" class="form-label">Agama</label>
                                        <select name="mother_religion" class="form-control">
                                            <option value="" disabled selected>-- Pilih Agama --</option>

                                            <option value="Katholik" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "kt" ? print("selected") : "" ?>>Katholik</option>
                                            <option value="Kristen" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "kr" ? print("selected") : "" ?>>Kristen</option>
                                            <option value="Islam" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "I" ? print("selected") : "" ?>>Islam</option>
                                            <option value="Buddha" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "BU" ? print("selected") : "" ?>>Buddha</option>
                                            <option value="Hindu" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "Hi" ? print("selected") : "" ?>>Kristen</option>
                                            <option value="Khonghucu" <?php isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == "KH" ? print("selected") : "" ?>>Khonghucu</option>
                                        </select>


                                    </div>
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Telepon/HP</label>
                                        <input type="text" class="form-control" name="telp" value="<?php isset($_SESSION['telp'])  ?  print($_SESSION['telp']) : ""; ?>" required>
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