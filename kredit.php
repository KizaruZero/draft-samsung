<?php
if (isset($_GET['image']) && isset($_GET['title']) && isset($_GET['price'])) {
    // Ambil data yang dikirimkan
    $image = $_GET['image'];
    $title = $_GET['title'];
    $totalHarga = $_GET['price'];
} else {
    // Jika tidak ada data yang dikirimkan, kembalikan ke halaman produk
    header('Location: produk.php');
}


// hitung uang muka

$uangMuka = 0;
$sisaHarga = 0;
$jangkaAngsuran = 0;
$bungaFlat = 0;
$bungaPerbulan = 0;
$angsuranPokok = 0;
$angsuranBunga = 0;
$totalAngsuran = 0;
$tampilkanTabel = false;

if (isset($_POST["hitung"])) {
    $uangMuka = $totalHarga * $_POST["uangMuka"] / 100;
    $sisaHarga = $totalHarga - $uangMuka;
    $jangkaAngsuran = $_POST["jangkaWaktu"];
    $bungaFlat = $_POST["bungaFlat"];
    $bungaPerbulan = $bungaFlat / 12;
    $angsuranPokok = $sisaHarga / $jangkaAngsuran;
    $angsuranBunga = $bungaPerbulan * $sisaHarga / 100;
    $totalAngsuran = $angsuranPokok + ($bungaPerbulan * $sisaHarga / 100);
    $tampilkanTabel = true;
}
?>


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
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php' ?>
    <!-- Navbar Ends -->
    <section class="barang">
        <div class="container ">
            <div class="barang-kredit card" style="margin-top: 6rem;">
                <div class="judul text-center mt-2 ">
                    <h2>Barang Kredit</h2>
                </div>
                <div class="foto-barang d-flex justify-content-center mt-3">
                    <img src="<?= $image ?>" alt="" class="img-fluid" width="400px">
                </div>
                <table class="table table-bordered">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <tr>
                            <td>Nama Produk</td>
                            <td>
                                <?= $title; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td>
                                <?= "Rp " . number_format($totalHarga, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Uang Muka</td>
                            <td>
                                <select name="uangMuka" id="uangMuka" required>
                                    <?php
                                    // Array yang berisi opsi-opsi ROM
                                    $uang_muka = [30, 40, 50, 40, 50, 60, 70, 80, 90, 100];
                                    // Perulangan untuk membuat opsi-opsi secara dinamis
                                    foreach ($uang_muka as $option) {
                                        $label = "$option%";
                                        echo "<option value='$option'>$label</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bunga Pinjaman Flat</td>
                            <td>
                                <select name="bungaFlat" id="bungaFlat" required>
                                    <?php
                                    // Array yang berisi opsi-opsi ROM
                                    $bunga_flat = [5, 6, 7, 8, 9, 10];
                                    // Perulangan untuk membuat opsi-opsi secara dinamis
                                    foreach ($bunga_flat as $opsiBunga) {
                                        $labelBunga = "$opsiBunga%";
                                        echo "<option value='$opsiBunga'>$labelBunga</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jangka Waktu Pinjaman (x)</td>
                            <td>
                                <input type="number" class="form-control" id="jangaWaktu" name="jangkaWaktu" min="1"
                                    required />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" class="btn btn-primary" name="hitung">
                                    Mulai Simulasi!
                                </button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <div class="hasil-simulasi mt-3">
                <div class="info-bunga">
                    <h2 class="text-center">Hasil Simulasi</h2>
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama Produk</td>
                            <td>
                                <?= $title; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td>
                                <?= "Rp " . number_format($totalHarga, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Uang Muka</td>
                            <td>
                                <?= "Rp " . number_format($uangMuka, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Sisa Bayar</td>
                            <td>
                                <?= "Rp " . number_format($sisaHarga, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Jangka Waktu Angsuran</td>
                            <td>
                                <?= $jangkaAngsuran; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Bunga Pertahun</td>
                            <td>
                                <?= "$bungaFlat%"; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Angsuran Pokok/Bulan</td>
                            <td>
                                <?= "Rp " . number_format($angsuranPokok, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Angsuran Bunga/Bulan</td>
                            <td>
                                <?= "Rp " . number_format($angsuranBunga, 0, ',', '.'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Angsuran/Bulan</td>
                            <td>
                                <?= "Rp " . number_format($totalAngsuran, 0, ',', '.'); ?>
                            </td>
                        </tr>
                </div>
                <?php if ($tampilkanTabel): ?>
                    <div class="tabel-pembayaran">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th colspan="5">TABEL PEMBAYARAN ANGSURAN</th>
                                </tr>
                                <th scope="col">#</th>
                                <th scope="col">Angsuran Pokok</th>
                                <th scope="col">Angsuran Bunga</th>
                                <th scope="col">Total Angsuran/Bulan</th>
                                <th scope="col">Saldo Sisa Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= $jangkaAngsuran; $i++) {
                                    $saldoSisa = $sisaHarga - $angsuranPokok;
                                    $sisaHarga = $saldoSisa;
                                    echo "<tr>";
                                    echo "<td>$i</td>";
                                    echo "<td>" . "Rp " . number_format($angsuranPokok, 0, ',', '.') . "</td>";
                                    echo "<td>" . "Rp " . number_format($angsuranBunga, 0, ',', '.') . "</td>";
                                    echo "<td>" . "Rp " . number_format($totalAngsuran, 0, ',', '.') . "</td>";
                                    echo "<td>" . "Rp " . number_format($saldoSisa, 0, ',', '.') . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td>
                                        <?= "Rp " . number_format($angsuranPokok * $jangkaAngsuran, 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($angsuranBunga * $jangkaAngsuran, 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($totalAngsuran * $jangkaAngsuran, 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($saldoSisa, 0, ',', '.'); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>