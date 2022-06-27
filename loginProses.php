   
    <?php 
    include "koneksi.php";

    error_reporting(0);

    session_start();

    if (isset($_SESSION['nama_akun'])) {
      header("Location: index.html");
  }

  $nama = $_POST["nama"];    
  $password = md5($_POST["password"]);

  $query = "SELECT * FROM akun WHERE nama_akun = '$nama' && password_akun = '$password'" ;
  $queryAdmin = "SELECT * FROM admin WHERE nama_admin = '$nama' && password_admin = '$password'" ;
  $result = mysqli_query($koneksi, $query);
  $resultAdmin = mysqli_query($koneksi, $queryAdmin);

    if(isset($_POST["submit"])){
     

        if($result->num_rows > 0){           
          $row = mysqli_fetch_assoc($result);
          $_SESSION['nama_akun'] = $row['nama_akun'];
          header("Location: Setelah Login/index.php");
          
        }else if($resultAdmin -> num_rows > 0){   
          $row = mysqli_fetch_assoc($resultAdmin);
          $_SESSION['nama_admin'] = $row['nama_admin']; 
          header("Location: Admin/index.php");
        }else{
          echo "gagal";
        }

    }
 ?>

