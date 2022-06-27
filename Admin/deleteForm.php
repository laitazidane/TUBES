<?php 
    include "koneksi.php";

    $id = $_GET["id"];

    $query = "DELETE FROM data_form WHERE id_form =$id";

    if(mysqli_query($koneksi, $query)){
        header('Location: dataForm.php');
    }
    else{
        echo "Data gagal dihapus <br>". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
 ?>