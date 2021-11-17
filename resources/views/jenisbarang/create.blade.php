<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<title>Tambah Jenis Barang</title>
	
		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet">
	
		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-12 col-md-9 mt-5">
					<div class="card shadow mb-4">
						<div class="card-header py-3 bg-primary d-flex align-items-center justify-content-between mt-0 mb-0">
							<h1 class="h3 text-light">Jenis Barang Baru</h1>
							<a href="/barang" class="btn btn-warning">Kembali</a>
						</div>
						<div class="card-body">
							<form action="/jenisbarang/store" method="post">
								{{ csrf_field() }}
								<div class="form-group mb-3">
									<label for="jenis_barang">Jenis Barang</label>
									<input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder="Jenis Barang">
								</div>
								<div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-4">
									<input type="submit" class="btn btn-danger" value="Simpan Data">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"></script>

		<!-- Page level plugins -->
		<script src="vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="js/demo/chart-area-demo.js"></script>
		<script src="js/demo/chart-pie-demo.js"></script>
		<script src="js/demo/chart-bar-demo.js"></script>
		<script src="js/demo/datatables-demo.js"></script>
	
    </body>

</html>
