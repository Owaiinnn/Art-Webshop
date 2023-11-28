<?php
require 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $stmt = $pdo->prepare("INSERT INTO art_items (name, description, price, image) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute([$name, $description, $price, $image]);

    if ($result) {
        $message = "Art piece added successfully!";
    } else {
        $message = "There was a problem adding the art piece.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Art Piece</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Owain's Finest</a>
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
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <h2>Add New Art Piece for Sale</h2>

    <?php if (!empty($message)): ?>
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label for="name">Art Piece Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="text" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Add Art Piece</button>
    </form>
</div>
</body>
</html>
