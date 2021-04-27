<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Admin Desaku</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!-- awal menu sidebar -->
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Desaku</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<!-- pindahkan kata class "active" ke sidebar sesuai menu sidebar yang diklik -->
					<!-- kata class "aktive" ditunjukan untuk menu yang sedang aktif -->
					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a href="#inputdata" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Form Data</span>
						</a>
						<ul id="inputdata" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="#">Penduduk</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Keluarga</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Migrasi</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../../../5/z/x/7/admin/input/hakakses/">Hak Akses</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#ddata" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Daftar Data</span>
						</a>
						<ul id="ddata" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="#">Penduduk</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Keluarga</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Kelahiran</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Kematian</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Hak Akses</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="file"></i> <span class="align-middle">Surat Menyurat</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Laporan</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-settings.html">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Pengaturan</span>
						</a>
					</li>


				</ul>
			</div>
		</nav>
		<!-- akhir menu sidebar -->

		<div class="main">

			<!-- awal menu navigasi -->
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

						<!-- awal bagian informasi  -->
						<li class="nav-item dropdown">

							<!-- icon settings akan muncul saat di mobile/di persempit lebar sampingnya -->
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<!-- awal informasi user yang login -->
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">

								<!-- foto dan nama user yang login  -->
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Nama Admin</span>
							</a>
							<!-- akhir informasi user yang login -->


							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Pengaturan</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>Panduan</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Keluar</a>
							</div>
						</li>
						<!-- akhir bagian informasi -->

					</ul>
				</div>
			</nav>
			<!-- akhir menu navigasi -->

			<!-- awal bagian konten tempat setiap konten yang ingin dimasukan -->
			<main class="content">
				<div class="container-fluid p-0">

					<!-- nama menu -->
					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Dashboard</strong></h3>
						</div>

					</div>
					<!-- awal row/baris konten pertana -->
					<div class="row">

						<!-- awal bagian kotak menu -->
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Penduduk</h5>

												<!-- jumlah penduduk yang ada -->
												<h1 class="mt-1 mb-3">0</h1>
												<div class="mb-1">
													<a href="#" class="text-muted"> <span class="align-middle">Selengkapnya</span> <i class="align-middle" data-feather="arrow-right-circle"></i></a>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Surat</h5>

												<!-- jumlah surat yang tercetak -->
												<h1 class="mt-1 mb-3">0</h1>

												<div class="mb-1">
													<a href="#" class="text-muted"> <span class="align-middle">Selengkapnya</span> <i class="align-middle" data-feather="arrow-right-circle"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Keluarga</h5>

												<!-- jumlah keluarga yang ada -->
												<h1 class="mt-1 mb-3">0</h1>

												<div class="mb-1">
													<a href="#" class="text-muted"> <span class="align-middle">Selengkapnya</span> <i class="align-middle" data-feather="arrow-right-circle"></i></a>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Hak Akses</h5>

												<!-- jumlah user yang login ke sistem  -->
												<h1 class="mt-1 mb-3">0</h1>

												<div class="mb-1">
													<a href="#" class="text-muted"> <span class="align-middle">Selengkapnya</span> <i class="align-middle" data-feather="arrow-right-circle"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- akhir bagian kotak menu -->

						<!-- awal bagian chart usage -->
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Gender Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Pria</td>

													<!-- jumlah pria -->
													<td class="text-end">1323</td>
												</tr>
												<tr>
													<td>Wanita</td>

													<!-- jumlah Wanita -->
													<td class="text-end">1243</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- akhir bagian chart usage -->

					</div>
					<!-- akhir row/baris konten pertana -->



				</div>
			</main>
			<!-- akhir bagian konten -->


			<!-- awal bagian footer -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="#" class="text-muted">Copyright 2021</a> &copy;
							</p>
						</div>
					</div>
				</div>
			</footer>
			<!-- akhir bagian footer -->

		</div>
	</div>

	<script src="js/app.js"></script>


	<!-- awal pengelola data charts -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Pria", "Wanita"],
					datasets: [{
						data: [1323, 1423],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<!-- akhir pengelola data charts -->

</body>

</html>