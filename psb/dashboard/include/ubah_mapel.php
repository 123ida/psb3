<h1>Ubah Data siswa</h1>

<?php
$query 		=	"SELECT * FROM mapel where kode_mapel_kegiatan = '$id'";

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

	if ($kode_mapel_kegiatan == "") {
		$valid = false;
	}

	if ($nama == "") {
		$valid = false;
	}


	if ($valid == false) {
		echo '<script>alert("tidak boleh ada field yang kosong")</script>';
	} else {
		$query		=	"UPDATE mapel 
						SET nama_mapel_kegiatan = '$nama' 
						WHERE kode_mapel_kegiatan='$id'";
		$exec 		=	mysqli_query($conn, $query);

		if ($exec) {
			$_SESSION['message'] = "Berhasil ubah data Mapel";
			echo '<script>window.location = "index.php?page=19"</script>';
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
						<label class="form-label">Kode Mapel</label>
						<input type="text" class="form-control" readonly="readonly" name="kode_mapel_kegiatan" value="<?php echo $data['kode_mapel_kegiatan'] ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Guru</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $data['nama_mapel_kegiatan'] ?>">
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