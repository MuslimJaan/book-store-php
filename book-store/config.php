<?php
$servername="localhost";
$user="root";
$password="";
$db="bookstore";
$con = mysqli_connect($servername,$user,$password,$db);

if ($con) {
    ?>
    <script>
        // alert("Connection Successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert(" No Connection ");
    </script>
    <?php
}

?>
