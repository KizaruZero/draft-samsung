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
  <title>Produk</title>
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php' ?>
  <!-- Navbar Ends -->
  <!-- Landing Page -->
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
                Get epic cashback up to Rp3 Mio* and up to Rp3.7 Mio* off when
                buy 2 or more Galaxy products.
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
  <!-- Landing Page Ends -->
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
                <img src="img/produk-baru/s24plus.jpg" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                  <h5 class="m-1 p-0">Galaxy S24 | S24+</h5>
                  <p class="m-1 p-0">Online Exclusive</p>
                  <a href="#" class="btn btn-dark rounded-5 py-1 mt-1">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4">
                <img src="img/produk-baru/flip5.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                  <h5 class="m-1 p-0">Galaxy Z Flip5</h5>
                  <p class="m-1 p-0">Online Exclusive</p>
                  <a href="#" class="btn btn-dark rounded-5 py-1 mt-1">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4 mt-5">
                <img src="img/produk-baru/sfold.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                  <h5 class="m-1 p-0">Galaxy Z Fold5</h5>
                  <p class="m-1 p-0">Online Exclusive</p>
                  <a href="#" class="btn btn-dark rounded-5 py-1 mt-1">More..</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card rounded-4 mt-5">
                <img src="img/produk-baru/s23fe.png" class="card-img-top img-fluid rounded-4" alt="..." />
                <div class="tombolpr card-img-overlay text-center d-none d-lg-block">
                  <h5 class="m-1 p-0">Galaxy S23 FE</h5>
                  <p class="m-1 p-0">Online Exclusive</p>
                  <a href="#" class="btn btn-dark rounded-5 py-1 mt-1">More..</a>
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
  <div class="produk-hp">
    <!-- Produk Samsung S24-->
    <section id="s24" class="s24">
      <div class="container">
        <div class="cover my-3 position-relative">
          <img src="img/cover-hp/covers24.jpg" alt="" class="d-block w-100 img-fluid" />
          <div class="judul position-absolute d-none d-lg-block top-50 start-0 translate-middle-y ms-5">
            <h1 class="fw-bold">Galaxy S</h1>
            <p class="pt-2 fs-5">Galaxy's ProVisual Engines is Here</p>
            <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-3">See All</a>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/s series/search.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Circle to Search</h6>
                <p class="card-text mt-3 mb-5">
                  Circle it, find it. Just like that
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/s series/titanium.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Titanium</h6>
                <p class="card-text mt-3 mb-5">Armor up with titanium</p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/s series/camera.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Camera</h6>
                <p class="card-text mt-3 mb-4">
                  Powerful NPU. Pro-grade camera. Now with AI
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/s series/gaming.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Gaming</h6>
                <p class="card-text mt-3 mb-4">
                  Our most hyper-realistic mobile gameplay yet
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Hp -->
        <div class="row text-center">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card rounded-5 border-0 ">
              <div class="card-body d-flex justify-content-center">
                <img src="img/z series/foldthom.png" class="card-img-top rounded-5 custom-img" alt="..." />
              </div>
              <h5 class="card-title fw-bold">Galaxy S24 Ultra Thom</h5>
              <p>Thom Browne</p>
              <p class="card-text fw-semibold">Rp 25.999.000</p>
              <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card rounded-5 border-0 ">
              <div class="card-body d-flex justify-content-center">
                <img src="img/s series/s24black.png" class="card-img-top rounded-5 custom-img" alt="..." />
              </div>
              <h5 class="card-title fw-bold">Galaxy S24 Ultra</h5>
              <p>Titanium Black</p>
              <p class="card-text fw-semibold">Rp 23.999.000</p>
              <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card rounded-5 border-0 ">
              <div class="card-body d-flex justify-content-center">
                <img src="img/s series/s24violet.png" class="card-img-top rounded-5 custom-img" alt="..." />
              </div>
              <h5 class="card-title fw-bold">Galaxy S24 Plus</h5>
              <p>Violet</p>
              <p class="card-text fw-semibold">Rp 25.999.000</p>
              <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card rounded-5 border-0 ">
              <div class="card-body d-flex justify-content-center">
                <img src="img/s series/s24violet.png" class="card-img-top rounded-5 custom-img" alt="..." />
              </div>
              <h5 class="card-title fw-bold">Galaxy S24 Plus</h5>
              <p>Violet</p>
              <p class="card-text fw-semibold">Rp 25.999.000</p>
              <a href="#" class="btn btn-dark rounded-5 mx-5 mb-3">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- HP Ends -->
      </div>
    </section>
    <!-- S24 Ends -->

    <!-- Galaxy Z -->
    <section id="galaxyz" class="galaxyz">
      <div class="container">
        <div class="cover my-3 position-relative">
          <img src="img/cover-hp/galaxyzc.jpg" alt="" class="d-block w-100 img-fluid" />
          <div class="judul position-absolute d-none d-lg-block top-50 start-0 translate-middle-y ms-5">
            <h1 class="fw-bold">Galaxy Z</h1>
            <p class="pt-2 fs-5">Join the flip side</p>
            <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-2">See All</a>
          </div>
        </div>
        <div class="row text-center my-3">
          <div class="row text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card bg-light border-0">
                <img src="img/z series/flexcam.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h6 class="card-title">FlexCam</h6>
                  <p class="card-text mt-3 mb-4">
                    The best selfie experience on a Galaxy smartphone
                  </p>
                  <a href="#" class="text-dark fw-medium">Lebih detail</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card bg-light border-0">
                <img src="img/z series/multitasking.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h6 class="card-title">Multitasking</h6>
                  <p class="card-text mt-3 mb-4">
                    Multi Window. Your multitasking secret weapon
                  </p>
                  <a href="#" class="text-dark fw-medium">Lebih detail</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card bg-light border-0">
                <img src="img/z series/flexwindow.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h6 class="card-title">Flex Window</h6>
                  <p class="card-text mt-3 mb-4">
                    The largest cover screen on a Galaxy Z Flip
                  </p>
                  <a href="#" class="text-dark fw-medium">Lebih detail</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card bg-light border-0">
                <img src="img/z series/performance.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h6 class="card-title">Performance</h6>
                  <p class="card-text mt-3 mb-4">
                    Powerful gaming with the fastest Snapdragon
                  </p>
                  <a href="#" class="text-dark fw-medium">Lebih detail</a>
                </div>
              </div>
            </div>

            <!-- HP -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0">
                <img src="img/z series/fliphitam.jpg" class=" card-img-top rounded-5" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Galaxy Z Flip5
                  </h5>
                  <p>
                    Titanium Black
                  </p>
                  <p class="card-text fw-semibold"> Rp 23.999.999
                  </p>
                  <a href="transaksi.php?id=<?= $typea["id"]; ?>" class="btn btn-dark rounded-5">Buy
                    Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0">
                <img src="img/z series/foldthom.jpg" class=" card-img-top rounded-5" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Galaxy Z Fold5 Thom
                  </h5>
                  <p>
                    Thom Browne
                  </p>
                  <p class="card-text fw-semibold"> Rp 27.999.000
                  </p>
                  <a href="transaksi.php?id=<?= $typea["id"]; ?>" class="btn btn-dark rounded-5">Buy
                    Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0">
                <img src="img/z series/flipink.jpg" class=" card-img-top rounded-5" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Galaxy Z Flip5
                  </h5>
                  <p>
                    Lavender
                  </p>
                  <p class="card-text fw-semibold"> Rp 17.999.000
                  </p>
                  <a href="transaksi.php?id=<?= $typea["id"]; ?>" class="btn btn-dark rounded-5">Buy
                    Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <div class="card rounded-5 border-0">
                <img src="img/z series/fold5.jpg" class=" card-img-top rounded-5" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Galaxy Z Fold5 Thom
                  </h5>
                  <p>
                    Thom Browne
                  </p>
                  <p class="card-text fw-semibold"> Rp 27.999.000
                  </p>
                  <a href="transaksi.php?id=<?= $typea["id"]; ?>" class="btn btn-dark rounded-5">Buy
                    Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Galaxy Z Ends -->

    <!-- Galaxy A -->
    <section id="galaxya" class="galaxyz">
      <div class="container">
        <div class="cover my-3 position-relative">
          <img src="img/cover-hp/galaxyA.jpg" alt="" class="d-block w-100 img-fluid" />
          <div class="judul position-absolute d-none d-lg-block top-50 start-0 translate-middle-y ms-5">
            <h1 class="fw-bold">Galaxy A Series</h1>
            <p class="pt-2 fs-5">Awesome is for everyone</p>
            <a href="#" class="btn btn-dark fw-bold rounded-5 py-2 px-4 mt-2">See All</a>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/a series/baterai.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Baterai Awesome</h6>
                <p class="card-text mt-3 mb-4">
                  Baterai 5,000mAh (tipikal) daya tahan baterai lebih optimal
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/a series/camera.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Kamera Awesome</h6>
                <p class="card-text mt-3 mb-5">
                  Multi-camera. Makin sempurna
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/a series/screen.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Layar Awesome</h6>
                <p class="card-text mt-3 mb-4">
                  Nikmati konten yang mulus dengan refresh rate hingga 120Hz
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card bg-light border-0">
              <img src="img/a series/design.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h6 class="card-title">Desain Awesome</h6>
                <p class="card-text mt-3 mb-4">
                  Desain yang cantik dan layout camera yang simpel
                </p>
                <a href="#" class="text-dark fw-medium">Lebih detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Galaxy A Ends -->
  </div>
  <!-- Footer -->
  <footer class="footer bg-dark text-white">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
          <h5 class="">KIZARUSTORE</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
            quos
          </p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
          <h5 class="">Produk</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light">Smartphone</a>
            </li>
            <li>
              <a href="#" class="text-light">Tablet</a>
            </li>
            <li>
              <a href="#" class="text-light">Smartwatch</a>
            </li>
            <li>
              <a href="#" class="text-light">TV & AV</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
          <h5 class="">Layanan</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light">Pengiriman</a>
            </li>
            <li>
              <a href="#" class="text-light">Pembayaran</a>
            </li>
            <li>
              <a href="#" class="text-light">Pengembalian</a>
            </li>
            <li>
              <a href="#" class="text-light">Bantuan</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
          <h5 class="">Kontak Kami</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light">Facebook</a>
            </li>
            <li>
              <a href="#" class="text-light">Instagram</a>
            </li>
            <li>
              <a href="#" class="text-light">Twitter</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>