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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Produk</h2>
        <a href="view_products.php" class="btn btn-secondary mb-3">Kembali ke Daftar Produk</a>

        <div class="card" style="width: 18rem;">
            <img src="<?= $product['gambar'] ?>" class="card-img-top" alt="Gambar Produk" style="max-height: 300px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?= $product['nama'] ?></h5>
                <p class="card-text"><strong>Koleksi Gamis:</strong> <?= $product['koleksi_gamis'] ?></p>
                <p class="card-text"><strong>Jumlah Stok:</strong> <?= $product['jumlah'] ?></p>
                <p class="card-text"><strong>Gambar:</strong></p>
                <img src="<?= $product['gambar'] ?>" width="200" alt="Gambar Produk">
            </div>
        </div>
        
        <div class="mt-3">
            <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-warning">Edit Produk</a>
            <a href="delete_product.php?id=<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus Produk</a>
        </div>
    </div>
</body>
</html>
