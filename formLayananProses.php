<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
    <?php 

    include "koneksi.php";

    
    if(isset($_POST["submit"])){
       
           
        echo '<script language="javascript">';
        echo 'swal("Mohon Maaf Permintaan Anda Gagal!", "Silahkan Login terleih dahulu!", {
            icon: "error", }).then((value) => {
                window.history.back();
              });';
          echo '</script>';
        

    }
 ?>
    </body>
</html>