<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Jadwal Kelas A</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item">
						<div class="text-sm-end">
							<a href="index.php?page=23&kelas=A"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Input jadwal Kelas A</button></a>
						</div>
					</li>

				</ol>
			</div>

		</div>
	</div>
</div>

<!-- <?php
		if (isset($_SESSION['message'])) {
			echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> " . $_SESSION['message'] . "
    </div>";
		}
		?> -->





<div class="row">
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Senin</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=1 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>

							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>

					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Selasa</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=2 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>


					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Rabu</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=2 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>


					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Kamis</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=2 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Jumat</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=5 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">PR</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=6 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='A'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>

</div>


<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Jadwal Kelas B</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item">
						<div class="text-sm-end">
							<a href="index.php?page=23&kelas=B"> <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Input jadwal Kelas B</button></a>
						</div>
					</li>

				</ol>
			</div>

		</div>
	</div>
</div>


<div class="row">
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Senin</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=1 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Selasa</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=2 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>

							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>

					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Rabu</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=3 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Kamis</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=4 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">Jumat</a>
				</div>

				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=5 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>
							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $senin['nama_mapel_kegiatan']; ?> </p>
					<?php
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card plan-box">
			<div class="card-body p-4">

				<div class="text-center plan-btn">
					<a href="javascript: void(0);" class="btn btn-primary btn-sm waves-effect waves-light">PR</a>
				</div>

				<?php
				$arrPRHari = array('Senin', 'Selesa', 'Rabu', 'Kamis', 'Jumat');
				?>
				<div class="plan-features mt-5">
					<?php
					$querySeninA	=	"SELECT * FROM jadwal a, mapel b WHERE id_hari=6 AND a.id_mapel=b.kode_mapel_kegiatan
            								AND a.kelas='B'";
					$execSeninA		=	mysqli_query($conn, $querySeninA);

					if ($execSeninA) {
						$i = 0;
						while ($senin = mysqli_fetch_array($execSeninA)) {
					?>

							<p><i class="bx bx-checkbox-square text-primary me-2"></i><?php echo $arrPRHari[$i] . ' : ' . $senin['nama_mapel_kegiatan']; ?> </p>

					<?php
							$i++;
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>

</div>













<?php

unset($_SESSION['message']);

?>