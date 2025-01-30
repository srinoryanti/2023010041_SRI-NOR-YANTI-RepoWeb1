<?php
include 'db.php';

// Proses menambah produk baru
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $koleksi_gamis = mysqli_real_escape_string($conn, $_POST['koleksi_gamis']);
    $jumlah = intval($_POST['jumlah']);
    $gambar = '';

    // Cek apakah gambar diunggah
    if (!empty($_FILES['gambar']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi jenis file gambar
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                $gambar = basename($_FILES['gambar']['name']);
            } else {
                echo "<script>alert('Gagal mengunggah gambar!');</script>";
            }
        } else {
            echo "<script>alert('Format gambar tidak valid! Hanya JPG, JPEG, atau PNG yang diizinkan.');</script>";
        }
    }

    // Menambah produk ke database (tanpa menghapus data yang ada)
    $stmt = $conn->prepare("INSERT INTO gamis_collection (nama, koleksi_gamis, jumlah, gambar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $nama, $koleksi_gamis, $jumlah, $gambar);

    if ($stmt->execute()) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location.href='view_products.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Produk Gamis Baru</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="koleksi_gamis" class="form-label">Koleksi Gamis</label>
                <input type="text" class="form-control" id="koleksi_gamis" name="koleksi_gamis" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Stok</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a> <!-- Link Kembali ke Dashboard -->
        </form>
    </div>
</body>
</html>
