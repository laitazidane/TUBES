<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
    rel="stylesheet"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/styleBerita.css">
    <link rel="icon" type="icon" href="img/logo-probolinggo-icon.png">
    <title>Pelayanan Publik</title>
</head>
<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top" style="border-bottom: 1px solid #D9D9D9;">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 text-dark" href="#">Kec. Maron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars" style="color: #000 ;"></span>
        </button>

        <div class="collapse navbar-collapse mx-auto" id="menu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link text-dark" href="index.php">Beranda</a></li>
            <li><a class="nav-link text-dark" href="profil.html">Profil</a></li>
            <li><a class="nav-link text-dark" href="berita.html">Berita</a></li>
            <li class="nav-item me-3 me-lg-0 dropdown">
              <a
                class="nav-link dropdown-toggle text-dark active"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Layanan Publik
              </a>
              <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-center" href="pelayananPublik.php">Pengajuan Surat</a></li>
                <li><a class="dropdown-item text-center" href="https://www.lapor.go.id/">Pengaduan</a></li> 
              </ul>
            
          </ul>
          <div class="navbar-nav ">        
            <li class="nav-item me-3 me-sm-0 dropdown " style="padding-right: 50px;">
            <a><i class="bi bi-person-fill" style="font-size: 22px;"></i></a>
                <a
                  class="nav-link dropdown-toggle text-dark"                
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                <?php                 
                session_start();
                echo $_SESSION['nama_akun'];
                ?> 
                </a>
                <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-center" href="../logout.php">Keluar</a></li>              
                </ul>
              </li>
         </div>                                 
        </div>
       

        </div>
        </nav>
    <!-- AKHIR NAVBAR -->

    <!-- JUMBROTON -->
    <div  class="bg-image shadow-1-strong img-fluid">

        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: auto; height: 600px;">
            <div class="p-5 d-flex flex-column mb-3 justify-content-center h-100">
                <div class="text-light">
                  <h1 class="mb-3 fw-bold" style="letter-spacing: 2px ;">Layanan Publik <br> Kec. Maron</h1>
                  <h5 class="text-light fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate nesciunt 
                    <br> beatae mollitia commodi accusamus, optio voluptas ea ab sit. <br> 
                    Pariatur consequuntur est, ullam fugiat laboriosam laborum ipsam iusto 
                    <br> asperiores vitae!</h5>
                </div>
                </div>
        </div>
        
        
    </div>
    <!-- AKHIR JUMBOTRON -->

    <!-- FORM -->
    <section class="berita" style="padding-top: 7%;">
      <div class="container">

        <div class="row row-berita-terkini">

            <h4 class="fw-bold fs-5">Form Layanan Publik</h4>
            
            <div class="card">
              <div class="card-body">

                <form action="" method="post">
                  <div class="form-outline mb-4">
                    <input type="text" id="nama" name="nama" class="form-control" required/>
                    <label class="form-label" for="form6Example3">Nama Lengkap Sesuai KTP</label>
                  </div>                                 
                
                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="alamat" name="alamat" class="form-control" required/>
                    <label class="form-label" for="form6Example4">Alamat</label>
                  </div>
                
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" required/>
                    <label class="form-label" for="form6Example5">Email</label>
                  </div>
                
                  <!-- Number input -->
                  <div class="form-outline mb-4">
                    <input type="number" id="nomer" name="nomer" class="form-control" required/>
                    <label class="form-label" for="form6Example6">Nomer Whatsapp Aktif</label>
                  </div>
                                    
                
                  <!-- Message input -->
                  <div class="form-outline mb-4" >
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" required ></textarea>
                    <label class="form-label" for="form6Example7">Pesan</label>
                  </div>

                  <!-- Select Pemilihan Jenis Layanan -->
                  <div class="form-outline mb-4">
                    <select name="jenis-layanan" id="jenis-layanan" class="select-input form-select" aria-label="Default select example">
                      <option value="">Pilih Jenis Layanan</option>
                      <option value="Permintaan Surat">Permintaan Surat</option>
                      <option value="Surat Keterangan Kependudukan">Surat Keterangan Kependudukan</option>
                      <option value="Pembuatan KTP">Pembuatan KTP</option>
                    </select>
                  </div>                  
                   
                
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" style="background: #001D6E;">Kirim</button>
                </form>

              </div>

            </div>

        </div>
       
      </div>
    </section>

    <!-- END FORM -->

    <!-- Footer -->
      
    <footer class="text-center text-white" style="background-color: #fff; padding-top: 10px; border-top: 1px solid #D9D9D9;" >
      <!-- Grid container -->    
         
          <a
            class="btn btn-link btn-floating text-dark m-1" 
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-facebook"></i
          ></a>
    
          
          <a
            class="btn btn-link btn-floating  text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-twitter"></i
          ></a>
    
          
          <a
            class="btn btn-link btn-floating text-dark m-1"
            href="https://www.instagram.com/elzidanee_/"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-instagram"></i
          ></a>
    
          
          <a
            class="btn btn-link btn-floating  text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-tiktok"></i
          ></a>
    
         
          <a
            class="btn btn-link btn-floating text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-youtube"></i
          ></a>
          
     
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center text-light p-sm-4" style="background-color: #001D6E;">
        © 2022 Copyright:
        <a class="text-light" href="" style="text-decoration: none;">laitazidane</a>
      </div>
      <!-- Copyright -->
    </footer>
  
  
<!-- End Footer -->

  <script src="JS/script.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
  ></script>

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
                window.location.href = "pelayananPublik.php"
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