<!-- Header -->
<?php include "../header.php"; ?>

<?php
if (isset($_POST['create'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // SQL query untuk menambahkan data pengguna ke tabel users
    $query = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
    $add_user = mysqli_query($conn, $query);

    // Menampilkan pesan apakah query berhasil atau tidak
    if (!$add_user) {
        echo "<div class='alert alert-danger'>Something went wrong: " . mysqli_error($conn) . "</div>";
    } else {
        echo "<div class='alert alert-success'>User added successfully!</div>";
    }
}
?>

<!-- Add User Form -->
<div class="container mt-5">
    <h1 class="text-center">Add User Details</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="user" class="form-label">Username</label>
            <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email ID</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
        <div class="form-group text-center mt-3">
            <input type="submit" name="create" class="btn btn-primary" value="Submit">
        </div>
    </form>
</div>

<!-- Back Button -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include "../footer.php"; ?>
