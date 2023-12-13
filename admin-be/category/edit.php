<?php include "../leyout/header.php"; ?>
<?php include "../../book-store/config.php";

$cid= $_REQUEST['id'];
$qry= "SELECT * FROM categories WHERE id='$cid'";
$res = mysqli_query($con,$qry);
if (!$res) {
    die("Error: " . mysqli_error($con));
}
$row = mysqli_fetch_array($res);
?>
<div class="container">
    <form action="update.php" method="post">
        <div class="mb-3 mt-3">
            <label>Category ID:</label>
            <input type="text" class="form-control" value="<?php echo $row['id']; ?>" placeholder="Enter Categire ID" name="cid" readonly>
        </div>
        <div class="mb-3 mt-3">
            <label>Category Name:</label>
            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Categire Name" name="cname">
        </div>
        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
</body>

</html>