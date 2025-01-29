<!-- Header -->
<?php include '../header.php' ?>
<h1 class="text-center">Tambah Data Gamis</h1>
<div class="container">
    <?php
    if (isset($_POST['create'])) {
        $nama = $_POST['nama'];
        $gamis_collection = $_POST['gamis_collection'];
        $jumlah = $_POST['jumlah'];

        // Query SQL untuk menambahkan data ke tabel makanan
        $query = "INSERT INTO gamis_collection (nama, koleksi_gamis, jumlah) VALUES ('{$nama}', '{$gamis_collection}', '{$jumlah}')";
        $add_data = mysqli_query($conn, $query);

        // Menampilkan pesan apakah query berhasil atau tidak
        if (!$add_data) {
            echo "<script type='text/javascript'>alert('Terjadi kesalahan: " . mysqli_error($conn) . "')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Data berhasil ditambahkan!')</script>";
        }
    }
    ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenismakanan" class="form-label">koleksi_gamis</label>
            <input type="text" name="jenismakanan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary mt-2" value="Tambah">
        </div>
    </form>
</div>

<!-- Tombol Kembali ke Halaman Sebelumnya -->
<div class="container text-center mt-5">
    <a href="../view/memesan.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>