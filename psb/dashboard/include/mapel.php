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
				<h4 class="card-title mb-4">Data Mata Pelajaran</h4>
				<div class="col-sm-12">
					<div class="text-sm-end">
						<a href="index.php?page=20"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Tambah Guru</button></a>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table align-middle table-nowrap mb-0">
						<thead class="table-light">
							<tr>
								<td><b>No</b></td>
								<td><b>Kode Mapel</b></td>
								<td><b>Nama Mata Pelajaran</b></td>
								<td><b>Aksi</b></td>
							</tr>
						</thead>
						<tbody>
							<?php

							$query = "SELECT * FROM mapel";

							$exec  = mysqli_query($conn, $query);

							if ($exec) {
								$count = mysqli_num_rows($exec);
								if ($count > 0) {
									$no = 0;
									while ($rows = mysqli_fetch_array($exec)) {


							?>
										<tr>
											<td><?php echo ++$no; ?></td>
											<td><?php echo $rows['kode_mapel_kegiatan'] ?></td>
											<td><?php echo $rows['nama_mapel_kegiatan'] ?></td>
											<td>
												<a href="index.php?page=21&id=<?php echo $rows['kode_mapel_kegiatan'] ?>" class="btn btn-success btn-sm edit"><i class="fas fa-pencil-alt"></i></a>
												<a href="include/hapus_mapel.php?id=<?php echo $rows['kode_mapel_kegiatan'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php
									}
								} else {
									?>
									<tr>
										<td colspan="6" align="center">
											<h4><b>Kosong</b></h4>
										</td>
									</tr>
							<?php
								}
							} else {
								echo mysqli_error($conn);
							}

							?>


						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>

<?php

unset($_SESSION['message']);

?>