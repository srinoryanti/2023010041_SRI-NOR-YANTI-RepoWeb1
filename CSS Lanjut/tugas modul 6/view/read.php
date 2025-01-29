<!-- Header -->
<?php include '../header.php' ?>
<h1 class="text-center">Detail Data</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">koleksi_gamis</th>
                <th scope="col">jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php

// Memeriksa apakah variabel diset menggunakan fungsi 'isset()'
// Memproses data form saat form disubmit
if (isset($_GET['gamis_collection_id'])) {
    $makananid = $_GET['makanan_id'];

    // Query SQL untuk mengambil data berdasarkan id=$makananid
    $query = "SELECT * FROM gamis_collection WHERE id = {$gamis_collectionid} ";
    $view_data = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($view_data)) {
        $id = $row['id'];
        $nama = $row['nama'];
        $jenismakanan = $row['koleksi_gamis'];
        $jumlah = $row['jumlah'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$nama}</td>";
        echo "<td>{$koleksi_gamis}</td>";
        echo "<td>{$jumlah}</td>";
        echo "</tr>";
    }
}
?>
</tr>
</tbody>
</table>
</div>

<!-- Tombol Kembali ke Halaman Sebelumnya -->
<div class="container text-center mt-5">
    <a href="../view/memesan.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>