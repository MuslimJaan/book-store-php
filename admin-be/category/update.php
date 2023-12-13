<?php
include "../../book-store/config.php";
$id = $_POST['cid'];
$name = $_POST['cname'];

$qry = "UPDATE categories SET `name`='$name' WHERE id='$id'";
$res = mysqli_query($con, $qry);

if ($res === true) {
    header("Location:index.php");
} else {
    echo 'Your Data is not Updated';
}
?>

