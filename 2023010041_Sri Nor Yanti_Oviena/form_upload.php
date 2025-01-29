<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="upload_produk.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Produk:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="koleksi_gamis">Koleksi Gamis:</label>
        <input type="text" name="koleksi_gamis" id="koleksi_gamis" required><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required><br><br>

        <label for="gambar">Upload Gambar:</label>
        <input type="file" name="gambar" id="gambar" accept="image/*" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
