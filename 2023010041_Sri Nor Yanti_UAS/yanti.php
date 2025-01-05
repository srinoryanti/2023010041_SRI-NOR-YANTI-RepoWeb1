<?php
// index.php (Landing Page)

// Include database configuration
include 'config.php';

// Fetch landing page content
dataQuery = "SELECT * FROM landing_page_content LIMIT 1";
$result = $conn->query($dataQuery);
$landingContent = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oviena Gamis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Oviena Gamis</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Welcome to Oviena Gamis</h1>
        <p><?php echo $landingContent['description']; ?></p>
        <h2>Our Products</h2>
        <div class="row">
            <?php
            // Fetch products
            $productQuery = "SELECT * FROM products";
            $products = $conn->query($productQuery);
            while ($product = $products->fetch_assoc()) {
                echo "<div class='col-md-4'>
                        <div class='card'>
                            <img src='uploads/" . $product['image'] . "' class='card-img-top' alt='Product Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $product['name'] . "</h5>
                                <p class='card-text'>Rp " . $product['price'] . "</p>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Oviena Gamis</p>
    </footer>
</body>
</html>

<?php
// login.php (Admin Login)

// Start session
session_start();

// Include database configuration
include 'config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header('Location: dashboard.php');
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>

<?php
// dashboard.php (Admin Dashboard)

// Start session
session_start();

// Redirect if not logged in
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// Include database configuration
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Welcome, <?php echo $_SESSION['admin']; ?></h1>
        <a href="manage_products.php" class="btn btn-primary">Manage Products</a>
        <a href="manage_landing.php" class="btn btn-secondary">Edit Landing Page</a>
        <a href="export.php" class="btn btn-success">Export Data</a>
    </div>
</body>
</html>
