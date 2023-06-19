s<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugs Gravity Lembang - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/login_ver/StyleInformasiKonten_Login.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!------------------------------------------>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!----------------------------------------------------->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
</head>
<body>
  <div class="banneratas"></div>
        <section class="navbar">
          <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
              <div class="container-fluid">
                <a class="navbar-brand" href="/homepage"><img src="./Images/logobiru.png" alt="Logo" width="246" height="73.87" class="d-inline-block align-text-top"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="nav nav-pills nav justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link" href="/homepage">Home</a>
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
                              <li><a class="dropdown-item" href="/WisataAlam_Login">Wisata Alam</a></li>
                              <li><a class="dropdown-item" href="/WisataWahana_Login">Wisata Wahana</a></li>
                            </div>
                            <div class="dropdown kanan">
                              <li><a class="dropdown-item" href="/WisataKuliner_Login">Wisata Kuliner</a></li>
                              <li><a class="dropdown-item" href="/WisataSejarah_Login">Wisata Sejarah</a></li>
                            </div> 
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/TentangKamiLogin">Tentang Kami</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/CekOrder_Login_History">Cek Order</a>
                      </li>
                      <li class="nav-item">
                        <a href="/profile" type="button" class="btn btn-light">Hai, {{Auth::user()->name}}</a>
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
                <h1 class="JudulAlam">LUGS GRAVITY LEMBANG</h1>
            </div>
    
            <div class="space_gambar">
                <img src="./Images/Logo Wisata Wahana.png" alt="">
            </div>
        </div>

        <container id="container">
          <section id ="wisata">

            <div class="gambar">
              <img src="./Images/InfoLugs1.png" alt="" class="left-image">
              <div class="right-column">
                <img src="./Images/InfoLugs2.png" alt="" class="right-image">
                <img src="./Images/InfoLugs3.png" alt="" class="right-image">
              </div>
            </div>

              <div class ="caption">
                <div class="captionKiri">
                  <h1>Wahana <span id="titik">●</span> Bandung, Lembang </h1>
                  <h2>Tiket Wahana Lugs Gravity Lembang</h2>
                  <h3>Rating 4.6/5 <span id="titik">●</span> <img src="./Images/Logo Tiket.png" id="icon-ticket"> 10 RB Terjual <span id="titik">●</span> Buka <span id="titik">●</span> Everyday: 08:00 - 17:00</h3>
                  <h3>Dapat dikunjungi hari ini</h3>
                </div>
                
                <div class="captionKanan">
                  <h4>Mulai Dari:</h4>
                  <h5>IDR 50.000,00</h5>
                  <div class="Lihatinfo">
                    <a href="#" type="button" class="btn btn-light">Lihat Tiket</a>
                  </div>
                </div>
              </div>

              <div class="garis"></div>

              <div class="Deskripsi">
                <h1>Deskripsi</h1>
                <h2>Menawarkan konsep sport gravity atau olahraga berbasis gravitasi, kendaraan di Lug's Gravity bisa bergerak tanpa mesin. Menurut pengelola sekaligus pendiri Lug's Gravity, Hadi Muhari, kendaraan mereka dimodifikasi sendiri, dengan inspirasi dari Olimpiade luge di Selandia Baru. Sebagai informasi, luge merupakan olahraga seluncuran di trek es dengan teknik berkendara setang motor. Sementara itu, untuk versi di Lug's Gravity, kendaraannya telah dimodifikasi dengan roda tiga atau empat, yang dapat bergerak di trek sepanjang 750 meter.</h2>
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

             <div class="garis"></div>
          </section>
        </container> 
        <div class="spaceTiket">
          <div class="tiket">
            <h1>Tiket</h1>

            <div class ="tiket-heading">
              <h1 class="kiri">Pilih tanggal kunjungan</h1>
              <h2 class="kanan">Lihat Kalender</h2>
            </div>

            <div class="tanggal">
              <button type="button" class="btn btn-light">Hari ini <br> 21 mei</button>
              <button type="button" class="btn btn-light">Selasa <br> 22 mei</button>
              <button type="button" class="btn btn-light">Rabu <br> 23 mei</button>
              <button type="button" class="btn btn-light">Kamis <br> 24 mei</button>
              <button type="button" class="btn btn-light">Jumat <br> 25 mei</button>
              <button type="button" class="btn btn-light">Sabtu <br> 26 mei</button>
              <button type="button" class="btn btn-light">Minggu <br> 27 mei</button>
            </div>
          </div>

          <div class="cardTiket"> 
            <div class="carddesc">
              <div class ="card-heading">
                <h1 class="kiri">Tiket Gravity Luge </h1>
                <h2 class="kanan">Jumlah Tiket: </h2>
              </div>

              <div class ="card-tengah">
                <h1 class="kiri"> <span id="titik">●</span> Berlaku di Tanggal Pemesanan <span id="titik">●</span> Tidak Bisa Refund <span id="titik">●</span> Tidak Perlu Reservasi </h1>
                <input type="number" class="form-control" id="inputNumber" >
              </div>

              <div class ="card-bottom">
                <h1 class="kiri">IDR 50.000,00 </h1>
                <div class="BeliSekarang">
                  <button type="button" class="btn btn-light">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <div class="cardTiket"> 
            <div class="carddesc">
              <div class ="card-heading">
                <h1 class="kiri">Tiket Gravity Kart </h1>
                <h2 class="kanan">Jumlah Tiket: </h2>
              </div>

              <div class ="card-tengah">
                <h1 class="kiri"> <span id="titik">●</span> Berlaku di Tanggal Pemesanan <span id="titik">●</span> Tidak Bisa Refund <span id="titik">●</span> Tidak Perlu Reservasi </h1>
                <input type="number" class="form-control" id="inputNumber" >
              </div>

              <div class ="card-bottom">
                <h1 class="kiri">IDR 50.000,00 </h1>
                <div class="BeliSekarang">
                  <button type="button" class="btn btn-light">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <div class="cardTiket"> 
            <div class="carddesc">
              <div class ="card-heading">
                <h1 class="kiri">Tiket Gravity Drift Trike </h1>
                <h2 class="kanan">Jumlah Tiket: </h2>
              </div>

              <div class ="card-tengah">
                <h1 class="kiri"> <span id="titik">●</span> Berlaku di Tanggal Pemesanan <span id="titik">●</span> Tidak Bisa Refund <span id="titik">●</span> Tidak Perlu Reservasi </h1>
                <input type="number" class="form-control" id="inputNumber" >
              </div>

              <div class ="card-bottom">
                <h1 class="kiri">IDR 50.000,00 </h1>
                <div class="BeliSekarang">
                  <button type="button" class="btn btn-light">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <div class="cardTiket"> 
            <div class="carddesc">
              <div class ="card-heading">
                <h1 class="kiri">Tiket Gravity Drift Kart </h1>
                <h2 class="kanan">Jumlah Tiket: </h2>
              </div>

              <div class ="card-tengah">
                <h1 class="kiri"> <span id="titik">●</span> Berlaku di Tanggal Pemesanan <span id="titik">●</span> Tidak Bisa Refund <span id="titik">●</span> Tidak Perlu Reservasi </h1>
                <input type="number" class="form-control" id="inputNumber" >
              </div>

              <div class ="card-bottom">
                <h1 class="kiri">IDR 50.000,00 </h1>
                <div class="BeliSekarang">
                  <button type="button" class="btn btn-light">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <div class="cardTiket"> 
            <div class="carddesc">
              <div class ="card-heading">
                <h1 class="kiri">Tiket Tiga Kali Main </h1>
                <h2 class="kanan">Jumlah Tiket: </h2>
              </div>

              <div class ="card-tengah">
                <h1 class="kiri"> <span id="titik">●</span> Berlaku di Tanggal Pemesanan <span id="titik">●</span> Tidak Bisa Refund <span id="titik">●</span> Tidak Perlu Reservasi </h1>
                <input type="number" class="form-control" id="inputNumber" >
              </div>

              <div class ="card-bottom">
                <h1 class="kiri">IDR 120.000,00 </h1>
                <div class="BeliSekarang">
                  <a href="/MenuPembayaran" type="button" class="btn btn-light">Beli Sekarang</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        
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