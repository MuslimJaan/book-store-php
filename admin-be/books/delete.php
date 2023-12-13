<?php
include "../leyout/header.php";
include "../../book-store/config.php";

$aid=$_REQUEST['id'];
$qry= "DELETE FROM books WHERE id='$aid'";
$res=mysqli_query($con,$qry);
if ($res=== true) {
    header("Location:index.php");
}else{
    echo "Your Data is Not Deleted";
}
?>