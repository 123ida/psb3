<?php

include '../koneksi/koneksi.php';

if (isset($_POST['upload'])) {
    $targetfolderBase   = "assets/uploads/";

    $fileNameFotoAnak   = date("h-m-s") . basename($_FILES['foto_anak']['name']);
    $fileNameFotoKeluarga   = date("h-m-s") . basename($_FILES['foto_keluarga']['name']);

    $targetfolder   = $targetfolderBase . $fileNameFotoAnak;
    $targetfolder2  = $targetfolderBase . $fileNameFotoKeluarga;


    $ok = 1;

    $file_type = $_FILES['foto_anak']['type'];
    $file_type2 = $_FILES['foto_keluarga']['type'];


    if ($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "application/pdf") {

        if (move_uploaded_file($_FILES['foto_anak']['tmp_name'], $targetfolder)) {

            $query  = "UPDATE pendaftaran SET foto_anak='$fileNameFotoAnak' WHERE id=$id";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
                echo "<div class='alert alert-success alert-dismissable'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Berhasil!</strong> Upload Akte(PDF, JPEG, PNG).
            </div>";
            }
        } else {

            echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Akte(PDF, JPEG, PNG).
        </div>";
        }
    } else {

        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Akte harus format(.PDF, JPEG, PNG).
        </div>";
    }

    if ($file_type2 == "image/jpeg" || $file_type2 == "image/png" || $file_type2 == "application/pdf") {
        if (move_uploaded_file($_FILES['foto_keluarga']['tmp_name'], $targetfolder2)) {

            $query  = "UPDATE pendaftaran SET foto_keluarga='$fileNameFotoKeluarga' WHERE id=$id";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
                echo "<div class='alert alert-success alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Berhasil!</strong> Upload Kartu Keluarga(PDF, JPEG, PNG).
                </div>";
            }
        } else {

            echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Kartu Keluarga(PDF, JPEG, PNG).
        </div>";
        }
    } else {
        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Kartu Kelarga harus format(PDF, JPEG, PNG).
        </div>";
    }
}

?>


<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title mb-2 me-2">Upload Ijazah(PDF, JPEG, PNG) dan SKHUN(PDF, JPEG, PNG)</h4>
                <hr>
                <a href="index.php?page=4"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>



                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">


                        <div class="form-group floating-label">
                            <label class="col-sm-12">Ijazah (PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" name="foto_anak" type="file" style="display:none" onchange="$('#upload-file-info').html(this.files[0].name)">
                                Upload Ijazah (PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group floating-label">
                            <label class="col-sm-12">SKHUN (PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector2">
                                <input id="my-file-selector2" name="foto_keluarga" type="file" style="display:none" onchange="$('#upload-file-info2').html(this.files[0].name)">
                                Upload SKHUN (PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info2"></span>
                        </div>
                    </div>

                    <hr>


                    <button type="submit" name="upload" class="btn btn-danger blue pull-right"><i class="fa fa-upload"></i> Upload File</button>
                </form>






            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->


</div>