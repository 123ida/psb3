<?php
//start the session
session_start();

if (!isset($_SESSION)) {
    echo 'ada';
    exit();
    //echo'<script> window.location="index.php"; </script> ';
}

$_SESSION['is_data_parent_exist'] = "";
$_SESSION['is_data_student_exist'] = "";
$_SESSION['is_data_account_exist'] = "";

if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $val) {
        ${$key} = $val;
        $_SESSION['' . $key . ''] = $val;
    }

    if (!empty($_SESSION)) {
        echo '<script> window.location="daftar_data_orangtua.php"; </script> ';
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



                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5 ">
                            <h4>Syarat Pendaftaran Siswa Baru SMA NEGERI 1 PANCURBATU</h4>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9" style="margin-left: 180px ;">
                        <div class="card plan-box">
                            <div class="card-body p-4 ">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h5>Berikut adalah syarat pendaftaran siswa baru yang harus dipenuhi :</h5>

                                    </div>

                                </div>



                                <div class="plan-features mt-2">
                                    <p style="color:#2ecc71 ;"><i class="bx bx-checkbox-square text-primary me-2"></i> Mengisi Formulir Pendaftaran <i class="fa fa-check"></i></p>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i> Fotocopy Akte kelahiran dan kartu keluarga</p>

                                    <h6><i><b>*Catatan : Pengembalian Formulir berikut persyaratannya paling lambar 2 minggu setelah pengisian formulir secara online</b></i></h6>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Data Calon Siswa</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0 ">
                                        <tbody>


                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        email
                                                    </div>
                                                </td>


                                                <td>:</td>



                                                <td><?php isset($_SESSION['email'])  ?  print($_SESSION['email']) : ""; ?> <a href="daftar_akun.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a></td>



                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Nama
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['full_name'])  ?  print($_SESSION['full_name']) : ""; ?></td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Nama Panggilan
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['nick_name'])  ?  print($_SESSION['nick_name']) : ""; ?></td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        TTL
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['birth_place'])  ?  print($_SESSION['birth_place']) : ""; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Jenis Kelamin
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['gender']) && $_SESSION['gender'] == "L" ? print("Laki-laki") : print("Perempuan") ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Anak Ke-
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['child_number'])  ?  print($_SESSION['child_number']) : ""; ?> dari <?php isset($_SESSION['child_total'])  ?  print($_SESSION['child_total']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Alamat
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['in_jakarta_follow'])  ?  print($_SESSION['in_jakarta_follow']) : ""; ?></td>
                                            </tr>





                                        </tbody>
                                    </table>




                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Data Orangtua</h4>

                                            <div class="page-title-right">
                                                <ol class="breadcrumb m-0">
                                                    <li class="breadcrumb-item">
                                                        <div class="text-sm-end">
                                                            <a href="daftar_data_orangtua.php"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-pencil-alt me-1"></i>Edit Data</button></a>
                                                        </div>
                                                    </li>

                                                </ol>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0 ">
                                        <tbody>


                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Nama Ayah
                                                    </div>
                                                </td>


                                                <td>:</td>



                                                <td><?php isset($_SESSION['father_name'])  ?  print($_SESSION['father_name']) : ""; ?></td>



                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        TTL
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['birth_place_father'])  ?  print($_SESSION['birth_place_father']) : ""; ?>, <?php isset($_SESSION['birth_date_father'])  ?  print($_SESSION['birth_date_father']) : "1980-01-01"; ?></td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Pendidikan Terakhir
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['father_last_education'])  ?  print($_SESSION['father_last_education']) : ""; ?></td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Pekerjaan
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['father_job'])  ?  print($_SESSION['father_job']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Agama
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['father_religion'])  ?  print($_SESSION['father_religion']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Nama Ibu
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['mother_name'])  ?  print($_SESSION['mother_name']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        TTL
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['birth_place_mother'])  ?  print($_SESSION['birth_place_mother']) : ""; ?>, <?php isset($_SESSION['birth_date_mother'])  ?  print($_SESSION['birth_date_mother']) : "1980-01-01"; ?></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Pendidikan Terakhir
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['mother_last_education'])  ?  print($_SESSION['mother_last_education']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Pekerjaan
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['mother_job'])  ?  print($_SESSION['mother_job']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Agama
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['mother_religion'])  ?  print($_SESSION['mother_religion']) : ""; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-group-item">
                                                        Telepon/Hp
                                                    </div>
                                                </td>
                                                <td>:</td>
                                                <td><?php isset($_SESSION['telp'])  ?  print($_SESSION['telp']) : ""; ?></td>
                                            </tr>




                                        </tbody>
                                    </table>





                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18">Anda yakin data diatas benar?</h4>

                                            <div class="page-title-right">
                                                <ol class="breadcrumb m-0">
                                                    <li class="breadcrumb-item">
                                                        <div class="text-sm-end">
                                                            <a href="proses_simpan_pendaftaran.php"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Yakin, kirim data pendaftaran</button></a>
                                                        </div>
                                                    </li>

                                                </ol>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
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