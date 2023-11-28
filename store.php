<?php
require 'config.php';

// Retrieve all art items from the database
$art_items = $pdo->query("SELECT * FROM art_items ORDER BY created_at DESC")->fetchAll();

// Check if a session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Get cart item count
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Art Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            border: none; /* Removes the border */
            box-shadow: none; /* Removes the shadow, if any */
        }
        .navbar-brand {
            font-family: 'Pacifico', cursive;
            font-size: 24px;
        }
    </style>
</head>

<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Owain's Finest</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="store.php">Shop Art</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart (<?php echo $cartItemCount; ?>)</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <h1>Art for Sale</h1>
    <div class="row">
        <?php foreach ($art_items as $item) : ?>
        <div class="col-md-4 mb-4">
            <form action="addToCart.php" method="post">
                <div class="card">
                    <img src="<?php echo $item['image']; ?>" class="card-img-top img-fluid" alt="Art Piece" style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></h5>
                        <p class="card-text"><?php echo $item['description']; ?></p>
                        <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                        <button type="submit" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
