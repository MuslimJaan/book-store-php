<?php include "../leyout/header.php"; ?>
<?php include "../../book-store/config.php";

$aid = $_REQUEST['id'];
$qry = "SELECT *FROM authors WHERE id='$aid'";
$res= mysqli_query($con,$qry);
if (!$res) {
    die("Error: " . mysqli_error($con));
}
$row=mysqli_fetch_assoc($res);

?>

<div class="container">
    <form action="update.php" method="post">
        <div class="mb-3 mt-3">
            <label>Auther ID:</label>
            <input type="text" class="form-control" value="<?php echo $row['id']; ?>" placeholder="Enter Auther ID" name="cid" readonly>
        </div>
        <div class="mb-3 mt-3">
            <label>Auther Name:</label>
            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Auther Name" name="cname">
        </div>
        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
</body>

</html>