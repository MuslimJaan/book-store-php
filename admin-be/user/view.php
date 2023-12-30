<?php  include "../../book-store/config.php";

if ($rid = $_REQUEST['id']) {
$res =mysqli_query ($con,"SELECT * FROM users WHERE id =$rid");
    if (mysqli_num_rows($res) ==1) {
        $row = mysqli_fetch_assoc($res);
        $user_id =$row['id'];
        $user_name =$row['name'];
        $user_email= $row['email'];
    }else{
echo "Viewer not Found";
    }
}else{
    echo "Invallid Request";
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
                            <h6>#</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo  $user_id?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_name?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Email</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_email?></h6>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <?php include "../leyout/footer.php" ?>

    </div>
</div>