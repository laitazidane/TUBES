<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
    <?php 

    include "koneksi.php";

    

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $nomer = $_POST["nomer"];
    $pesan = $_POST["pesan"];
    $jenisLayanan = $_POST["jenis-layanan"];
    

    $query = "INSERT INTO data_form (status, nama, alamat, email, nomer, jenis_layanan, pesan) 
                VALUES ('proses','$nama', '$alamat', '$email', '$nomer', '$jenisLayanan', '$pesan')";
    
    if(isset($_POST["submit"])){
        $result = mysqli_query($koneksi, $query);        
        if($result){  
            
                echo '<script type ="text/JavaScript">';  
                echo 'swal("Permintaan Anda Berhasil Terkirim!", "data anda sedang di proses oleh admin mohon tunggu", {
                    icon: "success",
                  }).then((value) => {
                    window.location.href = "index.html"
                  });;';
                echo '</script>';            
           
        }else{            
            echo '<script language="javascript">';
        echo 'swal("Permintaan Anda Gagal!", "isi form dengan benar!", {
            icon: "error", }).then((value) => {
                window.history.back();
              });';
          echo '</script>';
        }

    }
 ?>
    </body>
</html>