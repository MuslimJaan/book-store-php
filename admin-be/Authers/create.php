<?php
include "../../book-store/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['aname'];
    $qry = "insert into authors(name)values('$name')";
    $res = mysqli_query($con, $qry);
    if ($res === true) {
        header('location:index.php');
    } else {
        echo "your data is not insert";
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
            <form action="" method="POST">
                <div class="row">

                    <div class="form-group col-lg-6">
                        <label for="author">Name</label>
                        <input type="text" class="form-control" name="aname">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>
</body>

</html>