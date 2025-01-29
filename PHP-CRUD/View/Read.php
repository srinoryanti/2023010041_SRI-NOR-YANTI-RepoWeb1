<!-- Header -->
<?php include '../header.php' ?>
    <h1 class="text-center">User Details</h1>
    <div class="container">
    <table class="table table-striped table-bordered tablehover">
    <thead class="table-dark">
<tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col"> Password</th>
</tr>
    </thead>
<tbody>
<tr>

            <?php
            // Memastikan user_id ada di URL
            if (isset($_GET['user_id'])) {
                $userid = mysqli_real_escape_string($conn, $_GET['user_id']);
                
                // SQL query untuk mengambil data berdasarkan ID
                $query = "SELECT * FROM user WHERE ID = {$userid}";
                $view_users = mysqli_query($conn, $query);

                if ($view_users && mysqli_num_rows($view_users) > 0) {
                    while ($row = mysqli_fetch_assoc($view_users)) {
                        $id = $row['ID'];
                        $user = htmlspecialchars($row['username']);
                        $email = htmlspecialchars($row['email']);
                        $pass = htmlspecialchars($row['password']);
                        echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$user}</td>";
                        echo "<td>{$email}</td>";
                        echo "<td>{$pass}</td>";
                        echo "</tr>";
                    }
                } else {
                    // Jika tidak ada data yang ditemukan
                    echo "<tr><td colspan='4' class='text-center'>No user found.</td></tr>";
                }
            } else {
                // Jika tidak ada user_id di URL
                echo "<tr><td colspan='4' class='text-center'>No user ID provided.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Tombol Back -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include '../footer.php'; ?>
