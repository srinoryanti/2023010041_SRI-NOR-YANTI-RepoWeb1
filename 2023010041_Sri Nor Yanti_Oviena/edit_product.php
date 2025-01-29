<?php
include 'db.php';

// Memastikan ada parameter ID yang diterima di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Query untuk mendapatkan data produk berdasarkan ID
    $sql = "SELECT * FROM gamis_collection WHERE id = $id";
    $result = $conn->query($sql);

    // Mengecek apakah produk ditemukan
    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
    } else {
        echo "<script>alert('Produk tidak ditemukan!'); window.location.href='view_products.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID produk tidak ditemukan!'); window.location.href='view_products.php';</script>";
    exit;
}

// Memproses form edit produk
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $koleksi_gamis = mysqli_real_escape_string($conn, $_POST['koleksi_gamis']);
    $jumlah = intval($_POST['jumlah']);
    $gambar = $product['gambar']; // Gunakan gambar lama sebagai default

    // Cek apakah gambar baru diunggah
    if (!empty($_FILES['gambar']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi jenis file gambar
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                $gambar = basename($_FILES['gambar']['name']); // Simpan nama file ke database
            } else {
                echo "<script>alert('Gagal mengunggah gambar!');</script>";
            }
        } else {
            echo "<script>alert('Format gambar tidak valid! Hanya JPG, JPEG, atau PNG yang diizinkan.');</script>";
        }
    }

    // Update data produk
    $stmt = $conn->prepare("UPDATE gamis_collection SET nama = ?, koleksi_gamis = ?, jumlah = ?, gambar = ? WHERE id = ?");
    $stmt->bind_param("ssisi", $nama, $koleksi_gamis, $jumlah, $gambar, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Produk berhasil diperbarui!'); window.location.href='view_products.php';</script>";
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
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Produk</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($product['nama']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="koleksi_gamis" class="form-label">Koleksi Gamis</label>
                <input type="text" class="form-control" id="koleksi_gamis" name="koleksi_gamis" value="<?= htmlspecialchars($product['koleksi_gamis']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Stok</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= htmlspecialchars($product['jumlah']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Ganti Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <div class="mt-2">
                    <img src="uploads/<?= htmlspecialchars($product['gambar']) ?>" alt="Gambar Produk" width="100">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="view_products.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
