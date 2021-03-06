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

					<!-- pindahkan kata class "active" ke sidebar sesuai menu sidebar yang diklik -->
					<!-- kata class "aktive" ditunjukan untuk menu yang sedang aktif -->
					<li class="sidebar-item active">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Form Input</span>
						</a>
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

					<h1 class="h3 mb-3">Form Input </h1>

					<div class="row">

						<!-- awal seluruh tombol menu surat -->
						<div class="col-md-3 col-xl-2">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Form Input</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#hakakses" role="tab">
										Hak Akses
									</a>
									<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#formpenduduk" role="tab">
										Penduduk
									</a>
									<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#fomrkeluarga" role="tab">
										Keluarga
									</a>
									<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
										Migrasi
									</a>
								</div>
							</div>
						</div>
						<!-- akhir seluruh tombol menu surat -->


						<!-- awal seluruh form input surat -->
						<div class="col-md-9 col-xl-10">
							<div class="tab-content">

								<!-- awal form input hak akses -->
								<div class="tab-pane fade show active" id="hakakses" role="tabpanel">

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Hak Akses</h5>
										</div>
										<div class="card-body">
											<form action="" method="POST">
												<div class="row">
													<div class="mb-3 col-md-12">
														<input type="text" class="form-control" name="username" placeholder="Username" required>
													</div>
													<div class="mb-3 col-md-12">
														<input type="text" class="form-control" name="email" placeholder="Email" required>
													</div>
													<div class="mb-3 col-md-6">
														<input type="password" class="form-control" name="password" placeholder="Password" required>
													</div>
													<div class="mb-3 col-md-6">
														<input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password" required>
													</div>
													<div class="mb-3 col-md-6">
														<select class="form-control" required>
															<option selected>Pegawai</option>
															<option>Pengurus</option>
															<option>Admin</option>
														</select>
													</div>
													<div class="mb-3 col-md-6 text-end">
														<button type="input" class="btn btn-primary" onclick="return confirm('yakin tambah hak akses')" ><i class="align-middle me-2" data-feather="plus"></i> <span class="align-middle">Tambahkan</span>
														</button>
													</div>
												</div>							
											</form>

										</div>
									</div>

								</div>
								<!-- akhir form input hak akses -->


								<!-- awal form input mengurus ktp -->
								<div class="tab-pane fade" id="ktp" role="tabpanel">
									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">KTP</h5>
										</div>
										<div class="card-body">

											<form action="" method="POST">
												<div class="mb-3">
													<input type="text" class="form-control" name="nik" placeholder="NIK">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="no_kk" placeholder="No. KK">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="jl" placeholder="Jenis Kelamin">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="status" placeholder="Status">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="wn" placeholder="Kewarganegaraan">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="agama" placeholder="Agama">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="gol_dar" placeholder="Golongan Darah">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control" name="alamat" placeholder="Alamat">
												</div>
												<div class="mb-3 text-end">
													<button type="submit" class="btn btn-primary">
														<i class="align-middle me-2" data-feather="printer"></i> <span class="align-middle">Cetak</span>
													</button>
												</div>
											</form>


										</div>
									</div>
								</div>
								<!-- akhir form input mengurus ktp -->

								<!-- awal form input pindah penduduk -->
								<div class="tab-pane fade" id="pindahpenduduk" role="tabpanel">
									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Pindah Penduduk</h5>
										</div>
										<div class="card-body">

											<form action="" method="POST">
												<div class="row">
													<div class="mb-3">
														<input type="text" class="form-control" name="nik" placeholder="NIK">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control" name="no_kk" placeholder="No. KK">
													</div>
													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
													</div>
													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control" name="status" placeholder="Status">
													</div>
													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="wn" placeholder="Kewarganegaraan">
													</div>
													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="agama" placeholder="Agama">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
													</div>

													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="alamat_lama" placeholder="Alamat Lama">
													</div>
													<div class="mb-3 col-md-6">
														<input type="text" class="form-control" name="pindahke" placeholder="Pindah ke">
													</div>
													<div class="mb-3 col-md-6">
														<textarea type="text" class="form-control" rows="2" name="alasan" placeholder="Alasan"></textarea>
													</div>
													<div class="mb-3 col-md-3">
														<input type="text" class="form-control" name="jml_ikut" placeholder="Jumlah Pengikut">
													</div>
													<div class="mb-3 col-md-3">

														<!-- saat tombol tambah di click maka akan muncul form input pengikut -->
														<button class="btn btn-success add-more" type="button">
															<i class="align-middle" data-feather="plus"></i>
														</button>

														<!-- saat tombol hapus di click maka form input pengikut akan hilang -->
														<button class="btn btn-danger remove" type="button">
															<i class="align-middle" data-feather="trash"></i>
														</button>
													</div>
												</div>
												
												<div id="group">

												</div>

												<div class="mb-3 text-end">
													<button type="submit" class="btn btn-primary">
														<i class="align-middle me-2" data-feather="printer"></i> <span class="align-middle">Cetak</span>
													</button>
												</div>
											</form>

										</div>
									</div>
								</div>
								<!-- akhir form input pindah penduduk -->

							</div>
						</div>
						<!-- akhir seluruh form input surat -->

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
		$( function() {
			$("#tgl-indo").datetimepicker({
				locale:'id',
				format:'DD/MMMM/YYYY'
			});
		} );
		</script>
	<!-- awal pengelola pengikut pindah penduduk -->
      <script type="text/javascript">
         $ (document).ready(function() {
				var i = 1;
				// saat tombol tambah ditekan, function ini akan bekerja menambahkan form input pengikut  
            $ (".add-more").click(function() {
               if (i > 10) {
                  alert("maksimal 10 input."); //saat sudah 10 form ditambahkan, pesan ini akan muncul
                  return false;
               }
               var div = $(document.createElement('div')).attr('class', 'row add' + i);
               div.after().html(
						'<h5 class="card-title mb-0">Pengikut '+i+'</h5>'
						+ '<div class="mb-3 col-md-4">'
                  +'<input type="text" class="form-control" name="nikikut'+i+'" placeholder="NIK">'
                  +'</div>'
                  + '<div class="mb-3 col-md-8">'
                     +'<input type="text" class="form-control" name="namaikut'+i+'" placeholder="Nama Lengkap">'
                  +'</div>'
                  + '<div class="mb-3 col-md-5">'
					   	+ '<input type="text" class="form-control" name="jkikut'+i+'" placeholder="Kelamin">'
						+ '</div>'
                  + '<div class="mb-3 col-md-3">'
					   	+ '<input type="text" class="form-control" name="umurikut'+i+'" placeholder="umur">'
						+ '</div>'
						+ '<div class="mb-3 col-md-4">'
					   	+ '<input type="text" class="form-control" name="agamaikut'+i+'" placeholder="Agama">'
						+ '</div>');
               div.appendTo("#group");
               i++;

				});
				// saat tombol hapus ditekan, function ini akan bekerja menghapus form input pengikut  
            $(".remove").click(function(){
               if(i==1){
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