<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
    <?php 
    include "koneksi.php";

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO akun (nama_akun, password_akun, email_akun )
                VALUES ('$nama', MD5('$password'),'$email') " ;
    

    if(isset($_POST["submit"])){
        $result = mysqli_query($koneksi, $query);
        if($result){
            echo '<script type ="text/JavaScript">';  
            echo 'swal("Daftar Akun Berhasil!", "Silahkan melakukan login", {
                icon: "success",
              }).then((value) => {
                window.location.href = "login.html"
              });;';
            echo '</script>';
        }else{
            echo '<script language="javascript">';
            echo 'swal("Daftar Gagal!", "silahkan lakukan pengisian data!", {
            icon: "error", }).then((value) => {
                window.history.back();
              });';
            echo '</script>';
        }

    }
 ?>

    </body>
</html>