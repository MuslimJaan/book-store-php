
<?php include "../leyout/header.php"; ?>
<?php include "../../book-store/config.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $qry = "SELECT * FROM `user` WHERE email='$email'";
    $res = mysqli_query($con, $qry);
    $emailcount = mysqli_num_rows($res);

    if ($emailcount > 0) {
        $userdata = mysqli_fetch_assoc($res);
        $db_pass = $userdata['password'];
        $verify_pass = password_verify($pass,$db_pass);

        if($verify_pass){
            echo "<script>alert('Login succesfully')</script>";
            header('location: ../dashbord/dashbord.php');
        }else{
            echo "<script>alert('Incorrect password')</script>";

        }
    }else{
        echo "<script>alert('Invalid Email')</script>";

    }
}
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div style="font-size: 30px;" class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="" method="POST"> <!-- Changed method="$_POST" to method="POST" -->
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" id="email"  placeholder="Enter your username" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control"  placeholder="Enter your password" id="pass" name="pass">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>