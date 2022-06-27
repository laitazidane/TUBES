<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/styleSwipe.css">
    <link rel="icon" type="icon" href="img/logo-probolinggo-icon.png">
    <title>Beranda</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top" style="border-bottom: 1px solid #D9D9D9;">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 text-dark" href="index.php">Kec. Maron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars" style="color: #000 ;"></span>
        </button>

        <div class="collapse navbar-collapse mx-auto" id="menu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active text-dark" href="index.html">Beranda</a></li>
            <li><a class="nav-link text-dark" href="profil.html">Profil</a></li>
            <li><a class="nav-link text-dark" href="berita.html">Berita</a></li>
            <li class="nav-item me-3 me-lg-0 dropdown ">
              <a
                class="nav-link dropdown-toggle text-dark"
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
            </li>
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
   <section class="slide">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide foto1">
          <img class="img-fluid" src="img/pilkades.jpg" alt="">        
        </div>
        <div class="swiper-slide">
          <img class="img-fluid" src="img/Kantor desa.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img class="img-fluid" src="img/Kantor desa.jpg" alt="">
        </div>
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination" ></div>
    </div>
   </section>
    <!-- AKHIR JUMBOTRON -->
    
    <!-- ABOUT -->
    <section class="about">
      <div class="container">

        <div class="row ">
          <div class="col-sm-12desc-about"><br><br>
            <h3 class="fs-4 text-dark">Tentang Kami</h3>
            <p class="fs-3 fw-bold text-dark">Pelajari Lebih Tentang Kecamatan Maron</p><br><br><br>
          </div>      

          <div class="row-about col-lg-6">

            <div class="col-lg" data-aos="fade-left">      
              <img src="img/Kantor desa.jpg" class="img-fluid" alt="" style="width: 392px; height: 300px;">
          </div>
          </div>

          
            <div class="col-lg-6"><br><br>
              <h3 class="fw-bold" style="color: #000 ;">KECAMATAN MARON</h3><br>
              <p class="fw-light" >
                Maron adalah sebuah kecamatan di Kabupaten Probolinggo, Provinsi Jawa Timur, Indonesia.
                Maron adalah sebuah kecamatan di Kabupaten Probolinggo, Provinsi Jawa Timur, Indonesia.
                Maron adalah sebuah kecamatan di Kabupaten Probolinggo, Provinsi Jawa Timur, Indonesia.
              </p><br>
              <button class="btn btn-danger" style="background: #FF1818 ; border: none;">selengkapnya</button>  
            </div>
                      
          </div>


        </div>

      </div>
    </section>
    <!-- END ABOUT -->

    <!-- STRUKTUR ORGANISASI -->
    <section class="struktur">
      <div class="container">
        <div class="row ">

          <div class="col-sm-12-struktur"><br><br>
            <p class="fs-3 fw-bold ">Pimpinan dan Staf</p>
            <a href="profil.html">Selengkapnya</a> <br><br>         
          </div>

          </div>

        <div class="row text-center">

          <div class="row-struktur col-sm-4">
            <div class="card " style="width: 18rem; border-radius: 15px;">
              <img src="img/foto-perangkat.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <div class="card-body" style="border-radius: 15px;">
                <h5 class="card-title text-center" style="color: black ; font-weight: bold ; padding-bottom: 5px ;">Joko Mulyo</h5>
                <a href=""></a>
                <p class="card-text text-dark text-center" style="padding-top: 5px;">Camat Maron</p>                
              </div>
            </div>  
          </div>

          <div class="row-struktur col-sm-4">
            <div class="card" style="width: 18rem; border-radius: 15px;">
              <img src="img/foto-perangkat.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <div class="card-body" style="border-radius: 15px;">
                <h5 class="card-title text-center" style="color: black ; font-weight: bold ; padding-bottom: 5px ;">Joko Mulyo</h5>
                <a href=""></a>
                <p class="card-text text-dark text-center" style="padding-top: 5px;">Sekretaris Kecamatan</p>                
              </div>
            </div>  
          </div>

          <div class="row-struktur col-sm-4">
            <div class="card" style="width: 18rem; border-radius: 15px;">
              <img src="img/foto-perangkat.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <div class="card-body" style="border-radius: 15px;">
                <h5 class="card-title text-center" style="color: black ; font-weight: bold ; padding-bottom: 5px ;">Joko Mulyo</h5>
                <a href=""></a>
                <p class="card-text text-dark text-center" style="padding-top: 5px;">Kasi Pemerintahan</p>                
              </div>
            </div>  
          </div>
        </div>
        
      </div>    
    </section>
    <!-- END STRUKTUR ORGANISASI -->

    <!-- BERITA -->
    <section class="berita">
      <div class="container">
        <div class="row">
    

        <div class="row-berita col-sm-3 text-center">          
            <h3 class="fw-bold" style="color: #000 ;">Berita dan Publikasi</h3><br>
            <p class="fw-light" >
              Berita terkini dari kecamatan Maron, Kabupaten Probolinggo
            </p><br>
            <button class="btn btn-danger" style="background: #FF1818 ; border: none;">selengkapnya</button>          
        </div>

        <div class="row-card-berita col-sm-3">      
          <div class="card" style="width: auto;">
            <img src="img/pilkades.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <p class="btn btn-danger btn-sm " style="background: #FF1818 ; border: none; box-shadow: none;">22-05-2022</p>
              <p>Desa Maron Kidul, Kec. Maron</p>
              <h5 class="card-title-berita" style="color: black ;  padding-bottom: 10px ;">
                Pilkades, Plt Bupati Timbul Salurkan Hak Pilihnya Di TPS 09 Desa Maron Kidul
              </h5>                
              <p class="card-text" style="padding-top: 5px; font-size: 12px;">Selengkapnya</p>                
            </div>
          </div>  
        </div>

        <div class="row-card-berita col-sm-3">      
          <div class="card" style="width: auto;">
            <img src="img/pilkades.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <p class="btn btn-danger btn-sm " style="background: #FF1818 ; border: none; box-shadow: none;">22-05-2022</p>
              <p>Desa Maron Kidul, Kec. Maron</p>
              <h5 class="card-title-berita" style="color: black ;  padding-bottom: 10px ;">
                Pilkades, Plt Bupati Timbul Salurkan Hak Pilihnya Di TPS 09 Desa Maron Kidul
              </h5>                
              <p class="card-text" style="padding-top: 5px; font-size: 12px;">Selengkapnya</p>                
            </div>
          </div>  
        </div>

        <div class="row-card-berita col-sm-3">      
          <div class="card" style="width: auto;">
            <img src="img/pilkades.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <p class="btn btn-danger btn-sm " style="background: #FF1818 ; border: none; box-shadow: none;">22-05-2022</p>
              <p>Desa Maron Kidul, Kec. Maron</p>
              <h5 class="card-title-berita" style="color: black ;  padding-bottom: 10px ;">
                Pilkades, Plt Bupati Timbul Salurkan Hak Pilihnya Di TPS 09 Desa Maron Kidul
              </h5>                
              <p class="card-text" style="padding-top: 5px; font-size: 12px;">Selengkapnya</p>                
            </div>
          </div>  
        </div>


        </div>
      </div>
    </section>
    <!-- END BERITA -->

    <!-- GALERI -->
    <section class="galeri">
      <div class="container">
        <div class="row-galeri col-sm-12">

          <h3 class="fw-bold" style="padding-top: 5% ;">G a l e r i</h3>
        </div>

        
      </div>
    </section>
    <!-- END GAELRI -->

    <!-- Lokasi -->
    <section class="lokasi">

     <div class="container">

      <div class="row-galeri col-sm-12">
        <h3 class="fw-bold" style="padding-top: 5% ;">LOKASI</h3>
      </div>

      <div class="maps">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.453108853084!2d113.35360571473501!3d-7.847553980159598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd655a2df24e159%3A0x6f6a6419350dac9!2sKantor%20Kecamatan%20Maron!5e0!3m2!1sid!2sid!4v1655306953716!5m2!1sid!2sid" 
        width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


      </div>

     </div>

    </section>
    <!-- END LOKASI -->

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
       <div>      
      <i class="bi bi-telephone-fill"></i>
      <a class="text-light" href="" style="text-decoration: none; font-size: 14px ;">08926242326</a>
       </div>
       <a class="text-light" href="" style="text-decoration: none; font-size: 14px ;">© 2022 Copyright:</a>
        <a class="text-light" href="" style="text-decoration: none; font-size: 14px ;">laitazidane</a>
      </div>
      <!-- Copyright -->
    </footer>
  
  
<!-- End Footer -->

   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   
   <script src="JS/scriptSwipe.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
</body>
</html>