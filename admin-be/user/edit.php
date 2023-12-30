<?php include "../leyout/header.php"; ?>
<?php include "../../book-store/config.php";
$rid = $_REQUEST['id'];
$qry =  "SELECT * FROM users WHERE id ='$rid'";
$res = mysqli_query($con, $qry);
if (!$res) {
    die("Error: " . mysqli_error($con));
}
$row =mysqli_fetch_array($res);
?>
<div class="container">
    <form action="update.php" method="post">
        <div class="mb-3 mt-3">
            <label>User ID:</label>
            <input type="text" class="form-control" value="<?php echo $row['id']; ?>" placeholder="Enter Student ID" name="stid" readonly>
        </div>
        <div class="mb-3 mt-3">
            <label>User Name:</label>
            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Student Name" name="fname">
        </div>
        <div class="mb-3 mt-3">
            <label>User Email:</label>
            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter Student Email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
</body>

</html>