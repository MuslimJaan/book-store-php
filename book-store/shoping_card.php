<?php
session_start();
$cartItems = [];

if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
}


?>
<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                <h1 class="text-center mt-5 bg-primary text-light p-5 h1">Shopping Cart</h1>
                <table style="background-color:rgb(205, 203, 203);" class="table text-center table-bordered">
                    <tr>
                        <th>Id</th>
                        <th colspan="2">Book</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                    <tbody id="datarow">
                    <?php
                $totalQty=0;
                $grandTotal = 0;
        
                foreach ($cartItems as $index => $item) {
                    $total = $item['price'] * $item['quantity'];
                    $totalQty +=$item['quantity'];
                    $grandTotal +=$total;
                ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td colspan="2"><img src="../admin-be/upload/<?= $item['image'] ?>" alt="" width="70px" height="70px"></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $total ?></td>
                        <form action="add_to_cart.php" method="POST">
                            <td><button name="remove" class="btn btn-danger">Remove</button></td>
                            <td><input type="hidden" name="index" value="<?= $index ?>"></td>
                        </form>
                    </tr>
                <?php
                } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 bg-primary text-light  text-center ">
                <h3 class="">Total Quantity</h3>
            </div>
            <div class="col-lg-3 fw-bold text-center">
                <span id="totalQty"><?= $totalQty?></span>
            </div>
            <div class="col-lg-3 text-center fw-bold">
                <span id="totalPrice">GrandTotal=</span>
                <span id="totalPrice"><?= $grandTotal?></span>
            </div>
            <div class="col-lg-3 fw-bold text-center">
                <form action="order.php" method="post">
                    <input type="hidden" name="total" value="<?= $grandTotal?>">
                    <button type="submit" class="btn w-75 p-2 bg-primary border-0 text-light border-dark">Order Now</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>

</html>