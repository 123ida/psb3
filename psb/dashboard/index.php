<?php

include '../auth.php';
include '../koneksi/koneksi.php';

$role = "";

$id     = $_SESSION['auth'];


if ($_SESSION['role_user'] == 0) {
    $role = "Admin";
    $query      = "SELECT * FROM akun WHERE id = $id";

    $exec       = mysqli_query($conn, $query);

    if ($exec) {

        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key => $val) {
                ${$key} = $val;
            }
        }
    }
} else {
    $role = "User";
    $query      = "SELECT a.*,b.* FROM pendaftaran a, akun b WHERE a.id = $id AND b.id_user=$id";

    $exec       = mysqli_query($conn, $query);


    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key => $val) {
                ${$key} = $val;
            }
        }
    }
}




$getPage = $_GET['page'];

switch ($getPage) {
    case 1:
        $page                 = "include/home.php";
        $_SESSION['active']    = "1";
        break;
    case 2:
        $page                 = "include/profile.php";
        $_SESSION['active']    = "2";
        break;
    case 3:
        $page                 = "include/edit_profile.php";
        $_SESSION['active']    = "2";
        break;
    case 4:
        $page                 = "include/syarat_pendaftaran.php";
        $_SESSION['active'] = "3";
        break;
    case 5:
        $page                 = "include/upload_akte.php";
        $_SESSION['active'] = "3";
        break;
    case 6:
        $page                 = "include/upload_foto2r.php";
        $_SESSION['active'] = "3";
        break;
    case 7:
        $page                 = "include/konfirmasi_pendaftaran.php";
        $_SESSION['active']    = "4";
        break;
    case 8:
        $page               = "include/detail_pendaftaran.php";
        $ida                = $_GET['ida'];
        $idd                = $_GET['idd'];
        $_SESSION['active'] = "4";
        break;
    case 9:
        $page               = "include/pembayaran.php";
        $_SESSION['active'] = "5";
        break;
    case 10:
        $page               = "include/guru.php";
        $_SESSION['active'] = 6;
        break;
    case 11:
        $page               = "include/tambah_guru.php";
        $_SESSION['active'] = 6;
        break;
    case 12:
        $page               = "include/ubah_guru.php";
        $_SESSION['active'] = 6;
        $id                 = $_GET['id'];
        break;
    case 13:
        $page               = "include/review_pembayaran_pendaftaran.php";
        $_SESSION['active'] = '5';
        break;
    case 14:
        $page               =  "include/konfirmasi_pembayaran_user.php";
        $_SESSION['active'] = '7';
        break;
    case 15:
        $page               =  "include/konfirmasi_pembayaran_pendaftaran.php";
        $_SESSION['active'] = '7';
        break;
    case 16:
        $page               = "include/konfirmasi_pembayaran_spp.php";
        $_SESSION['active'] = '7';
        break;
    case 17:
        $page               = "include/konfirmasi_pembayaran_pendaftaran_admin.php";
        $_SESSION['active'] = '8';
        break;
    case 18:
        $page               = "include/laporan.php";
        $_SESSION['active'] = "9";
        break;
    case 19:
        $page               = "include/mapel.php";
        $_SESSION['active'] = "10";
        break;
    case 20:
        $page               = "include/tambah_mapel.php";
        $_SESSION['active'] = "10";
        break;
    case 21:
        $page               = "include/ubah_mapel.php";
        $_SESSION['active'] = "10";
        $id                 = $_GET['id'];
        break;
    case 22:
        $page               = "include/jadwal.php";
        $_SESSION['active'] = "11";
        break;
    case 23:
        $page               = "include/tambah_jadwal.php";
        $_SESSION['active'] = "11";
        $kelas              = $_GET['kelas'];
        break;
    case 24:
        $page               = "include/jadwal_user.php";
        $_SESSION['active'] = "12";
        break;
    case 25:
        $page               = "include/konfirmasi_pembayaran_spp_admin.php";
        $_SESSION['active'] = "13";
        break;
    case 26:
        $page               = "include/konfirmasi_pembayaran_kegiatan_admin.php";
        $_SESSION['active'] = "14";
        break;
    case 27:
        $page               = "include/konfirmasi_pembayaran_kegiatan.php";
        $_SESSION['active'] = "7";
        break;
    case 28:
        $page               = "include/edit_profil.php";
        $_SESSION['active'] = "2";
        break;
    default:
        $page     = "include/home.php";
        $_SESSION['active']    = "1";
        break;
}

?>



<!doctype html>
<html lang="en">



