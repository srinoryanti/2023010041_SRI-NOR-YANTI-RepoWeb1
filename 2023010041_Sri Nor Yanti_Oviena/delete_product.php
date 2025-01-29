<?php
// Termasuk file koneksi database
include 'db.php';

// Memastikan ada parameter ID untuk penghapusan produk
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mengonversi ID ke integer untuk keamanan

    // Query untuk menghapus produk berdasarkan ID
    $sql = "DELETE FROM gamis_collection WHERE id = ?";

    // Siapkan statement untuk menghindari SQL injection
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameter ID
        $stmt->bind_param("i", $id);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "<script>alert('Produk berhasil dihapus!'); window.location.href='view_products.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='view_products.php';</script>";
        }

        // Tutup statement setelah eksekusi
        $stmt->close();
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='view_products.php';</script>";
    }
} else {
    echo "<script>alert('ID produk tidak ditemukan!'); window.location.href='view_products.php';</script>";
    exit;
}
?>
