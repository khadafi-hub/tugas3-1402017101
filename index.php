<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>3D Calculator</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" >
  <link href="href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <script>
    var namatamu = prompt("Siapa nama kamu?", "");

    var h=(new Date()).getHours();
    var m=(new Date()).getMinutes();
    var s=(new Date()).getSeconds();

    var ucapan = ""

    if (h > 3 && h <  12) ucapan = "Selamat pagi";
    if (h > 11 && h <  18) ucapan = "Selamat siang";
    if (h > 17 && h <  24) ucapan = "Selamat malam";
    if (h > 23 || h <  4 ) ucapan = "Selamat menjelang dini hari"; 


  </script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">3D Calcultor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">3D Calculator</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>3D Calculator</span></h2>
          <p class="animate__animated fanimate__adeInUp">Halo, <script> document.write( ucapan + " " + namatamu );</script></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About</a>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title " data-aos="zoom-out">
          <h2>About</h2>
          <p>Who Am I</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Halo, saya Muhammad Khadafi salah satu mahasiswa Universitas Yarsi fakultas Teknologi Informasi prodi Teknik Informatika
              dengan NPM 1402017101 dan di kesempatan kali ini saya membuat website 3D Calculator yang berfungsi menghitung luas permukaan
              dan volume beberapa bangun ruang sebagai berikut.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Bola</li>
              <li><i class="ri-check-double-line"></i> Silinder</li>
              <li><i class="ri-check-double-line"></i> Kerucut</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Kalian dapat menggunakan fitur yang ada di website ini 
              secara gratis untuk menghitung luas permukaan maupun volum bola, silinder, dan Kerucut 
              dengan persentase ketepatan 99%, tekan tombol di bawah untuk langsung mencobanya. 
            </p>
            <a href="#features" class="btn-learn-more">3D Calculator</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-football-line"></i>
              <h4 class="d-none d-lg-block">Bola</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-database-2-line"></i>
              <h4 class="d-none d-lg-block">Silinder</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-rocket-line"></i>
              <h4 class="d-none d-lg-block">Kerucut</h4>
            </a>
          </li>

        <div class="tab-content" data-aos="fade-up">
          
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2>Bola</h2>

                <form id="Formulir_bola" name="formulir_bola" method="post" action="">
                  <table width="1000">
                    <tr>
                      <td width="350" color="black" size="5">Masukan Jari-Jari Bola (Dalam Meter)</td>
                      <td><input name="jari_bola" type="text" id="jari_bola"></td>
                    </tr>
                  </table>
             
                <a class="features-btn align-middle" type="button" onclick="cariluasbola()">Hitung</a>
                
                <br>
                <br>
                <h4>Hasil Perhitungan</h4>
                  <table width="500">
                    <tr>
                      <td width="170" color="black" size="5">Luas Permukaan</td>
                      <td><input name="luas_bola" type="text" id="luas_bola" readonly></td>
                    </tr>
                    <tr>
                      <td width="170" color="black" size="5">Volume</td>
                      <td><input name="volume_bola" type="text" id="volume_bola" readonly></td>
                    </tr>
                  </table>
                </form>
                <a class="features-btn align-middle" type="button" onclick="clearbola()">Clear</a>

                <script laguage="javascript">
                  function cariluasbola()
                  {
                  jari_bola=formulir_bola.jari_bola.value;
                  formulir_bola.luas_bola.value=(4*(22/7)*jari_bola*jari_bola).toFixed(2);
                  formulir_bola.volume_bola.value=((4/3)*(22/7)*jari_bola*jari_bola*jari_bola).toFixed(2);
                  }

                  function clearbola()
                  {
                    formulir_bola.jari_bola.value="";
                    formulir_bola.luas_bola.value="";
                    formulir_bola.volume_bola.value="";
                  }

                </script>

              </div>
              <div class="col-lg-6 order-1 order-lg-4 text-center">
                <br>
                <br>
                <br>
                <br>
                <img src="assets/img/Bola.jpg" alt="Bola" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2>Silinder</h2>

                <form id="Formulir_silinder" name="formulir_silinder" method="post" action="">
                  <table width="1000">
                    <tr>
                      <td width="350" color="black" size="5">Masukan Jari-Jari Silinder (Dalam Meter)</td>
                      <td><input name="jari_silinder" type="text" id="jari_silinder"></td>
                    </tr>
                    <tr>
                      <td width="350" color="black" size="5">Masukan Tinggi Silinder (Dalam Meter)</td>
                      <td><input name="tinggi_silinder" type="text" id="tinggi_silinder"></td>
                    </tr>
                  </table>
             
                <a class="features-btn align-middle" type="button" onclick="cariluasvolumesilinder()">Hitung</a>
                
                <br>
                <br>
                <h4>Hasil Perhitungan</h4>
                  <table width="500">
                    <tr>
                      <td width="170" color="black" size="5">Luas Permukaan</td>
                      <td><input name="luas_silinder" type="text" id="luas_silinder" readonly></td>
                    </tr>
                    <tr>
                      <td width="170" color="black" size="5">Volume</td>
                      <td><input name="volume_silinder" type="text" id="volume_silinder" readonly></td>
                    </tr>
                  </table>
                </form>
                <a class="features-btn align-middle" type="button" onclick="clearsilinder()">Clear</a>

                <script laguage="javascript">
                  function cariluasvolumesilinder()
                  {
                    jari_silinder=formulir_silinder.jari_silinder.value;
                    tinggi_silinder=formulir_silinder.tinggi_silinder.value;

                    formulir_silinder.luas_silinder.value=(2*(22/7)*jari_silinder*(parseInt(jari_silinder) + parseInt(tinggi_silinder))).toFixed(2);
                    formulir_silinder.volume_silinder.value=((22/7)*jari_silinder*jari_silinder*tinggi_silinder).toFixed(2);

                  }

                  function clearsilinder()
                  {
                    formulir_silinder.jari_silinder.value="";
                    formulir_silinder.tinggi_silinder.value="";
                    formulir_silinder.luas_silinder.value="";
                    formulir_silinder.volume_silinder.value="";
                  }

                </script>

              </div>
              <div class="col-lg-6 order-1 order-lg-4 text-center">
                <br>
                <br>
                <br>
                <br>
                <img src="assets/img/Silinder.JPG" alt="Silinder" class="img-fluid">
              </div>
            </div>
          </div>
          
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2>Kerucut</h2>

                <form id="Formulir_kerucut" name="formulir_kerucut" method="post" action="">
                  <table width="1000">
                    <tr>
                      <td width="350" color="black" size="5">Masukan Jari-Jari Kerucut (Dalam Meter)</td>
                      <td><input name="jari_kerucut" type="text" id="jari_kerucut"></td>
                    </tr>
                    <tr>
                      <td width="350" color="black" size="5">Masukan Tinggi Kerucut (Dalam Meter)</td>
                      <td><input name="tinggi_kerucut" type="text" id="tinggi_kerucut"></td>
                    </tr>
                    <tr>
                      <td width="350" color="black" size="5">Garis Pelukis Kerucut</td>
                      <td><input name="garis_kerucut" type="text" id="garis_kerucut" readonly></td>
                    </tr>
                  </table>
             
                <a class="features-btn align-middle" type="button" onclick="carigariskerucut()">Cari Garis Pelukis</a>
                <a class="features-btn align-middle" type="button" onclick="cariluasvolumekerucut()">Hitung</a>
                
                <br>
                <br>
                <h4>Hasil Perhitungan</h4>
                  <table width="500">
                    <tr>
                      <td width="170" color="black" size="5">Luas Permukaan</td>
                      <td><input name="luas_kerucut" type="text" id="luas_kerucut" readonly></td>
                    </tr>
                    <tr>
                      <td width="170" color="black" size="5">Volume</td>
                      <td><input name="volume_kerucut" type="text" id="volume_kerucut" readonly></td>
                    </tr>
                  </table>
                </form>
                <a class="features-btn align-middle" type="button" onclick="clearkerucut()">Clear</a>

                <script laguage="javascript">
                  function carigariskerucut()
                  {
                  jari_kerucut=formulir_kerucut.jari_kerucut.value;
                  tinggi_kerucut=formulir_kerucut.tinggi_kerucut.value;

                  formulir_kerucut.garis_kerucut.value= (Math.sqrt(parseInt(jari_kerucut*jari_kerucut)+parseInt(tinggi_kerucut*tinggi_kerucut))).toFixed(2);

                  }

                  function cariluasvolumekerucut()
                  {
                  jari_kerucut=formulir_kerucut.jari_kerucut.value;
                  garis_kerucut=formulir_kerucut.garis_kerucut.value;
                  tinggi_kerucut=formulir_kerucut.tinggi_kerucut.value;

                 
                  formulir_kerucut.luas_kerucut.value=(parseInt((22/7)*jari_kerucut*jari_kerucut)+parseInt((22/7)*jari_kerucut*garis_kerucut)).toFixed(2);
                  formulir_kerucut.volume_kerucut.value=((1/3)*(22/7)*jari_kerucut*jari_kerucut*tinggi_kerucut).toFixed(2);

                  }

                  function clearkerucut()
                  {
                  formulir_kerucut.jari_kerucut.value="";
                  formulir_kerucut.garis_kerucut.value="";
                  formulir_kerucut.tinggi_kerucut.value="";
                  formulir_kerucut.luas_kerucut.value="";
                  formulir_kerucut.volume_kerucut.value="";

                  }
                </script>

              </div>
              <div class="col-lg-6 order-1 order-lg-4 text-center">
                <br>
                <br>
                <br>
                <br>
                <img src="assets/img/Kerucut.JPG" alt="Kerucut" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="zoom-out">
          <h2>Kontak</h2>
          <p>Kontak</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jln. Raya Pelabuhan Gang.5 Lorong.T No.9B RT.009 RW.05</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>khadafikhadafi0@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 8778 858 8302 (XL)</p>
                <p>+62 8515 772 4858 (Telkomsel)</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>3D Calculator</h3>
      <p>Kunjungi sosial mediaku untuk mengenalku lebih dekat.</p>
      <div class="social-links">
        <a href="https://github.com/khadafi-hub" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://web.facebook.com/profile.php?id=100007886132427" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/khadafi_af/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>3D Calculator</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/khadafi_af/">Muhammad Khadafi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>   
    AOS.init(); 
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
