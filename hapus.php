<?php 

	require_once 'functions.php';
	$id = $_GET['id'];
	if (hapus($id) > 0) {
		echo "<script> alert('Data berhasil dihapus!')</script>";
		header('Location: index.php');
	}else{
		echo "<script> alert('Data gagal dihapus!')</script>";
		header('Location: index.php');
	}
