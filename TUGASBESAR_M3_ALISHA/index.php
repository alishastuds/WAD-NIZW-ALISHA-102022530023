<?php
$namaProduk = $merek = $harga = $berat = $warna = $ukuran = "";
$namaProdukErr = $merekErr = $hargaErr = $beratErr = $warnaErr = $ukuranErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaProduk = trim($_POST["namaProduk"]);
    if (empty($namaProduk)) {
        $namaProdukErr = "Nama produk wajib diisi";
    }

    $merek = $_POST["merek"] ?? "";
    if (empty($merek)) {
        $merekErr = "Pilih merek barang";
    }

    $harga = trim($_POST["harga"]);
    if (empty($harga)) {
        $hargaErr = "Harga wajib diisi";
    } elseif (!ctype_digit($harga)) {
        $hargaErr = "Harga hanya boleh angka";
    }

    $berat = trim($_POST["berat"]);
    if (empty($berat)) {
        $beratErr = "Berat wajib diisi";
    } elseif (!is_numeric($berat)) {
        $beratErr = "Berat harus berupa angka";
    }

    $warna = trim($_POST["warna"]);
    if (empty($warna)) {
        $warnaErr = "Varian warna wajib diisi";
    }

    $ukuran = trim($_POST["ukuran"]);
    if (empty($ukuran)) {
        $ukuranErr = "Varian ukuran wajib diisi";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul Katalog Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Katalog Produk</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            
            <!-- Input Nama -->
            <div class="form-group">
                <label for="namaProduk">Nama Produk:</label>
                <input type="text" id="namaProduk" name="namaProduk" value="<?php echo $namaProduk; ?>">
                <span class="error"><?php echo $namaProdukErr ? "* $namaProdukErr" : ""; ?></span>
            </div>

            <!-- Input Merek -->
            <div class="form-group">
                <label for="merek">Merek Barang:</label>
                <select id="merek" name="merek">
                    <option value="">-- Pilih --</option>
                    <option value="Brand A" <?php echo ($merek == "Brand A") ? "selected" : ""; ?>>Brand A</option>
                    <option value="Brand B" <?php echo ($merek == "Brand B") ? "selected" : ""; ?>>Brand B</option>
                    <option value="Brand C" <?php echo ($merek == "Brand C") ? "selected" : ""; ?>>Brand C</option>
                </select>
                <span class="error"><?php echo $merekErr ? "* $merekErr" : ""; ?></span>
            </div>

            <!-- Input Harga -->
            <div class="form-group">
                <label for="harga">Harga Produk (Rp):</label>
                <input type="text" id="harga" name="harga" value="<?php echo $harga; ?>">
                <span class="error"><?php echo $hargaErr ? "* $hargaErr" : ""; ?></span>
            </div>

            <!-- Input Berat -->
            <div class="form-group">
                <label for="berat">Berat (Gram):</label>
                <input type="text" id="berat" name="berat" value="<?php echo $berat; ?>">
                <span class="error"><?php echo $beratErr ? "* $beratErr" : ""; ?></span>
            </div>

            <!-- Input Varian Warna -->
            <div class="form-group">
                <label for="warna">Varian Warna:</label>
                <input type="text" id="warna" name="warna" value="<?php echo $warna; ?>">
                <span class="error"><?php echo $warnaErr ? "* $warnaErr" : ""; ?></span>
            </div>

            <!-- Input Varian Ukuran -->
            <div class="form-group">
                <label for="ukuran">Varian Ukuran:</label>
                <input type="text" id="ukuran" name="ukuran" value="<?php echo $ukuran; ?>">
                <span class="error"><?php echo $ukuranErr ? "* $ukuranErr" : ""; ?></span>
            </div>

            <!-- Tombol Submit -->
            <div class="button-container">
                <button type="submit">Simpan Produk</button>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$namaProdukErr && !$merekErr && !$hargaErr && !$beratErr && !$warnaErr && !$ukuranErr) {
    ?>
        <div class="container">
            <h3>Data Katalog Produk:</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Merek</th>
                            <th>Harga</th>
                            <th>Berat (gr)</th>
                            <th>Warna</th>
                            <th>Ukuran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $namaProduk; ?></td>
                            <td><?php echo $merek; ?></td>
                            <td><?php echo $harga; ?></td>
                            <td><?php echo $berat; ?></td>
                            <td><?php echo $warna; ?></td>
                            <td><?php echo $ukuran; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</body>
</html>