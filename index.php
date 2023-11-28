<!DOCTYPE html>
<html style="margin: 0; padding: 0;">
<head>
    <title>Welcome to Owain's Finest Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> <!-- Pacifico Font -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .navbar-brand {
            font-family: 'Pacifico', cursive;
            font-size: 24px;
        }
        .full-height {
            height: 100%;
        }
        .image-button {
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        /* Override Bootstrap's grid gutters */
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }
        .no-gutters > .col, .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }
    </style>
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

<div class="container-fluid full-height">
    <div class="row no-gutters full-height">
        <!-- Blog Section -->
        <a href="blog.php" class="col-md-6 image-button" style="background-image: url('spartan.jpg');">
            <h2>Visit Blog</h2>
        </a>
        <!-- Shop Art Section -->
        <a href="store.php" class="col-md-6 image-button" style="background-image: url('image.jpg');">
            <h2>Shop Art</h2>
        </a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
