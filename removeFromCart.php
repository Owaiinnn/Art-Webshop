<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['item_key'])) {
    $item_key = $_POST['item_key'];

    unset($_SESSION['cart'][$item_key]);

    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

header('Location: cart.php');
exit;
?>
