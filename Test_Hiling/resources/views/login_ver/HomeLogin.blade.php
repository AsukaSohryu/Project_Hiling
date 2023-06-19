<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login_ver/HomeLogin.css')}}">
    <title>Home-Login</title>
    <!------------------------------------------>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!----------------------------------------------------->
  </head>
  <body>
    <section class="body-atas">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="/homepage"><img src="./Images/Home Logo.png" alt="Logo" width="246" height="73.87" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="nav nav-pills nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/homepage">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Wisata</a>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a href="/profile" class="btn btn-light">Hai, {{Auth::user()->name}}</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="input-group input-group-lg">
      <span class="input-group-addon"><img class="search-but" src="./Images/Search.png"></span>
      <input type="text" class="form-control" placeholder="Search">
    </div>
    <div class="link-button">
      <a class="rounded-button" href="/WisataAlam_Login">
        <img class="logo-button" src="./Images/Wisata Alam.png">
      </a>
      <a class="rounded-button" href="/WisataWahana_Login">
        <img class="logo-button" src="./Images/Wisata Wahana.png">
      </a>
      <a class="rounded-button" href="/WisataKuliner_Login">
        <img class="logo-button" src="./Images/Wisata Kuliner.png">
      </a>
      <a class="rounded-button" href="/WisataSejarah_Login">
        <img class="logo-button" src="./Images/Wisata Sejarah.png">
      </a>
    </div>
    </section>

    <div class="kotaterpopuler">
        <h2>Kota Terpopuler !!!</h2>
     </div>

    <div class="kotapopuler">
        <img src="./Images/kotapopuler.png" alt="">
    </div>

    <div class="top-trending">
        <h2>Top Trending</h2>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/Dufan_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Tiket Masuk Dufan</h4>
                <h5 class="card-title">DKI Jakarta</h5>
                <br>
                <br>
                <br>
                <p class="card-text">Rp 175.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/Manggrove_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Hutan Mangrove PIK</h4>
                <h5 class="card-title">DKI Jakarta</h5>
                <br>
                <br>
                <br>
                <p class="card-text">Rp 10.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/paralayang_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Paralayang Puncak Bogor</h4>
                <h5 class="card-title">Bogor</h5>
                <br>
                <br>
                <br>
                <p class="card-text">Rp 450.000</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="top-trending">
        <h2>Promo Menarik</h2>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/Hutan Pancar_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Hutan Pinus Gunung Pancar</h4>
                <h5 class="card-title">Bogor</h5>
                <br>
                <br>
                <br>
                <p class="card-text">Rp 50.000/Tiket</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/Taman Mekarsar_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Taman Mekarsari Hemat Lebaran</h4>
                <h5 class="card-title">Bogor</h5>
                <br>
                <br>
                <br>
                <p class="card-text">Rp 30.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <img src="./Images/Mangujo_card.png" class="card-img-top" alt="...">
  
              <div class="card-body">
                <h4 class="card-title">Beli 1 Gratis 1 Tiket Masuk Saung Angklung Udjo</h4>
                <h5 class="card-title">Bandung</h5>
                <br>
                <br>
                <p class="card-text">Rp 65.000/Tiket</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--  -->
    <!-------herta corner-------------------------------------->
    <!-- <br>
    <br>
    <main class="wrapper">
      <img src="./herta_kuru-main/img/hertaa1.gif" class="preload" />
      <img src="./herta_kuru-main/img/hertaa2.gif" class="preload" />
      <div id="content">
          <h1>Welcome to herta Corner</h1>
          <hr id="subtitle-seperator" />
          <h2>
              The corner for Herta, the <del>annoying</del> cutest genius Honkai:
              Star Rail character out there. She will help u heal for some reasons.
          </h2>
          <div id="counter-container">
              <h3>The kuru~ has been squished</h3>
              <br />
              <br />
              <p id="global-counter">0</p>
              <p id="local-counter">0</p>
              <br />
              <br />
              <p>times</p>
              <button id="counter-button">
                  Squish the kuru~!
              </button>
          </div>
          <hr />
          <div id="grid">
              <noscript>Your browser does not support JavaScript or JavaScript has been
                  disabled.<br />This website relies on JavaScript, so please enable it
                  or use another browser.</noscript>
          </div>
      </div>
    </main> -->
    <!---------------------End Of herta corner------------------------->
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
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

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

