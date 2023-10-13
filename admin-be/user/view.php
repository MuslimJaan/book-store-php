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
                            <h6>#</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6>Muslim</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Image</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Description</h6>
                        </div>
                        <div class="col-10">
                            <h6 class="w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea perferendis explicabo id voluptatum veniam illo voluptate vel voluptates maxime.</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Author</h6>
                        </div>
                        <div class="col-10">
                            <h6>Faraz</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Category</h6>
                        </div>
                        <div class="col-10">
                            <h6>History</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Created_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Updated_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "../leyout/footer.php" ?>

    </div>
</div>