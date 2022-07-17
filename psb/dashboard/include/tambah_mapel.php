<?php

$query = "select * from mapel order by kode_mapel_kegiatan desc limit 1";
$baris = mysqli_query($conn, $query);
if ($baris) {
	if (mysqli_num_rows($baris) > 0) {
		$auto = mysqli_fetch_array($baris);
		$kode = $auto['kode_mapel_kegiatan'];
		$baru = substr($kode, 2, 4);
		//$nilai=$baru+1;
		$nol = (int)$baru;
	} else {
		$nol = 0;
	}
	$nol = $nol + 1;
	$nol2 = "";
	$nilai = 4 - strlen($nol);
	for ($i = 1; $i <= $nilai; $i++) {
		$nol2 = $nol2 . "0";
	}

	$kode2 = "P" . $nol2 . $nol;
} else {
	echo mysqli_error($conn);
}


if (isset($_POST['submit'])) {

	$_SESSION['message'] = "";

	$valid = true;
	$err   = array();

	foreach ($_POST as $key => $val) {
		${$key} = $val;
		$_SESSION['' . $key . ''] = $val;
	}

	if ($kode_mapel_kegiatan == "") {
		array_push($err, "kode_mapel_kegiatan tidak boleh kosong");
		$valid = false;
	}

	if ($nama == "") {
		array_push($err, "nama tidak boleh kosong");
		$valid = false;
	}


	if ($valid == false) {
		echo '<script>alert("tidak boleh ada field yang kosong")</script>';
	} else {
		$query		=	"INSERT INTO mapel VALUES('$kode_mapel_kegiatan', '$nama')";
		$exec 		=	mysqli_query($conn, $query);

		if ($exec) {
			$_SESSION['message'] = "Berhasil tambah mapel";
			echo '<script>window.location = "index.php?page=19"</script>';
		} else {
			echo mysqli_error($conn);
		}
	}
} else {
	unset($_SESSION['kode_mapel_kegiatan']);
	unset($_SESSION['nama']);
}
?>


<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Mata Pelajaran</h4>


		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">

				<a href="index.php?page=19"> <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
				<form action="" method="post">
					<div class="mb-3">
						<label class="form-label">Kode Mapel</label>
						<input type="text" class="form-control" readonly="readonly" name="kode_mapel_kegiatan" value="<?php echo $kode2 ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Mapel</label>
						<input type="text" class="form-control" name="nama" value="<?php isset($_SESSION['nama'])  ?  print($_SESSION['nama']) : ""; ?>">
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