<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <!-- sidebar -->
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <!-- content -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-light p-3 bg-info">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Books </li>
            </ol>
        </nav>
        <div class="container">
            <div class="row bg-info">
                <div class="col-lg-6 mt-5">
                    <a href="./index.php"> <i style="font-size: 40px;" class="fa fa-arrow-circle-left text-light" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-6">
                    <h1 class="mt-5">Book Information</h1>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="title">Id</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="author">Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="title">Auther</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="author">Category</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="genre">Image</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label for="author">Message</label>
                    <input type="message" class="form-control p-5">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>
</body>

</html>