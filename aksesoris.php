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

  <title>Input</title>
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
  <!-- Produk Baru -->
  <section class="product">
    <div class="produk">
      <div class="container">
        <div class="judul text-center my-5">
          <h1 class="fw-bold">Produk Terbaru</h1>
        </div>
        <!-- Card Produk -->
        <div class="row my-2">
          <div class="col">
            <div class="card rounded-4 border-0">
              <img src="img/Case/casehitam.png" class="card-img-top img-fluid rounded-4" alt="..." />
              <div class="text-center d-none d-lg-block mt-2">
                <h5 class="card-title fw-bold">
                  Galaxy S24 Ultra Smart View Wallet Case
                </h5>
                <a href="#case" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-4 border-0">
              <img src="img/Buds/bud2.png" class="card-img-top img-fluid rounded-4" alt="..." />
              <div class="text-center d-none d-lg-block mt-2">
                <h5 class="card-title fw-bold">Galaxy Buds2 Pro</h5>
                <a href="#ear" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card rounded-4 border-0">
              <img src="img/Case/flipsuit.png" class="card-img-top img-fluid rounded-4" alt="..." />
              <div class="text-center d-none d-lg-block mt-2">
                <h5 class="card-title fw-bold">
                  Galaxy S24 Ultra Flipsuit Case
                </h5>
                <a href="#case" class="btn btn-dark text-white rounded-5 my-2">Beli sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card Produk Ends -->
    </div>
  </section>
  <!-- Footer -->
  <?php include 'footer.php' ?>
  <!-- Footer Ends -->
  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>