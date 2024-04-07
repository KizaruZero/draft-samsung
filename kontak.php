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
  <section class="kontak" id="kontak">
    <div class="container">
      <div class="cover mt-5 position-relative">
        <img src="img/kontak.jpg" alt="" class="d-block w-100 img-fluid" />
        <div
          class="judul-kontak position-absolute d-none d-lg-block top-50 start-50 translate-middle text-center text-white">
          <h1 class="fw-bold">Kami Ada Untuk Anda</h1>
          <p class="pt-1 fs-6">Kontak kami jika Anda butuh bantuan</p>
        </div>
      </div>
      <div class="kontak-kami my-2">
        <h1 class="text-center fw-bold">Kontak Kami</h1>
        <div class="kontak-utama d-flex">
          <div class="social-media d-flex flex-column col-4 p-3">
            <h4>Kontak Panggilan/Reservasi</h4>
            <p>
              Apakah anda memiliki masalah pada produk anda ? silahkan kontak
              kami segera!
            </p>
            <p>
              0800-112-7777 | 0800-112-8888<br />
              B2B | CE | Mobile | Semua Produk<br />
              (Toll-Free / Bebas Biaya)
            </p>
            <p>
              021-56997777<br />
              B2B | CE | Mobile | Semua Produk<br />
              (Non- Toll Free / Kena Biaya / Luar Negeri)
            </p>
            <p>
              Tersedia dari Pukul 06:00 Pagi - 22:00 Malam<br />
              Senin - Minggu (Termasuk hari libur nasional)
            </p>
            <div class="social d-flex mt-5">
              <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
              <div class="elfsight-app-3978808b-95dc-4080-acc4-b690582ac980" data-elfsight-app-lazy></div>
            </div>
          </div>
          <div class="email p-3 col-8">
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" />
              </div>
              <div class="col-md-6">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="telepon" />
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Boyolali 57375.." />
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Alamat 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Rumah.." />
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Kota</label>
                <input type="text" class="form-control" id="inputCity" />
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">Desa</label>
                <select id="inputState" class="form-select">
                  <option selected>Pilih</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="inputZip" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="inputZip" />
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" />
                  <label class="form-check-label" for="gridCheck">
                    Data sudah benar
                  </label>
                </div>
              </div>
              <div class="col-12 mt-1">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include 'footer.php' ?>

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>