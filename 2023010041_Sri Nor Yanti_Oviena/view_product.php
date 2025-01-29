<?php
include 'db.php';

// Query untuk mendapatkan data produk
$sql = "SELECT * FROM gamis_collection ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Gamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Daftar Produk Gamis</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Koleksi Gamis</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['nama']) ?></td>
                            <td><?= htmlspecialchars($row['koleksi_gamis']) ?></td>
                            <td><?= htmlspecialchars($row['jumlah']) ?></td>
                            <td>
                                <?php if (!empty($row['gambar'])): ?>
                                    <img src="uploads/<?= $row['gambar'] ?>" alt="Gambar Produk" class="img-thumbnail" width="100">
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada gambar</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="edit_product.php?id=<?= $row['id'] ?>" class='btn btn-secondary'><i class='bi bi-pencil'></i> Edit</a>
                                <a href="delete_product.php?id=<?= $row['id'] ?>"class='btn btn-danger'><i class='bi bi-trash'></i> Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada produk tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
