<?php

$queryx     =   "SELECT * FROM detail_pendaftaran WHERE id_user = $id";
$execx      =   mysqli_query($conn, $queryx);
if ($execx) {
	$daftar = mysqli_fetch_array($execx);
} else {
	echo 'gagal';
}

?>


<div class="row">
	<div class="col-lg-11" style="margin-left: 60px;">
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
				<h3 class=" mb-2">Print Kwitansi biaya pendaftaran yang harus dibayarkan. Ketentuan setelah pembayaran sebagai berikut:</h3>
				<hr>
				<h4 class=" mb-2">Kelas A : </h4>
				<div class="plan-features mt-2">
					<!-- <p><i class="bx bx-checkbox-square text-primary me-2"></i> Siswa berusia 12 tahun 6 bulan, akan masuk ke dalam kelas A, sedangkan Siswa berusia lebih dari 13 tahun 6 bulan akan masuk ke dalam kelas B <i class="fa fa-check"></i></p>
					<p><i class="bx bx-checkbox-square text-primary me-2"></i> Perhitungan Usia akan di hitung otomatis oleh sistem, tegantung dari usia yang telah diinputkan dalam form pendaftaran siswa secara online sebelumnya oleh pendaftar</p> -->



				</div>
				<div class="table-responsive">
					<table class="table table-nowrap align-middle mb-0 ">
						<thead>
							<tr>
								<th>Jenis Pengeluaran</th>
								<th align="right">Biaya</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Uang pangkal gedung</td>
								<td align="right">350.000</td>
							</tr>
							<tr>
								<td>Uang Administrasi dan Seragam 5 Hari</td>
								<td align="right">445.000</td>
							</tr>
							<tr>
								<td>Uang pembayaran bulan 1 (pertama)</td>
								<td align="right">85.000</td>
							</tr>
							<tr>
								<td align="center"><b>Total</b></td>
								<td align="right"><b>Rp.880.000</b></td>
							</tr>
						</tbody>
					</table>




				</div>

				<br>

				<div class="row">
					<div class="col-12">
						<div class="page-title-box d-sm-flex align-items-center justify-content-between">


							<h4 class=" mb-2">Kelas B : </h4>



						</div>
						<table class="table table-nowrap align-middle mb-0 ">
							<thead>
								<tr>
									<th>Jenis Pengeluaran</th>
									<th align="right">Biaya</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Uang pangkal gedung</td>
									<td align="right">350.000</td>
								</tr>
								<tr>
									<td>Uang Administrasi dan Seragam 5 Hari</td>
									<td align="right">445.000</td>
								</tr>
								<tr>
									<td>Uang pembayaran bulan 1 (pertama)</td>
									<td align="right">85.000</td>
								</tr>
								<tr>
									<td align="center"><b>Total</b></td>
									<td align="right"><b>Rp.880.000</b></td>
								</tr>
							</tbody>
						</table>

						<?php
						if ($daftar['status_pendaftaran'] == 1) {

							// echo '<a href="../assets/uploads/kwitansi-pembayaran.jpeg" class="btn btn-primary btn-md pull-left" download><i class="fa fa-print"></i> Cetak biaya yang harus dibayar untuk pendaftaran</a>';
							if ($daftar['metode_pembayaran_pendaftaran'] != "") {
								echo '<a href="index.php?page=13&metode_pembayaran=' . $daftar['metode_pembayaran_pendaftaran'] . '&status=true" class="btn btn-primary btn-md pull-left"><i class="fa fa-print"></i>Cetak biaya yang harus dibayar untuk pendaftaran  </a>';
							} else {
								echo '
								<a href="#" class=" btn-md pull-left" download data-toggle="modal" data-bs-target="#myModal"></a>';
							}



							echo '<br><br>';
						} else if ($daftar['status_pendaftaran'] == 2) {
							echo "<div class='alert alert-warning alert-dismissable'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              <strong>Anda sudah melakukan pembayaran</strong> 
                            </div>";
						} else if ($daftar['status_pendaftaran'] == 0) {
							echo "<div class='alert alert-warning alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Persyaratan sudah lengkap. tunggu konfirmasi admin paling lambat 2 hari kerja</strong> 
                </div>";
						} else if ($daftar['status_pendaftaran'] == 4) {
							echo "<div class='alert alert-warning alert-dismissable'>
			      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			      <strong>Pembayaran Pendaftaran sudah lunas</strong>
			    </div>";
						} else if ($daftar['status_pendaftaran'] == 3) {
							echo "<div class='alert alert-warning alert-dismissable'>
			      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			      <strong>Pembayaran Pendaftaran lunas di Cicilan ke -1</strong>
			    </div>";
						} else {
							echo "<div class='alert alert-warning alert-dismissable'>
			      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			      <strong>Pendaftaran anda belum dikonfirmasi oleh Admin.</strong> Tunggu konfirmasi admin untuk tahap selanjutnya.
			    </div>";
						}

						?>

					</div>


				</div>



				<button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-print"></i> Cetak biaya yang harus dibayar untuk pendaftaran</a< /button>



			</div>
		</div>

	</div>

</div>








<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pilih Metode Pembayaran</h4>
			</div>
			<div class="modal-body">
				<form action="index.php?page=13" method="get">
					<input type="hidden" name="page" value="13">
					<div class="form-group">
						<label for="">Metode Pembayaran</label>
						<select name="metode_pembayaran" class="form-group">
							<option value="0">Lunas</option>
							<option value="1">Cicil (2x)</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Pilih</button>
				</form>
			</div>
		</div>

	</div>
</div>