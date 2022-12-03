<?php
	require_once 'functions.php';

	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$result = query("SELECT username FROM user WHERE username = '$user'");

		if (!isset($result[0])) {

			$password = $_POST['password'];
			$verivy = $_POST['verify'];

			if ($password != $verivy ) {
					echo "Password yang anda masukan tidak sesuai";
				}

				if(registrasi($user, $password) > 0){
					echo '<div class="alert alert-success">Anda berhasil registrasi</div>';
				}else{
					echo '<div class="alert alert-danger">Anda gagal registrasi</div>';
				}
		}

			echo "Maaf username sudah ada!";
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
		<h2 class="fw-light mt-5">Form Registrasi</h2>

		
		<div class="row">
			<div class="col-lg-6 mt-5 shadow shadow-lg p-3">
				<form action="" method="post">
					<div class="mb-3">
			            <label for="username" class="form-label">Username</label>
			            <input type="text" class="form-control" id="username" name="username" required>
			          </div>

			          <div class="mb-3">
			            <label for="password" class="form-label">Password</label>
			            <input type="password" class="form-control" id="password" name="password" required>
			          </div>

			          <div class="mb-3">
			            <label for="verify" class="form-label">Verify</label>
			            <input type="password" class="form-control" id="verify" name="verify" required>
			          </div>

			          <button type="submit" name="submit" class="btn btn-outline-primary">Kirim</button>
		          </form>
	         </div>
        </div>
	</div>
</body>
</html>
