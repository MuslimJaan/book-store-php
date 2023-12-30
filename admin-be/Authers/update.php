<?php
include "../../book-store/config.php";
$aid = $_POST['cid'];
$name = $_POST['cname'];

$qry = "UPDATE authors SET name='$name' WHERE id='$aid'";
$res = mysqli_query($con, $qry);
if ($res === true) {
    // echo "Your Data is Updated";
    header("location:index.php");
} else {
    echo "your Data is not updated";
}
