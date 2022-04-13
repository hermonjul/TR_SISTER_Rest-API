<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Pembelian</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
					<span class="align-middle">SI Toko</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="daftar_barang.php">
							<i class="align-middle" data-feather="book"></i> <span class="align-middle">Daftar Barang</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="pembelian.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Pembelian</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="penjualan.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Penjualan</span>
						</a>
					</li>

				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Pembelian</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form>
										<div class="row">
											<div class="col-5">
												<div class="card no-border p-3" style="background-color: #ECECEC; ">
													<form class="">

														<div class="form-group row mb-2">
															<label for="inputFirstName" class="col-sm-5 col-form-label col-form-label-sm">Nomor Nota</label>
															<div class="col-sm-7 ml-2">
																<input type="text" class="form-control form-control-sm no-border bg-transparent" id="nota" placeholder=" " name="nota" value="" disabled />
															</div>
														</div>

														<div class="form-group row mb-2">
															<label for="inputFirstName" class="col-sm-5 col-form-label col-form-label-sm">Tanggal</label>
															<div class="col-sm-7 ml-2">
																<input type="text" class="form-control form-control-sm no-border bg-transparent" id="tanggal" placeholder=" " name="tanggal" value="<?= date("Y-m-d"); ?>" disabled />
															</div>
														</div>

														<div class="form-group row mb-2">
															<label for="inputFirstName" class="col-sm-5 col-form-label col-form-label-sm">Operator</label>
															<div class="col-sm-7 ml-2">
																<input type="hidden" class="form-control form-control-sm no-border bg-transparent" id="kodeoperator" placeholder=" " name="kodeoperator" value="" disabled />
																<input type="text" class="form-control form-control-sm no-border bg-transparent" id="namaoperator" placeholder=" " name="namaoperator" value="" disabled />
															</div>
														</div>

													</form>
												</div>
											</div>
											<div class="col-7">
												<div class="card no-border" style="background-color: #ECECEC; ">
													<form class="p-5">
														<div class="form-group row">
															<label for="grandtotal" class="form-label h3 col-5 fw-bold">Grand Total</label>
															<div class="col-lg-6 ml-2">
																<div class="input-group">
																	<div class="input-group-text bg-transparent">Rp. </div>
																	<input type="number" class="form-control form-control-lg bg-transparent" id="grandtotal" readonly value="0" />
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										<div class="row g-3 mt-1 mb-4">
											<div class="col-md-2">
												<label for="inputCity" class="form-label">Kode Barang</label>
												<input type="text" class="form-control form-control-sm register_form " id="kodebarang" name="kodebarang" required value="" oninput="" />
											</div>
											<div class="col-md-2">
												<label for="inputCity" class="form-label">Nama Barang</label>
												<input type="text" class="form-control form-control-sm" id="namabarang" name="namabarang" required value="" readonly />
											</div>

											<div class="col-md-2">
												<label for="inputCity" class="form-label">Harga Beli</label>
												<input type="number" class="form-control form-control-sm register_form" id="hbbaru" name="hbbaru" required value="" oninput="" />
											</div>

											<div class="col-md-2">
												<label for="inputCity" class="form-label">Harga Jual</label>
												<input type="text" class="form-control form-control-sm" id="hjbaru" name="hjbaru" required value="" readonly />
											</div>
											<div class="col-md-2">
												<label for="inputCity" class="form-label">Jumlah</label>
												<input type="number" min="1" class="form-control  form-control-sm register_form" id="jumlah" name="jumlah" required value="" oninput="" />
											</div>
											<input type="hidden" min="1" class="form-control" id="hblama" name="hblama" required value="" />
											<input type="hidden" min="1" class="form-control" id="hjlama" name="hjlama" required value="" />
										</div>
										<input type="hidden" class="form-control" id="pre_stok" name="pre_stok" required value="" />
										<input type="hidden" class="form-control form-control-sm" id="total" name="total" readonly value="0" />
										<div style="max-height:300px; overflow-y:scroll ;overflow-x:auto ;width:100%">
											<table class="table table-striped table-hover" id="dataTable">

												<tr>
													<th style="display: none;">Nomor Nota</th>
													<th>Kode Barang</th>
													<th>Nama Barang</th>
													<th>Harga</th>
													<th>Jumlah</th>
													<th>Total</th>
													<th>Hapus</th>
												</tr>

												<tbody id="table_data">
													<!-- Nanti isinya tabel yang di append lewat javascript -->
													<tr id="row1">
														<td style="display: none;">-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
													</tr>
												</tbody>
											</table>
										</div>
										<br>
										<button type="button" class="btn btn-danger" onclick="">Batal</button>
										<button type="button" class="btn btn-primary" style="display: none;" id="add" name="add" value="add" onclick="">Tambah</button>
										<button type="submit" class="btn btn-primary" onclick="">Simpan</button>
										<br>
										<br>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>