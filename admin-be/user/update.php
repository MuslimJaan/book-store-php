<?php 
include "../../book-store/config.php";

$sid = $_POST['stid'];
$name = $_POST['fname'];
$email = $_POST['email'];

$qry = "UPDATE user SET `name` ='$name', email='$email' WHERE id = '$sid'";

$res = mysqli_query($con, $qry);

if ($res === true) {
       header("location:index.php");
} else {
    echo "<script>alert('Your Data Has Not Been Updated')</script>";
}
?>
