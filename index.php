<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <!-- Font -->
  <link href="https://fonts.cdnfonts.com/css/samsung-sharp-sans?styles=24555,24554,24553" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Landing Page</title>
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php' ?>
  <!-- Navbar Ends -->
  <!-- Landing Page -->
  <section class="landing-page">
    <div class="landing-page" id="landing-page">
      <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active position-relative">
              <video src="img/zflip.mp4" class="object-fit-contain" autoplay loop></video>
              <div class="judul-landing position-absolute top-50 start-0 translate-middle-y d-none d-lg-block ms-5">
                <h1 class="fw-bold">Galaxy Z Series</h1>
                <p>Join the flip side</p>
                <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-1">See All</a>
              </div>
            </div>
            <div class="carousel-item position-relative">
              <video src="img/s24v.mp4" class="object-fit-contain" autoplay loop></video>
              <div class="judul-landing position-absolute top-50 start-0 translate-middle-y d-none d-lg-block ms-5">
                <h1 class="fw-bold">Galaxy S24 Series</h1>
                <p>
                  Get epic cashback up to Rp3 Mio* and up to Rp3.7 Mio* off
                  when buy 2 or more Galaxy products.
                </p>
                <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-1">See All</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Landing Page Ends -->
  <main>
    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="container">
        <div class="row align-items-center">
          <!-- Menambahkan kelas align-items-center -->
          <div class="col">
            <div class="judul-tron fw-semibold">
              <!-- Menambahkan kelas text-center -->
              <h1 class="fw-semibold">
                WELCOME TO KIZARU<span class="fst-italic">STORE.</span>
              </h1>
              <h1 class="fw-semibold">
                BRING YOU TO <span>UNLIMITED</span> SPACE WITH THE
                <span>BEST</span> TECHNOLOGY
              </h1>
              <p class="fw-normal">
                Providing the latest products from well-known brands at the
                most friendly prices and the safest delivery!
              </p>
            </div>
          </div>
          <div class="col">
            <div class="img-tron d-flex justify-content-end">
              <!-- Menambahkan kelas d-flex dan justify-content-center -->
              <img src="img/jmb.jpg" alt="Hero" width="400px" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Jumbotron Ends -->
    <!-- Popular Products -->
    <section class="popular-products mt-5">
      <div class="container">
        <div class="judul">
          <h4 class="fw-semibold">POPULAR PRODUCTS</h4>
        </div>
        <div class="row">
          <div class="col">
            <div class="card px-3 py-3">
              <img src="img/s series/s23fe.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title fw-medium">S24 SERIES</h6>
                <p class="card-text">8 Products</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card px-3 py-3">
              <img src="img/s series/s23fe.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title fw-medium">S24 SERIES</h6>
                <p class="card-text">8 Products</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card px-3 py-3">
              <img src="img/s series/s23fe.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title fw-medium">S24 SERIES</h6>
                <p class="card-text">8 Products</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card px-3 py-3">
              <img src="img/s series/s23fe.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title fw-medium">S24 SERIES</h6>
                <p class="card-text">8 Products</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Products Ends-->
    <!-- Produk Baru -->
    <section class="produk-baru">
      <div class="produk">
        <div class="container">
          <div class="judul text-center my-5">
            <h1 class="fw-bold">Produk Terbaru</h1>
          </div>
          <!-- Card Produk -->
          <div class="row row-cols-2 mb-2">
            <!-- Kiri -->
            <div class="col-6">
              <div class="card rounded-4">
                <img src="img/produk-baru/s24c.jpg" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="deskripsi card-img-overlay text-center d-none d-lg-block">
                  <h5 class="card-title">Boost Your Aspiration</h5>
                  <p class="card-text">Achieve Your Goals With Samsung.</p>
                  <a href="#" class="btn btn-dark rounded-5 mt-0">More Details</a>
                </div>
              </div>
            </div>
            <!-- Kanan -->
            <div class="row">
              <div class="col-6">
                <div class="card rounded-4">
                  <img src="img/produk-baru/mobile.png" class="card-img-top img-fluid rounded-4" alt="..." />
                  <div class="tombolpr-a card-img-overlay text-center d-none d-lg-block">
                    <h5 class="m-1 p-0 fw-semibold">Buy More Save More</h5>
                    <p class="m-1 p-0">Online Exclusive Discount</p>
                    <a href="#" class="btn btn-dark rounded-4 py-1 mt-1">More..</a>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card rounded-4">
                  <img src="img/produk-baru/smartw.png" class="card-img-top img-fluid rounded-4" alt="..." />
                  <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                    <h5 class="m-1 p-0">Galaxy Fit3</h5>
                    <p class="m-1 p-0">Your health at a glance</p>
                    <a href="#" class="btn btn-dark rounded-4 py-1 mt-1">More..</a>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card rounded-4 mt-5">
                  <img src="img/produk-baru/sfold.png" class="card-img-top img-fluid rounded-4" alt="..." />
                  <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                    <h5 class="m-1 p-0">Galaxy Z Fold5</h5>
                    <p class="m-1 p-0">Online Exclusive</p>
                    <a href="#" class="btn btn-dark rounded-4 py-1 mt-1">More..</a>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card rounded-4 mt-5">
                  <img src="img/produk-baru/Odyssey.png" class="card-img-top img-fluid rounded-4" alt="..." />
                  <div class="tombolpr card-img-overlay text-center d-none d-lg-block text-light">
                    <h5 class="m-1 p-0">55" Odyssey Ark</h5>
                    <p class="m-1 p-0">Dapatkan diskon 30%</p>
                    <a href="#" class="btn btn-dark rounded-4 py-1 mt-1">More..</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card Produk Ends -->
        </div>
      </div>
    </section>
    <!-- Produk Baru Ends -->
    <!-- Jenis Product -->
    <section class="jenis-produk mt-5">
      <div class="container">
        <!-- Mobile -->
        <div class="cover position-relative">
          <img src="img/cover-jenis/cover-mobile.jpg" alt="" class="d-block w-100 img-fluid" />
          <div
            class="judul position-absolute d-none d-lg-block top-0 start-50 translate-middle-x text-center text-dark">
            <h1 class="mt-3 fw-semibold">Mobile</h1>
            <h5 class="mt-1 fw-light">
              Capture the Perfect Shot Every Time with Galaxy's ProVisual
              Engine
            </h5>
          </div>
          <div class="cover-kata position-absolute d-none d-md-block bottom-0 start-50 translate-middle-x text-center">
            <h1 class="mb-0 fw-semibold">Galaxy S24 Ultra</h1>
            <p class="mb-0 fw-light">
              Unleash new ways to create, connect and more. The new era of
              mobile AI is here.
            </p>
            <a href="#" class="btn btn-dark rounded-5 mb-3">Lihat Semua</a>
          </div>
        </div>
        <!-- Mobile Ends -->
        <!-- TV -->
        <div class="cover position-relative">
          <img src="img/cover-jenis/tv-cover.jpg" alt="" class="d-block w-100 img-fluid" />
          <div class="judul position-absolute d-none d-lg-block top-0 start-50 translate-middle-x text-center">
            <h1 class="mt-5 text-light fw-semibold">TV & AV</h1>
            <h5 class="mt-3 text-light">
              Everlasting brilliance, colorful possibilities
            </h5>
          </div>
          <div class="cover-kata position-absolute d-none d-md-block bottom-0 start-50 translate-middle-x text-center">
            <h1 class="mb-1 text-light fw-semibold">
              Greatness never ends, but evolves
            </h1>
            <a href="#" class="btn btn-dark rounded-5 mb-3">Lihat Semua</a>
          </div>
        </div>
        <!-- TV Ends -->
        <!-- Watch -->
        <div class="cover position-relative">
          <img src="img/cover-jenis/watch-cover.jpg" alt="" class="d-block w-100 img-fluid" />
          <div
            class="judul position-absolute d-none d-lg-block top-0 start-50 translate-middle-x text-center text-dark">
            <h1 class="mt-4 fw-semibold">Mobile</h1>
            <h5 class="mt-1 fw-light">
              Unlock a healthier you. Own your days and your nights with
              Advanced Sleep Coaching
            </h5>
          </div>
          <div class="cover-kata position-absolute d-none d-md-block bottom-0 start-50 translate-middle-x text-center">
            <h1 class="mb-0 fw-semibold row">
              Galaxy Watch6 | Watch6 Classic
            </h1>
            <p class="mb-0">Start your everyday wellness journey</p>
            <a href="#" class="btn btn-dark rounded-5 mb-3">Lihat Semua</a>
          </div>
        </div>
        <!-- Watch Ends -->
      </div>
    </section>
    <!-- Jenis Products Ends -->
    <!-- Rekomendas Produk -->
    <section class="rek-produk mt-4">
      <div class="container">
        <div class="judul text-center">
          <h1 class="fw-semibold">Rekomendasi Untuk Anda</h1>
        </div>
        <div class="produk">
          <div class="row text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0 bg-light">
                <div class="card-body d-flex justify-content-center">
                  <img src="img/z series/foldthom.png" class="card-img-top rounded-5 custom-img" alt="..." />
                </div>
                <h5 class="card-title fw-bold"></h5>
                <p></p>
                <p class="card-text fw-semibold"></p>
                <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Lihat Produk</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0 bg-light">
                <div class="card-body d-flex justify-content-center">
                  <img src="img/z series/fold5.png" class="card-img-top rounded-5 custom-img" alt="..." />
                </div>
                <h5 class="card-title fw-bold"></h5>
                <p></p>
                <p class="card-text fw-semibold"></p>
                <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Lihat Produk</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0 bg-light">
                <div class="card-body d-flex justify-content-center">
                  <img src="img/a series/a54lime.png" class="card-img-top rounded-5 custom-img" alt="..." />
                </div>
                <h5 class="card-title fw-bold"></h5>
                <p></p>
                <p class="card-text fw-semibold"></p>
                <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Lihat Produk</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0 bg-light">
                <div class="card-body d-flex justify-content-center">
                  <img src="img/s series/s24violet.png" class="card-img-top rounded-5 custom-img" alt="..." />
                </div>
                <h5 class="card-title fw-bold"></h5>
                <p></p>
                <p class="card-text fw-semibold"></p>
                <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Lihat Produk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Rekomendas Produk Ends -->
    <!-- Testimoni -->
    <section class="testimoni">
      <div class="container">
        <div class="judul">
          <h1 class="fw-semibold text-center">Testimoni</h1>
        </div>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/testi.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/testi.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/testi.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Testimoni Ends -->
  </main>
  <!-- FOOTER -->
  <?php include 'footer.php' ?>
  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>