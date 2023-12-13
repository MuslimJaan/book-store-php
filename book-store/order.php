<?php
session_start();
include "../book-store/config.php";
$cartItems = [];
if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
}
print_r($cartItems);
if(count($cartItems)===0){
    header("Location: shoping_card.php");
    exit;
}
// $user = $_SESSION['user'];
$total = $_POST['total'];

$query = "insert into orders (total_amount, status) values(" . $total . ",'pending')";

$result = mysqli_query($con, $query);

$order_id = mysqli_insert_id($con);

foreach ($cartItems as $item) {
    $query = "insert into orderitems(quantity, unit_price, book_id, order_id) values(" . $item['quantity'] . ", " . $item['price'] . ", " . $item['id'] . ", " . $order_id . ")";
    $result = mysqli_query($con, $query);
}
if ($result) {
    $_SESSION['cartItems'] = [];
}

header("Location: home.php");
?>