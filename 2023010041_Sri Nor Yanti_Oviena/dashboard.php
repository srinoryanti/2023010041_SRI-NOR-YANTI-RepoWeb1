<?php
session_start();

// Periksa apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

// Query untuk menampilkan produk dari tabel gamis_collection
$sql = "SELECT * FROM gamis_collection";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Oviena Gamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white text-center p-3">
        <h1>Dashboard Admin Oviena Gamis</h1>
    </header>

    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="logout.php" class="btn btn-danger">Logout</a>
                <a href="add_product.php" class="btn btn-success">Tambah Produk</a>
            </div>
        </div>

        <h2>Daftar Produk</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Koleksi Gamis</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>CRUD operations</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['nama']) ?></td>
                            <td><?= htmlspecialchars($row['koleksi_gamis']) ?></td>
                            <td><?= intval($row['jumlah']) ?></td>
                            <td>
                                <?php if (!empty($row['gambar']) && file_exists('uploads/' . $row['gambar'])): ?>
                                    <img src="<?= 'uploads/' . htmlspecialchars($row['gambar']) ?>" width="100" height="100" alt="Gambar Produk">
                                <?php else: ?>
                                    <span class="text-danger">Gambar tidak tersedia</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="view_product.php?id=<?= $row['id'] ?>" class='btn btn-primary'><i class='bi bi-eye'></i> View</a>
                                <a href="edit_product.php?id=<?= $row['id'] ?>" class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a>
                                <a href="delete_product.php?id=<?= $row['id'] ?>"class='btn btn-danger'><i class='bi bi-trash'></i> Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada produk yang ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3">
        <p>&copy; 2025 Oviena Gamis | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

