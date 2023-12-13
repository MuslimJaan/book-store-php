<?php
include "../leyout/header.php";
include "../../book-store/config.php";
$rid = $_REQUEST['id'];
$qry = "DELETE FROM categories WHERE id='$rid'";
$res = mysqli_query($con, $qry);
if ($res === true) {
    header("Location:index.php");
} else {
    echo " Your Data is not Deleted";
}
