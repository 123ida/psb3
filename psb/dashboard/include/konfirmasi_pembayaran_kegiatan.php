<?php

$queryx     =   "SELECT * FROM detail_pendaftaran WHERE id_user = $id";
$execx      =   mysqli_query($conn, $queryx);
if ($execx) {
    $daftar = mysqli_fetch_array($execx);
} else {
    echo 'gagal';
}

$idetail    =   $daftar['Id'];
$kelas      =   $daftar['kelas'];
$id_user    =   $daftar['id_user'];

if (isset($_POST['upload'])) {
    $targetfolderBase   = "assets/uploads/";

    $fileNameBukti   = date("h-m-s") . basename($_FILES['bukti']['name']);

    $targetfolder   = $targetfolderBase . $fileNameBukti;

    $tanggal_pembayaran =   date("Y-m-d");

    $ok = 1;

    $file_type = $_FILES['bukti']['type'];



    if ($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "application/pdf") {
        if (move_uploaded_file($_FILES['bukti']['tmp_name'], $targetfolder)) {

            $queryUpload    =     "UPDATE detail_pendaftaran 
								SET biaya_kegiatan=500000, bukti_konfirmasi_pembayaran_kegiatan='$fileNameBukti', 
								tanggal_kegiatan='$tanggal_pembayaran' 
								WHERE id_user=$id";

            $execUpload        =    mysqli_query($conn, $queryUpload);

            if ($execUpload) {
                echo "<div class='alert alert-success alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Berhasil!</strong> Upload bukti pembayaran pendaftaran.
                </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Gagal!</strong> Upload bukti pembayaran pendaftaran.
                </div>";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissable'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Gagal!</strong> Terjadi kesalahan upload.
            </div>";
        }
    } else {
        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Format tidak sesuai. harus format PNG/JPEG/PDF.
        </div>";
    }
}

?>




<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title mb-2 me-2">Upload bukti pembayaran Kegiatan dalam format yang ditentukan (PNG/JPEG/PDF)</h4>
                <hr>
                <a href="index.php?page=14"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">


                        <div class="form-group floating-label">
                            <label class="col-sm-12">Bukti Pembayaran/Struk Transfer (PNG/JPEG/PDF) : </label>
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" name="bukti" type="file" style="display:none" onchange="$('#upload-file-info').html(this.files[0].name)">
                                upload bukti pembayaran (PNG/JPEG/PDF)
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>



                    </div>


                    <hr>
                    <button type="submit" name="upload" class="btn btn-primary blue pull-right"><i class="fa fa-upload"></i> Upload File</button>
                </form>





            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>



</div>