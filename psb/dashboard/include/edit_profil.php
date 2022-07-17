<?php

$query         =    "SELECT  * FROM pendaftaran where Id = $id ";



$exec          =     mysqli_query($conn, $query);

if ($exec) {
    $data     = mysqli_fetch_array($exec);
} else {
    echo mysqli_error($conn);
}


if (isset($_POST['submit'])) {

    $_SESSION['message'] = "";

    $valid = true;

    foreach ($_POST as $key => $val) {
        ${$key} = $val;
    }

    if ($nama == "") {
        $valid = false;
    }

    if ($nama_panggilan == "") {
        $valid = false;
    }

    if ($tempat_lahir == "") {
        $valid = false;
    }

    if ($tanggal_lahir == "") {
        $valid = false;
    }
    if ($jenis_kelamin == "") {
        $valid = false;
    }
    if ($anak_ke == "") {
        $valid = false;
    }
    if ($jumlah_saudara == "") {
        $valid = false;
    }
    if ($di_jakarta_ikut == "") {
        $valid = false;
    }
    if ($nama_ayah == "") {
        $valid = false;
    }
    if ($tempat_lahir_ayah == "") {
        $valid = false;
    }
    if ($tanggal_lahir_ayah == "") {
        $valid = false;
    }
    if ($pendidikan_terakhir_ayah == "") {
        $valid = false;
    }
    if ($pekerjaan_ayah == "") {
        $valid = false;
    }
    if ($agama_ayah == "") {
        $valid = false;
    }
    if ($nama_ibu == "") {
        $valid = false;
    }
    if ($tempat_lahir_ibu == "") {
        $valid = false;
    }
    if ($tanggal_lahir_ibu == "") {
        $valid = false;
    }
    if ($pendidikan_terakhir_ibu == "") {
        $valid = false;
    }
    if ($pekerjaan_ibu == "") {
        $valid = false;
    }
    if ($agama_ibu == "") {
        $valid = false;
    }
    if ($telp == "") {
        $valid = false;
    }

    if ($valid == false) {
        echo '<script>alert("tidak boleh ada field yang kosong")</script>';
    } else {
        $query        =    "UPDATE pendaftaran 
						SET nama = '$nama',
                         nama_panggilan = '$nama_panggilan',
                        tempat_lahir='$tempat_lahir',
                        tanggal_lahir='$tanggal_lahir',
                       jenis_kelamin='$jenis_kelamin',
                       anak_ke='$anak_ke',
                       jumlah_saudara='$jumlah_saudara',
                       di_jakarta_ikut='$di_jakarta_ikut',
                       nama_ayah='$nama_ayah',
                       tempat_lahir_ayah='$tempat_lahir_ayah',
                       tanggal_lahir_ayah='$tanggal_lahir_ayah',
                       pendidikan_terakhir_ayah='$pendidikan_terakhir_ayah',
                       pekerjaan_ayah='$pekerjaan_ayah',
                       agama_ayah='$agama_ayah',
                       nama_ibu='$nama_ibu',
                       tempat_lahir_ibu='$tempat_lahir_ibu',
                       tanggal_lahir_ibu='$tanggal_lahir_ibu',
                       pendidikan_terakhir_ibu='$pendidikan_terakhir_ibu',
                       pekerjaan_ibu='$pekerjaan_ibu',
                       agama_ibu='$agama_ibu',
                         telp = '$telp' 
						WHERE Id=$id";
        $exec         =    mysqli_query($conn, $query);

        if ($exec) {
            $_SESSION['message'] = "Berhasil ubah profil Siswa";
            echo '<script>window.location = "index.php?page=2"</script>';
        } else {
            echo mysqli_error($conn);
        }
    }
}
?>


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <a href="index.php?page=2"> <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <form action="" method="post">
                    <!-- <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" readonly="readonly" name="email" value="<?php echo $data['email'] ?>">
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">Nama </label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" name="nama_panggilan" value="<?php echo $data['nama_panggilan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">TTL</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">tanggal_lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <label for="formrow-firstname-input" class="form-label">Jenis kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="" disabled selected>-- Pilih jenis kelamin --</option>

                            <option value="L" <?php isset($_SESSION['jenis_kelamin']) && $_SESSION['jenis_kelamin'] == "L" ? print("selected") : "" ?>>Laki-laki</option>
                            <option value="P" <?php isset($_SESSION['jenis_kelamin']) && $_SESSION['jenis_kelamin'] == "P" ? print("selected") : "" ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Anak Ke-</label>
                        <input type="text" class="form-control" name="anak_ke" value="<?php echo $data['anak_ke'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="di_jakarta_ikut" value="<?php echo $data['di_jakarta_ikut'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" value="<?php echo $data['nama_ayah'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" name="tempat_lahir_ayah" value="<?php echo $data['tempat_lahir_ayah'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir Ayah</label>
                        <input type="date" class="form-control" name="tanggal_lahir_ayah" value="<?php echo $data['tanggal_lahir_ayah'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir_ayah" value="<?php echo $data['pendidikan_terakhir_ayah'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" value="<?php echo $data['nama_ibu'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir Ibu</label>
                        <input type="text" class="form-control" name="tempat_lahir_ibu" value="<?php echo $data['tempat_lahir_ibu'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir Ibu</label>
                        <input type="date" class="form-control" name="tanggal_lahir_ibu" value="<?php echo $data['tanggal_lahir_ibu'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir_ibu" value="<?php echo $data['pendidikan_terakhir_ibu'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu'] ?>">
                    </div>
                    <div class="mb-3">


                        <label for="formrow-firstname-input" class="form-label">Agama</label>
                        <select name="agama_ibu" class="form-control">
                            <option value="" disabled selected><?php echo $data['agama_ibu'] ?></option>

                            <option value="Katholik" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "kt" ? print("selected") : "" ?>>Katholik</option>
                            <option value="Kristen" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "kr" ? print("selected") : "" ?>>Kristen</option>
                            <option value="Islam" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "I" ? print("selected") : "" ?>>Islam</option>
                            <option value="Buddha" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "BU" ? print("selected") : "" ?>>Buddha</option>
                            <option value="Hindu" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "Hi" ? print("selected") : "" ?>>Kristen</option>
                            <option value="Khonghucu" <?php isset($_SESSION['agama_ibu']) && $_SESSION['agama_ibu'] == "KH" ? print("selected") : "" ?>>Khonghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">telp</label>
                        <input type="text" class="form-control" name="telp" value="<?php echo $data['telp'] ?>">
                    </div>


                    <div>
                        <button type="submit" name="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                        <button type="reset" class="btn btn-warning pull-right"><i class="fa fa-eraser"></i> Bersihkan</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->


</div>