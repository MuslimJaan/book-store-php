<?php include "../../book-store/config.php";

?>
<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <!-- sidebar -->
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <!-- content -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-info text-light p-3">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Home </li>
            </ol>
        </nav>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>Order</h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Order_ID</th>
                            <th>Book_image</th>
                            <th>Booke_Name</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>unit_price</th>
                            <th>Total_Amount</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT o.id, o.total_amount, o.status, oi.quantity, oi.unit_price, b.name, b.image FROM orders o
JOIN orderitems oi ON oi.order_id = o.id
JOIN books b ON b.id = oi.book_id";
                        $query = mysqli_query($con, $select);
                        if (mysqli_num_rows($query)) {
                            foreach ($query as $row) {
                        ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td> <img src="../upload/<?= $row['image'] ?>" alt="" width="50px"></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><?= $row['quantity'] ?></td>
                                    <td><?= $row['unit_price'] ?></td>
                                    <td><?= $row['total_amount'] ?></td>
                                </tr>
                        <?php
                            }
                        } ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php include "../leyout/footer.php" ?>

    </div>
</div>
</body>

</html>