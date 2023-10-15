<?php 

include('koneksi-db.php');

if (isset($_GET["id_user"])) {

    $id = $_GET["id_user"];
    $keluar = date("H:i:s");
    $query = "UPDATE data_absen SET jam_keluar = '$keluar' WHERE id_user = '$id' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');

    
}

?>