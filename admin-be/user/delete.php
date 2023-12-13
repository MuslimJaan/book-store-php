<?php
 include "../leyout/header.php"; 
 include "../../book-store/config.php";
 $rid =$_REQUEST['id'];
$qry= "DELETE FROM user WHERE id ='$rid'";
$res=mysqli_query($con,$qry);
var_dump($res);
if($res=== true)
{
    header("location:index.php");
}else{
    echo"<script>alert('Your Data Has been Not Deleted:')</script>";  
}
?>
