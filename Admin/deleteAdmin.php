<?php 
    include "koneksi.php";

    $id = $_GET["id"];

    $query = "DELETE FROM admin WHERE id_admin =$id";

    if(mysqli_query($koneksi, $query)){
        header('Location: dataAdmin.php');
    }
    else{
        echo "Data gagal dihapus <br>". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
 ?>