<head>

    <meta charset="utf-8" />
    <title>Dashboard <?php echo $role; ?></title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/image/logo.png">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark">


    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">

                        <a href="#" class="logo" style="color: white; font-size:15px;">
                            <p href="">SMA NEGERI 1 PANCURBATU
                            </p>

                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>




                </div>

                <div class="d-flex">



                </div>
            </div>


    </div>
    </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>



                    <li>
                        <a class="<?php $_SESSION['active'] == 4 ? print("active") : print("") ?>" href="index.php?page=1">
                            <i class="bx bx-store"></i>
                            <span key="t-ecommerce">Home</span>
                        </a>

                    </li>

                    <?php
                    if ($role == "User") {
                    ?>
                        <li>
                            <a class="<?php $_SESSION['active'] == 2 ? print("active") : print("") ?>" href="index.php?page=2">
                                <i class="bx bx-user"></i>
                                <span key="t-ecommerce">User Profile</span>
                            </a>

                        </li>
                    <?php
                    }
                    ?>
                    <?php
                    if ($role == "Admin") {
                    ?>


                        <li>
                            <a class="<?php $_SESSION['active'] == 6 ? print("active") : print("") ?>" href="index.php?page=10">

                                <i class="bx bx-user"></i>
                                <span key="t-ecommerce">Guru</span>
                            </a>

                        </li>


                        <li>
                            <a href="javascript:void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-credit-card"></i>
                                <span key="t-ecommerce">Konfirmasi Pendaftaran</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li class="<?php $_SESSION['active'] == 4 ? print("active") : print("") ?>"><a href="index.php?page=7" key="t-products">Konfirmasi Pendaftaran</a></li>
                                <li class="<?php $_SESSION['active'] == 8 ? print("active") : print("") ?>"><a href="index.php?page=17" key="t-products">Konfir. Pembayaran Pendaftaran</a></li>
                                <li class="<?php $_SESSION['active'] == 13 ? print("active") : print("") ?>"><a href="index.php?page=25" key="t-product-detail">Konfir Pembayaran SPP</a></li>
                                <li class="<?php $_SESSION['active'] == 14 ? print("active") : print("") ?>"><a href="index.php?page=26" key="t-product-detail">Konfir Pembayaran Kegiatan</a></li>

                            </ul>
                        </li>

                        <li class="<?php $_SESSION['active'] == 9 ? print("active") : print("") ?>">
                            <a href="index.php?page=18">
                                <i class="bx bx-file"></i>
                                <span key="t-ecommerce">Laporan</span>
                            </a>

                        </li>
                        <li class="<?php $_SESSION['active'] == 10 ? print("active") : print("") ?>">
                            <a href="index.php?page=19">
                                <i class="bx bx-calendar-check"></i>
                                <span key="t-ecommerce">Mata Pelajaran</span>
                            </a>

                        </li>
                        <li class="<?php $_SESSION['active'] == 11 ? print("active") : print("") ?>">
                            <a href="index.php?page=22">
                                <i class="bx bx-calendar-check"></i>
                                <span key="t-ecommerce">Jadwal</span>
                            </a>

                        </li>
                    <?php
                    }
                    ?>




                    <?php
                    if ($role == "User") {
                    ?>
                        <li class="<?php $_SESSION['active'] == 3 ? print("active") : print("") ?>">
                            <a href="index.php?page=4">
                                <i class="bx bx-note"></i>
                                <span key="t-ecommerce">Syarat Pendaftaran</span>
                            </a>

                        </li>
                        <li class="<?php $_SESSION['active'] == 5 ? print("active") : print("") ?>">
                            <a href="index.php?page=9">
                                <i class="bx bx-credit-card"></i>
                                <span key="t-ecommerce">Pembayaran</span>
                            </a>

                        </li>
                        <li class="<?php $_SESSION['active'] == 7 ? print("active") : print("") ?>">
                            <a href="index.php?page=14">
                                <i class="bx bx-credit-card"></i>
                                <span key="t-ecommerce">Konfirmasi Pembayaran</span>
                            </a>

                        </li>
                        <li class="<?php $_SESSION['active'] == 12 ? print("active") : print("") ?>">
                            <a href="index.php?page=24">

                                <i class="bx bx-calendar-check"></i>
                                <span key="t-ecommerce">Jadwal</span>
                            </a>

                        </li>

                    <?php
                    }
                    ?>




                    <li>
                        <a href="../logout.php">

                            <i class="bx bx-exit text-danger"></i>
                            <span key="t-ecommerce">Logout</span>
                        </a>

                    </li>



                </ul>
            </div>

        </div>
    </div>


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <?php

                include $page;

                ?>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->





        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © SMA
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            SMA NEGERI 1 PANCURBATU
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>



    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>


    <script>
        $(document).ready(function() {
            $("#cetak").click(function() {
                window.print();
            });
        });
    </script>
</body>




</html>