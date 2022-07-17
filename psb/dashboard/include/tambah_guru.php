<?php

$query = "select * from guru order by nip desc limit 1";
$baris = mysqli_query($conn, $query);
if ($baris) {
	if (mysqli_num_rows($baris) > 0) {
		$auto = mysqli_fetch_array($baris);
		$kode = $auto['nip'];
		$baru = substr($kode, 3, 7);
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

	$kode2 = "117" . $nol2 . $nol;
} else {
	echo "mysqli_error()";
}


if (isset($_POST['submit'])) {

	$_SESSION['message'] = "";

	$valid = true;
	$err   = array();

	foreach ($_POST as $key => $val) {
		${$key} = $val;
		$_SESSION['' . $key . ''] = $val;
	}

	if ($nip == "") {
		array_push($err, "nip tidak boleh kosong");
		$valid = false;
	}

	if ($nama == "") {
		array_push($err, "nama tidak boleh kosong");
		$valid = false;
	}

	if ($alamat == "") {
		array_push($err, "alamat tidak boleh kosong");
		$valid = false;
	}

	if ($telp == "") {
		array_push($err, "telp tidak boleh kosong");
		$valid = false;
	}

	if ($valid == false) {
		echo '<script>alert("tidak boleh ada field yang kosong")</script>';
	} else {
		$query		=	"INSERT INTO guru VALUES(null, '$nip', '$nama', '$alamat', '$telp')";
		$exec 		=	mysqli_query($conn, $query);

		if ($exec) {
			$_SESSION['message'] = "Berhasil tambah guru";
			echo '<script>window.location = "index.php?page=10"</script>';
		} else {
			echo mysqli_error($conn);
		}
	}
} else {
	unset($_SESSION['nip']);
	unset($_SESSION['nama']);
	unset($_SESSION['alamat']);
	unset($_SESSION['telp']);
}
?>

<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">

				<a href="index.php?page=10"> <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
				<form action="" method="post">
					<div class="mb-3">
						<label class="form-label">NIP</label>
						<input type="text" class="form-control" readonly="readonly" name="nip" value="<?php echo $kode2 ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Guru</label>
						<input type="text" class="form-control" name="nama" value="<?php isset($_SESSION['nama'])  ?  print($_SESSION['nama']) : ""; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea name="alamat" cols="20" rows="4" class="form-control"><?php isset($_SESSION['alamat'])  ?  print($_SESSION['alamat']) : ""; ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">No Telp/ Hp</label>
						<input type="text" class="form-control" name="telp" value="<?php isset($_SESSION['telp'])  ?  print($_SESSION['telp']) : ""; ?>">
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