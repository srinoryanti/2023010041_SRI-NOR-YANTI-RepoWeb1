<!-- Header -->
<?php include '../header.php' ?>
<h1 class="text-center">Perbarui Detail Data</h1>
<div class="container ">
    <?php
    // Memeriksa apakah variabel diset menggunakan fungsi 'isset()'
    if (isset($_GET['makanan_id'])) {
        $makananid = $_GET['makanan_id'];

        // Query SQL untuk mengambil data berdasarkan id=$makananid
        $query = "SELECT * FROM makanan WHERE id = {$makananid}";
        $view_data = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($view_data)) {
            $id = $row['id'];
            $nama = $row['nama'];
            $jenismakanan = $row['jenismakanan'];
            $jumlah = $row['jumlah'];
        }
    }

    // Memproses data form saat form disubmit
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $jenismakanan = $_POST['jenismakanan'];
        $jumlah = $_POST['jumlah'];

        // Query SQL untuk memperbarui data
        $query = "UPDATE makanan SET nama = '{$nama}', jenismakanan = '{$jenismakanan}', jumlah = '{$jumlah}' WHERE id = {$makananid}";
        $update_data = mysqli_query($conn, $query);

        echo "<script type='text/javascript'>alert('Data berhasil diperbarui!')</script>";
    }
    ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
        </div>
        <div class="form-group">
            <label for="jenismakanan">Jenis Makanan</label>
            <input type="text" name="jenismakanan" class="form-control" value="<?php echo $jenismakanan ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="<?php echo $jumlah ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Perbarui">
        </div>
    </form>
</div>

<!-- Tombol Kembali ke Halaman Sebelumnya -->
<div class="container text-center mt-5">
    <a href="../view/memesan.php" class="btn btn-warning mt-5">Kembali</a>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>