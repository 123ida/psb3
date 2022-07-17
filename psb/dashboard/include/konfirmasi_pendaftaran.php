<?php
if (isset($_SESSION['message'])) {
	echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> Konfirmasi pendaftaran.
    </div>";
}
?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title mb-4">Konfirmasi Pendaftaran</h4>
				<div class="table-responsive">
					<table class="table align-middle table-nowrap mb-0">
						<thead class="table-light">
							<tr>
								<td><b>No</b></td>
								<td><b>Nama Pendaftar</b></td>
								<td><b>Email</b></td>
								<td><b>Status Pendaftaran</b></td>
								<td><b>Aksi</b></td>
							</tr>
						</thead>
						<tbody>
							<?php
							$query 	= "SELECT a.nama, a.id as id_daftar, b.id as id_akun,b.email,c.* 
				    				FROM pendaftaran a, akun b, detail_pendaftaran c 
						    		WHERE a.id=b.id_user 
						    		AND b.role_user=1 
						    		AND c.id_user = a.id
                    				AND a.upload_akte != '' 
                    				AND a.upload_kartu_keluarga != '' 
                    				AND a.foto_anak != '' 
                    				AND a.foto_keluarga != ''";

							$exec 	=	mysqli_query($conn, $query);

							if ($exec) {
								$total	= mysqli_num_rows($exec);
								if ($total > 0) {
									while ($rows = mysqli_fetch_array($exec)) {

										$status = $rows['status_pendaftaran'];


							?>


										<tr>
											<td><?php echo ++$no; ?></td>
											<td><?php echo $rows['nama']; ?></td>
											<td><?php echo $rows['email']; ?></td>
											<td><?php
												$status == 0 ?


													print("<font color='#e74c3c'>Belum dikonfirmasi</font>") :
													print("<font color='##2ecc71'>Sudah dikonfirmasi</font>");
												?></td>
											<td>
												<!-- <a href="" class="btn btn-primary btn-sm">Konfirmasi</a> -->
												<a href="include/proses_konfirmasi_pendaftaran.php?ida=<?php echo $rows['id_akun'] ?>&idd=<?php echo $rows['id_daftar'] ?>&idu=<?php echo $Id ?>" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">Konfirmasi</a>


											</td>
										</tr>

							<?php
									}
								} else {
									echo "<td colspan='5' align='center'><h3><b>Belum ada siswa daftar</b></h3></td>";
								}
							} else {
								echo mysqli_error($conn);
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- end table-responsive -->
			</div>
		</div>
	</div>
</div>

<?php

unset($_SESSION['message']);

?>