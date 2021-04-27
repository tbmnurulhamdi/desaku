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
				<a class="sidebar-brand" href="@">
					<span class="align-middle">Desaku</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Form Input</span>
						</a>
					</li>

					<!-- pindahkan kata class "active" ke sidebar sesuai menu sidebar yang diklik -->
					<!-- kata class "aktive" ditunjukan untuk menu yang sedang aktif -->
					<li class="sidebar-item active">
						<a href="#ddata" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Daftar Data</span>
						</a>
						<ul id="ddata" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="#">Penduduk</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Keluarga</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Kelahiran</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">Kematian</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="#">Hak Akses</a></li>


						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="file"></i> <span class="align-middle">Surat Menyurat</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="contoh2.php">
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


					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Daftar Hak Akses</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Username</th>
											<th class="d-none d-xl-table-cell">Email</th>
											<th class="d-none d-xl-table-cell">Nama</th>
											<th>Action</th>
											<th class="d-none d-md-table-cell">Level</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>isikan username</td>
											<td class="d-none d-xl-table-cell">isikan email</td>
											<td class="d-none d-xl-table-cell">isikan nama</td>
											<td>
												<a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
												<a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
												<a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
											</td>
											<td class="d-none d-md-table-cell">isi level</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

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

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


	<script>
		$(function() {
			$("#tgl-indo").datetimepicker({
				locale: 'id',
				format: 'DD/MMMM/YYYY'
			});
		});
	</script>
	<!-- awal pengelola pengikut pindah penduduk -->
	<script type="text/javascript">
		$(document).ready(function() {
			var i = 1;
			// saat tombol tambah ditekan, function ini akan bekerja menambahkan form input pengikut  
			$(".add-more").click(function() {
				if (i > 10) {
					alert("maksimal 10 input."); //saat sudah 10 form ditambahkan, pesan ini akan muncul
					return false;
				}
				var div = $(document.createElement('div')).attr('class', 'row add' + i);
				div.after().html(
					'<h5 class="card-title mb-0">Pengikut ' + i + '</h5>' +
					'<div class="mb-3 col-md-4">' +
					'<input type="text" class="form-control" name="nikikut' + i + '" placeholder="NIK">' +
					'</div>' +
					'<div class="mb-3 col-md-8">' +
					'<input type="text" class="form-control" name="namaikut' + i + '" placeholder="Nama Lengkap">' +
					'</div>' +
					'<div class="mb-3 col-md-5">' +
					'<input type="text" class="form-control" name="jkikut' + i + '" placeholder="Kelamin">' +
					'</div>' +
					'<div class="mb-3 col-md-3">' +
					'<input type="text" class="form-control" name="umurikut' + i + '" placeholder="umur">' +
					'</div>' +
					'<div class="mb-3 col-md-4">' +
					'<input type="text" class="form-control" name="agamaikut' + i + '" placeholder="Agama">' +
					'</div>');
				div.appendTo("#group");
				i++;

			});
			// saat tombol hapus ditekan, function ini akan bekerja menghapus form input pengikut  
			$(".remove").click(function() {
				if (i == 1) {
					alert("input tidak bisa dihapus lagi"); // pesan batas menghapus form
					return false;
				}
				i--;
				$(".add" + i).remove();
			});
		});
	</script>
	<!-- akhir pengelola pengikut pindah penduduk -->

</body>

</html>