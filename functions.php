<?php 

	$conn = mysqli_connect('localhost','root','','php_mvc');

 	function query(String $query): Array
  	{
  		global $conn;
  		$query = mysqli_query($conn,$query);
  		$rows = [];
  		while ($row = mysqli_fetch_assoc($query)) {
  			$rows[] = $row;
  		}
  		return $rows;
  	}

  	function tambah($data)
  	{
  		global $conn;

  		$nama = $data['nama'];
  		$nrp = $data['nrp'];
  		$email = $data['email'];
  		$jurusan = $data['jurusan'];

  		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan')";

  		mysqli_query($conn,$query);
  		return mysqli_affected_rows($conn);
  		// return false;

  	}

  	function hapus($id)
  	{
  		global $conn;
  		$query = "DELETE FROM mahasiswa WHERE id = '$id'";
  		mysqli_query($conn,$query);
  		return mysqli_affected_rows($conn);
  	}

  	function edit($data)
  	{
  		global $conn;

  		$id = $data['id'];
  		$nama = $data['nama'];
  		$nrp = $data['nrp'];
  		$email = $data['email'];
  		$jurusan = $data['jurusan'];

  		$query = "UPDATE mahasiswa SET nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan'WHERE id = '$id'";
  		mysqli_query($conn,$query);
  		return mysqli_affected_rows($conn);
  	}

  	function registrasi($user, $password)
  	{
  		global $conn;
  		$query = "INSERT INTO user VALUES('','$user','$password')";
  		mysqli_query($conn,$query);
  		return mysqli_affected_rows($conn);
  	}