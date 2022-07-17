<?php
if (isset($_POST['submit'])) {

	$_SESSION['message'] = "";

	$valid = true;
	$err   = array();

	foreach ($_POST as $key => $val) {
		${$key} = $val;
		$_SESSION['' . $key . ''] = $val;
	}

	if ($mapel == "") {
		array_push($err, "Mapel harus dipilih");
		$valid = false;
	}

	if ($hari == "") {
		array_push($err, "hari harus dipilih");
		$valid = false;
	}


	if ($valid == false) {
		echo '<script>alert("tidak boleh ada field yang kosong")</script>';
	} else {
		$query		=	"INSERT INTO jadwal VALUES(null,$hari, '$mapel','$kelas')";
		$exec 		=	mysqli_query($conn, $query);

		if ($exec) {
			$_SESSION['message'] = "Berhasil tambah Jadwal";
			echo '<script>window.location = "index.php?page=22"</script>';
		} else {
			echo mysqli_error($conn);
		}
	}
} else {
	unset($_SESSION['hari']);
	unset($_SESSION['mapel']);
}
?>




<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Jadwal <?php echo $kelas; ?></h4>


		</div>
	</div>
</div>



<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">

				<a href="index.php?page=22"> <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
				<form action="" method="post">
					<div class="mb-3">
						<label class="form-label">Mata Pelajaran</label>
						<select name="mapel" id="mapel" class="form-control">
							<option value="" selected disabled>-- Pilih Mata Pelajaran --</option>
							<?php
							$queryMapel	=	"SELECT * FROM mapel";
							$execMapel	=	mysqli_query($conn, $queryMapel);
							if ($execMapel) {
								while ($mapel = mysqli_fetch_array($execMapel)) {
							?>
									<option value="<?php echo $mapel['kode_mapel_kegiatan'] ?>"><?php echo $mapel['kode_mapel_kegiatan'] ?> - <?php echo $mapel['nama_mapel_kegiatan'] ?></option>
							<?php
								}
							}
							?>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Hari</label>
						<select name="hari" id="mapel" class="form-control">
							<option value="" selected disabled>-- Pilih Hari --</option>
							<?php
							$queryMapel	=	"SELECT * FROM hari";
							$execMapel	=	mysqli_query($conn, $queryMapel);
							if ($execMapel) {
								while ($mapel = mysqli_fetch_array($execMapel)) {
							?>
									<option value="<?php echo $mapel['Id'] ?>"><?php echo $mapel['nama_hari'] ?></option>
							<?php
								}
							}
							?>
						</select>
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