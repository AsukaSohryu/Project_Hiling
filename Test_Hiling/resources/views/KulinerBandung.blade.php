<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Kuliner Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/non_login_ver/StyleKontenWisata.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!------------------------------------------>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!----------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
</head>
<body>
    
        <div class="banneratas"></div>
        <section class="navbar">
            <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="Home2.html"><img src="./Images/logobiru.png" alt="Logo" width="246" height="73.87" class="d-inline-block align-text-top"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav nav-pills nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link " href="/">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Wisata</a>
                        </li> -->
                        <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle"  aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wisata
                          </a>
                          <div class="dropdown-wisata">
                            <ul class="dropdown-menu custom-dropdown">
                              <div class="dropdown kiri">
                                <li><a class="dropdown-item" href="/WisataAlam">Wisata Alam</a></li>
                                <li><a class="dropdown-item" href="/WisataWahana">Wisata Wahana</a></li>
                              </div>
                              <div class="dropdown kanan">
                                <li><a class="dropdown-item" href="/WisataKuliner">Wisata Kuliner</a></li>
                                <li><a class="dropdown-item" href="/WisataSejarah">Wisata Sejarah</a></li>
                              </div> 
                              </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"  href="/TentangKami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/CekOrder_NoLogin">Cek Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Masuk">Masuk</a>
                        </li>
                        <li class="nav-item">
                          <a href="/Daftar" type="button" class="btn btn-light">Daftar</a>
                        </li>
                    </ul>
                    </div>  
                </div>
              </nav>
            
        </section>
        <div class="garis"></div>

    <section class="isi">

        <div class="SpaceIsiAtas">
            <div class="space_judul">
                <h1 class="JudulAlam">WISATA KULINER BANDUNG</h1>
            </div>
    
            <div class="space_gambar">
                <img src="./Images/Logo Wisata Kuliner.png" alt="">
            </div>
        </div>

        <container id="container">
          <section id ="wisata">
              <div class="gambar">
                  <img width=45% src="./Images/WisataKulinerBandung/braga1.png" id="gambar1">
                  <img width=23.5% src="./Images/WisataKulinerBandung/braga2.png" id="gambar2">
                  <img width=23.5% src="./Images/WisataKulinerBandung/braga3.png" id="gambar2">
              </div>
              <div class id ="caption">
                  <div class id="deskripsi">
                      <h1>Jalan Sabang</h1>
                      <h3>Rating 4.6/5 <span id="titik">●</span> Jalan Braga, Kecamatan Sumur Bandung, Kota Bandung</h3>
                      <h4>Buka <span id="titik">●</span> - </h4>
                      <h5>Jalan Braga adalah salah satu ikon wisata kuliner di Bandung. Jalan ini terkenal dengan beragam kafe, restoran, dan warung makan yang menyajikan hidangan khas Bandung dan internasional. Anda dapat menemukan hidangan seperti mie kocok, soto Bandung, batagor, dan banyak lagi. Selain itu, Jalan Braga juga memiliki atmosfer klasik dengan bangunan peninggalan kolonial Belanda yang memberikan pengalaman kuliner yang unik.</h5>
                  </div>
                  <div class id="tiket">
                      <h2>Terjual</h2>
                      <h3><img src="./Images/Logo Tiket.png" id="icon-ticket"> - RB</h3>
                      <h4>Kali</h4>
                      <h5>Harga Tiket:</h5>
                      <h6>Tidak Tersedia</h6>
                  </div>
              </div>

              <div class="Lihatinfo">
                <a href="#" type="button" class="btn btn-light">Lihat Informasi</a>
              </div>

              <section id="review">
                  <div class ="review-heading">
                      <h1 class="kiri">Review</h1>
                      <h1 class="kanan">Lihat semua</h1>
                  </div>

                  
              </section>

              <div class="kotakreview">
                <img src="./Images/Review.png" alt="">
                <img src="./Images/Review.png" alt="">
             </div>

          </section>

          <section id ="wisata">
            <div class="gambar">
                <img width=45% src="./Images/WisataKulinerBandung/sudirmanst1.png" id="gambar1">
                <img width=23.5% src="./Images/WisataKulinerBandung/sudirmanst2.png" id="gambar2">
                <img width=23.5% src="./Images/WisataKulinerBandung/sudirmanst3.png" id="gambar2">
            </div>
            <div class id ="caption">
                <div class id="deskripsi">
                    <h1>Sudirman Street</h1>
                    <h3>Rating 4.7/5 <span id="titik">●</span> Jl. Jend. Sudirman No.107, Karanganyar, Kec. Astanaanyar, Kota Bandung</h3>
                    <h4>Buka <span id="titik">●</span> - </h4>
                    <h5>alan Sudirman menawarkan beragam pilihan restoran, kafe, dan warung makan yang menyajikan berbagai hidangan. Anda dapat menemukan berbagai jenis kuliner, mulai dari makanan lokal Indonesia, makanan Asia, hingga hidangan internasional. Restoran dan kafe di sepanjang Jalan Sudirman menyediakan tempat yang nyaman untuk bersantap dan bersantai setelah beraktivitas di pusat kota Bandung.</h5>
                </div>
                <div class id="tiket">
                    <h2>Terjual</h2>
                    <h3><img src="./Images/Logo Tiket.png" id="icon-ticket"> - RB</h3>
                    <h4>Kali</h4>
                    <h5>Harga Tiket:</h5>
                    <h6>Tidak Tersedia</h6>
                </div>
            </div>

            <div class="Lihatinfo">
                <a href="#" type="button" class="btn btn-light">Lihat Informasi</a>
              </div>
            
            <section id="review">
                <div class ="review-heading">
                    <h1 class="kiri">Review</h1>
                    <h1 class="kanan">Lihat semua</h1>
                </div>
            </section>

            <div class="kotakreview">
              <img src="./Images/Review.png" alt="">
              <img src="./Images/Review.png" alt="">
           </div>

        </section>

        <section id ="wisata">
          <div class="gambar">
              <img width=45% src="./Images/WisataKulinerBandung/cibadak1.png" id="gambar1">
              <img width=23.5% src="./Images/WisataKulinerBandung/cibadak2.png" id="gambar2">
              <img width=23.5% src="./Images/WisataKulinerBandung/cibadak3.png" id="gambar2">
          </div>
          
          <div class id ="caption">
              <div class id="deskripsi">
                  <h1>Cibadak Culinary Center</h1>
                  <h3>Rating 4.6/5 <span id="titik">●</span> Jl. Cibadak No.50-155, Cibadak, Kec. Astanaanyar, Kota Bandung</h3>
                  <h4>Buka <span id="titik">●</span> -</h4>
                  <h5>Cibadak Culinary Center, atau yang dikenal juga dengan Cibadak Food Street, adalah pusat kuliner yang terkenal di Bandung. Terletak di kawasan Cibadak, tempat ini menawarkan berbagai warung makanan dan gerai kuliner dengan hidangan yang beragam. Anda dapat menemukan hidangan seperti nasi goreng, bakso, pempek, mie ayam, es krim, dan masih banyak lagi. Cibadak Culinary Center adalah tempat yang populer bagi pecinta makanan jalanan dan penggemar kuliner yang mencari variasi hidangan yang lezat.</h5>
              </div>
              <div class id="tiket">
                  <h2>Terjual</h2>
                  <h3><img src="./Images/Logo Tiket.png" id="icon-ticket"> - RB</h3>
                  <h4>Kali</h4>
                  <h5>Harga Tiket:</h5>
                  <h6>Tidak Tersedia</h6>
                  
                  
                  
              </div>
          </div>
          
          <div class="Lihatinfo">
            <a href="#" type="button" class="btn btn-light">Lihat Informasi</a>
          </div>

          <section id="review">
              <div class ="review-heading">
                  <h1 class="kiri">Review</h1>
                  <h1 class="kanan">Lihat semua</h1>
              </div>
          </section>

          <div class="kotakreview">
            <img src="./Images/Review.png" alt="">
            <img src="./Images/Review.png" alt="">
         </div>

        </section>

        

        </container>

          
    </section>
      
      <!-- Footer -->
    <footer
    class="text-center text-lg-start text-white"
    style="background-color: #000000"
    >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
  <!--Grid row-->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-5 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">
        Hiling
      </h6>
      <p>
        Hiling adalah website informatif terkait wisata Indonesia yang betujuan
        mendukung UMKM Indonesia
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none" />

    <!-- Grid column -->
    <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
      <p>
        <a class="text-white">MDBootstrap</a>
      </p>
      <p>
        <a class="text-white">MDWordPress</a>
      </p>
      <p>
        <a class="text-white">BrandFlow</a>
      </p>
      <p>
        <a class="text-white">Bootstrap Angular</a>
      </p>
    </div> -->
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none" />

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none" />

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
      <p><i class="fas fa-home mr-3"></i> Jakarta, 10012, IND</p>
      <p><i class="fas fa-envelope mr-3"></i> HilingBersama@gmail.com</p>
      <p><i class="fas fa-phone mr-3"></i> + 62 234 567 890</p>
      <p><i class="fas fa-print mr-3"></i> + 62 234 567 890</p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-1 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Ikuti Kami</h6>

      <a class="logo_sosmed" href= "https://www.instagram.com/%22%3E"><i class="fa fa-instagram"></i></a>
      <a class="logo_sosmed" href="https://twitter.com/home%22%3E"><i class="fa fa-twitter"></i></a>
      <a class="logo_sosmed" href="https://www.facebook.com/home.php%22%3E"><i class="fa fa-facebook"></i></a>
      <!-- Facebook -->
      <a
         class="btn btn-floating m-1"
         style="background-color: #000000"
         href="https://www.facebook.com/home.php%22%3E"
         role="button"
         ><img class="fa fa-facebook" src="./Images/facebook-rect logo.png">
         <i class="fa fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a
         class="btn btn-floating m-1"
         style="background-color: #000000"
         href="https://twitter.com/home%22%3E"
         role="button"
         ><img class="fa fa-facebook" src="./Images/Twitter logo.png">
         <i class="fa fa-twitter"></i></a>

      <!-- Instagram -->
      <a
        class="btn btn-floating m-1"
        style="background-color: #000000"
        href="https://www.instagram.com/%22%3E"
        role="button"
        ><img class="fa fa-facebook" src="./Images/Instagram logo.png">
        <i class="fa fa-instagram"></i></a>

      <!-- Google -->
      <!-- <a
         class="btn btn-primary btn-floating m-1"
         style="background-color: #dd4b39"
         href="#!"
         role="button"
         ><i class="fab fa-google"></i
        ></a> -->

      <!-- Linkedin -->
      <!-- <a
         class="btn btn-primary btn-floating m-1"
         style="background-color: #0082ca"
         href="#!"
         role="button"
         ><i class="fab fa-linkedin-in"></i
        ></a> -->
      <!-- Github -->
      <!-- <a
         class="btn btn-primary btn-floating m-1"
         style="background-color: #333333"
         href="#!"
         role="button"
         ><i class="fab fa-github"></i
        ></a> -->
    </div>
  </div>
  <!--Grid row-->
</section>
<!-- Section: Links -->
</div>
<br>
<br>
<!-- Grid container -->

<!-- Copyright -->
<div
   class="text-center p-3"
   style="background-color: rgba(0, 0, 0, 0.2)"
   >
  Hiling © 2023 Copyright. 
  <a class="text-white" href="https://mdbootstrap.com/"
   >All Right Reserved.</a
  >
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
<!-- </div> -->
<!-- End of .container -->
<!---------------------------------------->
<script src="./herta_kuru-main/script.js" async></script>
<!---------------------------------------->
</body> 
</html>