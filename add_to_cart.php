<?php
require 'config.php';

if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
    

    $stmt = $pdo->prepare("SELECT * FROM art_items WHERE id = ?");
    $stmt->execute([$itemId]);
    $item = $stmt->fetch();

    if ($item) {

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$itemId])) {
            $_SESSION['cart'][$itemId]['quantity']++;
        } else {
            $_SESSION['cart'][$itemId] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => 1
            ];
        }
    }
}

header('Location: store.php');
?>
    