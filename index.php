<?php
	require_once 'functions.php';
  session_start();
	$query = 'SELECT * FROM mahasiswa';
	$mahasiswa = query($query);

  if (isset($_SESSION['sukses'])) {
    $error = $_SESSION['sukses'];
  }




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
 	<title>Index page</title>
 </head>
 <body>
 	<div class="container mt-5">

 		<div class="mb-3">
 			<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
 		</div>

    <?php 
        if (isset($error)) {
          if ($error === true) {
            echo "<div class='alert alert-success'>Data berhasil ditambahkan</div>";
            session_unset();
          }elseif ($error === false) {
            echo "<div class='alert alert-danger'>Data gagal ditambahkan</div>";
            session_unset();
          }
        }

     ?>

 		<table class="table table-dark table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          	<?php $i = 1; ?>
          	<?php foreach($mahasiswa as $mhs): ?>
          	<tr>
            	<th scope="row"><?= $i++ ?></th>
            	<td><?= $mhs['nama'] ?></td>
            	<td><?= $mhs['nrp'] ?></td>
            	<td><?= $mhs['email'] ?></td>
            	<td><?= $mhs['jurusan'] ?></td>
            	<td>
            		<a href="edit.php?id=<?= $mhs['id'] ?>" class="btn-sm btn-primary">Edit</a>
            		<a href="hapus.php?id=<?= $mhs['id'] ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
            	</td>
          	</tr>
        	<?php endforeach; ?>
          </tbody>
        </table>
 	</div>
 </body>
 </html>



