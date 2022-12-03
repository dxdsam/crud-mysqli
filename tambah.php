<?php
	require_once 'functions.php';
	session_start();

	if (isset($_POST['submit'])) {
		if (tambah($_POST) > 0) {
			$_SESSION['sukses'] = true;
			header('Location: index.php');
		}else{
			$_SESSION['sukses'] = false;
			header('Location: index.php');
		}

	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<title>Tambah Data</title>
</head>
<body>
	<div class="container">
		<h2 class="fw-light mt-5">Form Tambah Data</h2>

		<?php if ($error = true): ?>
			<?php echo "error" ?>
		<?php endif ?>
		
		<div class="row">
			<div class="col-lg-6 mt-5 shadow shadow-lg p-3">
				<form action="" method="post">
					<div class="mb-3">
			            <label for="nama" class="form-label">Nama</label>
			            <input type="text" class="form-control" id="nama" name="nama" required>
			          </div>

			          <div class="mb-3">
			            <label for="nrp" class="form-label">NRP</label>
			            <input type="text" class="form-control" id="nrp" name="nrp" required>
			          </div>


			          <div class="mb-3">
			            <label for="email" class="form-label">Email</label>
			            <input type="text" class="form-control" id="email" name="email" required>
			          </div>

			          <div class="mb-3">
			            <label for="jurusan" class="form-label">Jurusan</label>
			            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
			          </div>

			          <button type="submit" name="submit" class="btn btn-outline-primary">Kirim</button>
		          </form>
	         </div>
        </div>
	</div>
</body>
</html>

	