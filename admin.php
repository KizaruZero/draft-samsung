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
  <!-- Form Tambah Data -->
  <section class="biodata">
    <div class="container">
      <h2 class="text-center">Form Handphone</h2>
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
          <table class="table table-bordered">
            <form action="terima.php" method="POST" enctype="multipart/form-data">
              <tr>
                <td>Merk Produk</td>
                <td>
                  <input type="text" class="form-control" id="merk" name="merk" required />
                </td>
              </tr>
              <tr>
                <td>Nama Produk</td>
                <td>
                  <input type="text" class="form-control" id="nama" name="nama" required />
                </td>
              </tr>
              <tr>
                <td>Tipe</td>
                <td>
                  <input type="text" class="form-control" id="tipe" name="tipe" required />
                </td>
              </tr>
              <tr>
                <td>Warna</td>
                <td>
                  <input type="text" class="form-control" id="warna" name="warna" required />
                </td>
              </tr>
              <tr>
                <td>RAM</td>
                <td>
                  <select name="ram" id="ram" required>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>STORAGE</td>
                <td>
                  <select name="rom" id="rom" required>
                    <option value="128">128</option>
                    <option value="256">256</option>
                    <option value="512">512</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Harga Rp</td>
                <td>
                  <input type="number" class="form-control" id="harga" name="harga" required />
                </td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td>
                  <input type="file" class="form-control" id="gambar" name="gambar" accept=".jpg, .jpeg, .png"
                    required />
                </td>
              </tr>
              <tr>
                <td>Spesifikasi</td>
                <td>
                  <textarea class="form-control" id="spek" name="spek" rows="2" required></textarea>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <button type="submit" class="btn btn-primary" name="tambah">
                    Kirim!
                  </button>
                </td>
              </tr>
            </form>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>