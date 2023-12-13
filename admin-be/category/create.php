<?php
include "../../book-store/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $qry = "insert into categories(name)values('$name')";
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
                    <h1 class="mt-5">Category Information</h1>
                </div>
            </div>
            <form method="post" action="create.php">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="author">Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        <?php include "../leyout/footer.php" ?>

    </div>
</div>
</body>

</html>