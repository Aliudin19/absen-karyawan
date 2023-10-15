<?php 

include 'koneksi-db.php';

$id = $_POST['id_user'];
$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
$masuk = date("H:i:s");
$keluar = NULL;
$tanggal = date("Y-m-d");


$query = "INSERT INTO data_absen VALUES ('$id', '$nama', '$jabatan', '$masuk', '$keluar', '$tanggal')";

$result = mysqli_query($connection, $query);

header('Location: index.php');

?>