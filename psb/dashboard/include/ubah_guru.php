<?php

$query 		=	"SELECT * FROM guru where Id = $id";

$exec  		= 	mysqli_query($conn, $query);

if ($exec) {
	$data 	= mysqli_fetch_array($exec);
} else {
	echo mysqli_error($conn);
}


if (isset($_POST['submit'])) {

	$_SESSION['message'] = "";

	$valid = true;

	foreach ($_POST as $key => $val) {
		${$key} = $val;
	}

	if ($nip == "") {
		$valid = false;
	}

	if ($nama == "") {
		$valid = false;
	}

	if ($alamat == "") {
		$valid = false;
	}

	if ($telp == "") {
		$valid = false;
	}

	if ($valid == false) {
		echo '<script>alert("tidak boleh ada field yang kosong")</script>';
	} else {
		$query		=	"UPDATE guru 
						SET nama_guru = '$nama', alamat = '$alamat', telp = '$telp' 
						WHERE Id=$id";
		$exec 		=	mysqli_query($conn, $query);

		if ($exec) {
			$_SESSION['message'] = "Berhasil ubah data guru";
			echo '<script>window.location = "index.php?page=10"</script>';
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

				<a href="index.php?page=10"> <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="fa fa-arrow-left"></i> Kembali</button></a>
				<form action="" method="post">
					<div class="mb-3">
						<label class="form-label">NIP</label>
						<input type="text" class="form-control" readonly="readonly" name="nip" value="<?php echo $data['nip'] ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Guru</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $data['nama_guru'] ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<textarea name="alamat" cols="20" rows="4" class="form-control"><?php echo $data['alamat'] ?></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">No Telp/ Hp</label>
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