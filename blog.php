<?php
require 'config.php';

$posts = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll();
$art_items = $pdo->query("SELECT * FROM art_items ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Art Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .navbar-brand {
            font-family: 'Pacifico', cursive;
            font-size: 24px;
        }
    </style>
</head>

<body>

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
            </ul>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <h2>The Starry Mountains</h2>
        <img src="image.jpg" alt="The Starry Mountains" class="img-fluid mb-3" style="max-height: 50vh;">
        <p>
            One of the most fascinating artworks to have graced the world recently is reminiscent of Van Gogh's Starry Night. However, this masterpiece portrays not a quiet town but majestic mountains under the luminescent sky. The swirling patterns of the stars and the moon illuminating the peaks and valleys provide an ethereal and almost dreamlike quality to the painting. The detailed brushwork and vibrant colors capture the imagination, transporting the viewer to a serene, otherworldly landscape. This artwork, while drawing inspiration from classics, stands on its own as a modern testament to the timeless beauty of nature and the universe.
        </p>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>