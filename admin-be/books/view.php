<?php
include "../../book-store/config.php";

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    $qry = "SELECT books.*,authors.name AS a_name,categories.name AS c_name FROM books
                        JOIN authors ON books.author_id = authors.id
                        JOIN categories ON books.category_id = categories.id WHERE books.id =$bookId";
    $res = mysqli_query($con, $qry);;
    if ($row = mysqli_fetch_assoc($res)) {
    }
}


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
                <li class="breadcrumb-item active text-light" aria-current="page">View </li>
            </ol>
        </nav>
        <div class="container head">

            <div class="row text-light bg-info border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="index.php">
                        <i style="font-size: 40px;" class="fa fa-arrow-circle-left " aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $row['name'] ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Image</h6>
                        </div>
                        <div class="col-10">
                            <img width="100px" height="200px" src=" ../upload/<?= $row['image'] ?>" alt="image not found">

                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Description</h6>
                        </div>
                        <div class="col-10">
                            <h6 class="w-75"><?= $row['description'] ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Author</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $row['a_name'] ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Price</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $row['price'] ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Category</h6>
                        </div>
                        <div class="col-10">
                            <h6><?= $row['c_name'] ?></h6>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>