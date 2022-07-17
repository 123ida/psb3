<?php
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> " . $_SESSION['message'] . "
    </div>";
}
?>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Biodata Pendaftar Siswa SMA NEGERI1 PANCURBATU</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <div class="text-sm-end">
                                            <a href="index.php?page=28"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Edit Profil</button></a>
                                        </div>
                                    </li>

                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">

                        <tbody>
                            <tr>
                                <td><b>Email</b></td>
                                <td>: <?php echo $email; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td>: <?php echo $nama; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama panggilan</b></td>
                                <td>: <?php echo $nama_panggilan;; ?></td>
                            </tr>
                            <tr>
                                <td><b>TTL</b></td>
                                <td>: <?php echo $tempat_lahir . ", " . $tanggal_lahir;; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis kelamin</b></td>
                                <td>: <?php echo $jenis_kelamin; ?></td>
                            </tr>

                            <tr>
                                <td><b>Anak ke-</b></td>
                                <td>: <?php echo $anak_ke . " dari " . $jumlah_saudara ?> bersaudara</td>
                            </tr>

                            <tr>
                                <td><b>Alamat</b></td>
                                <td>: <?php echo $di_jakarta_ikut; ?></td>
                            </tr>


                        </tbody>

                    </table>
                    <h4 class="card-title mb-4 mt-4">Biodata Data Orangtua</h4>
                    <table class="table align-middle table-nowrap mb-0">

                        <tbody>
                            <tr>
                                <td><b>Nama Ayah</b></td>
                                <td>: <?php echo $nama_ayah;; ?></td>
                            </tr>
                            <tr>
                                <td><b>TTL</b></td>
                                <td>: <?php echo $tempat_lahir_ayah . ", " . $tanggal_lahir_ayah; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pendidikan terakhir</b></td>
                                <td>: <?php echo $pendidikan_terakhir_ayah;; ?></td>
                            </tr>

                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>: <?php echo $pekerjaan_ayah; ?></td>
                            </tr>

                            <!-- <tr>
                                <td><b>Agama</b></td>
                                <td>: <?php echo $agama_ayah; ?></td>
                            </tr> -->
                            <tr>
                                <td><b>Nama Ibu</b></td>
                                <td>: <?php echo $nama_ibu;; ?></td>
                            </tr>
                            <tr>
                                <td><b>TTL</b></td>
                                <td>: <?php echo $tempat_lahir_ibu . ", " . $tanggal_lahir_ibu; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pendidikan terakhir</b></td>
                                <td>: <?php echo $pendidikan_terakhir_ibu; ?></td>
                            </tr>

                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>: <?php echo $pekerjaan_ibu; ?></td>
                            </tr>

                            <tr>
                                <td><b>Agama</b></td>
                                <td>: <?php echo $agama_ibu; ?></td>
                            </tr>
                            <tr>
                                <td><b>Telp/HP</b></td>
                                <td>: <?php echo $telp; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>