<?php
require 'config.php';

if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    $item = $pdo->query("SELECT * FROM art_items WHERE id = $item_id")->fetch();

    if ($item) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $found = false;
        foreach ($_SESSION['cart'] as &$cartItem) {
            if ($cartItem['id'] == $item['id']) {
                $cartItem['quantity'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => 1
            ];
        }
    }
}

header('Location: store.php');
exit;