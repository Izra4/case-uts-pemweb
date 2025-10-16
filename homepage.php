<?php
include 'data.php';

$uploadDir = 'product-images/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = '';
    $harga = '';
    $deskripsi = '';
    $gambarPath = '';

    // Cek apakah file gambar diupload
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $fileName = '';
        $targetPath = $uploadDir . $fileName;

        // Pastikan folder upload ada
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Pindahkan file, clue pake method yang ada di module
        if () {
            
        }
    }

    // Kalau semua field isi, tambahkan produk baru
    if (!empty($nama) && !empty($harga) && !empty($deskripsi)) {
        $newProduct = [
           // Ini tinggal masukin data aja kalo udah valid dan masuk semua
        ];

        $products[] = $newProduct;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Homepage Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>

    <div class="">
        <?php foreach ($products as $p): ?>
            <div class="">
                
            </div>
        <?php endforeach; ?>
    </div>

    <hr>

    <h3>Tambah Produk Baru</h3>
    <form> <!-- Jangan lupa enctype, method, action -->
        <!-- Jangan lupa di input perlu tag apa biar wajib diisi? -->
        <label>Nama Produk:</label><br>
        <input><br><br>

        <label>Harga Produk:</label><br>
        <input><br><br>

        <label>Deskripsi:</label><br>
        <textarea></textarea><br><br>

        <label>Upload Gambar:</label><br>
        <input><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
