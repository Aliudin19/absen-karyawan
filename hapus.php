<?php

include('koneksi-db.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM data_absen WHERE id_user = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>