<?php include "../../book-store/config.php";
$qry= "SELECT * FROM categories ORDER BY id ";
$res=mysqli_query($con,$qry);
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
                        <div class="col-sm-6">
                            <h2>Category</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="create.php" class="btn btn-danger"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add New </span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (mysqli_num_rows($res)>0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['name']?></td>
                            <td class="col-md-2">
                                <a href="../category/edit.php?id=<?php echo $row['id']?>"><i class="fa fa-pencil text-warning" aria-hidden="true"></i></a>
                                    <a href="../category/delete.php?id=<?php echo$row['id']?>"><i class="fa fa-trash-o"></i></a>
                                    <a href="../category/view.php?id=<?php echo $row['id']?>" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                    }?>
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