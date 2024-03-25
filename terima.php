<?php

//fungsi tangkap gambar
function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
                alert('Pilih gambar terlebih dahulu');
            </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 10000000) {
    echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'imgInput/' . $namaFileBaru);

  return $namaFileBaru;
}

if (isset ($_POST["tambah"])) {
  $merk = $_POST["merk"];
  $nama = $_POST["nama"];
  $warna = $_POST["warna"];
  $harga = $_POST["harga"];
  $rom = $_POST["rom"];
  $layar = $_POST["layar"];
  $fitur = isset ($_POST['fitur']) ? $_POST['fitur'] : "-";
  $ram = $_POST["ram"];
  $gambar = upload();
  $spek = $_POST["spek"];


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hasil</title>
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
  <nav class="navbar navbar-expand-lg bg-light fw-normal fixed-top">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="#">KIZARU<span class="fst-italic">STORE</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-normal">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produk.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aksesoris.html">Accessories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar Ends -->
  <section class="hasil">
    <div class="container">
      <h1 class="text-center">SPESIFIKASI HANDPHONE</h1>
      <p class="text-center">Contoh Hasil Terima dari Inputan User</p>
      <div class="card mb-3 border-0">
        <div class="row g-0">
          <div class="col-md-6 d-flex justify-content-center">
            <img src="imgInput//<?= $gambar ?>" class="img-fluid rounded-start" alt="Gambar Handphone" width="400px" />
          </div>
          <div class="col-md-6">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Merk Produk</th>
                    <td>
                      <?= $merk; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Nama Produk</th>
                    <td>
                      <?= $nama; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Warna Produk</th>
                    <td>
                      <?= $warna; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Harga</th>
                    <td>
                      <?= $harga; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Fitur</th>
                    <td>
                      <?= $fitur; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">RAM</th>
                    <td>
                      <?= $ram; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">ROM</th>
                    <td>
                      <?= $rom; ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">SPESIFIKASI</th>
                    <td>
                      <?= $spek; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>