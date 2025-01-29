<?php
include 'db.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $nama = $_POST['nama'];
    $koleksi_gamis = $_POST['koleksi_gamis'];
    $jumlah = $_POST['jumlah'];
    
    // Check if file was uploaded without errors
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        // Get the uploaded file's name and temporary location
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        
        // Set the target directory for uploads
        $target_dir = "uploads/";
        
        // Create a unique name for the image to avoid conflicts
        $gambar_target = $target_dir . basename($gambar);
        
        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($gambar_tmp, $gambar_target)) {
            // Prepare the SQL query to insert the data into the database
            $sql = "INSERT INTO gamis_collection (nama, koleksi_gamis, jumlah, gambar) 
                    VALUES ('$nama', '$koleksi_gamis', '$jumlah', '$gambar')";
            
            // Execute the query and check if the insert was successful
            if ($conn->query($sql) === TRUE) {
                echo "Produk berhasil ditambahkan!";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Gagal mengupload gambar.";
        }
    } else {
        echo "File gambar tidak valid.";
    }
}
?>
