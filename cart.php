<?php
require 'config.php';

// Check if a session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$totalPrice = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
    <h1>Your Shopping Cart</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['cart'])):
                foreach ($_SESSION['cart'] as $key => $item):
                    $itemPrice = isset($item['price']) ? $item['price'] : 0;
                    $totalPrice += $itemPrice * $item['quantity'];
            ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>$<?php echo number_format($itemPrice, 2); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($itemPrice * $item['quantity'], 2); ?></td>
                <td>
                    <form action="removeFromCart.php" method="post">
                        <input type="hidden" name="item_key" value="<?php echo $key; ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </td>
            </tr>
            <?php
                endforeach;
            endif;
            ?>
            <tr>
                <td colspan="3" class="text-right"><strong>Total:</strong></td>
                <td>$<?php echo number_format($totalPrice, 2); ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
    <a href="store.php" class="btn btn-primary">Continue Shopping</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
