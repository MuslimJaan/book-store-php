
<?php include "../leyout/header.php" ?>
<?php include "../../book-store/config.php"?>;

<body class="bg-gray-100 flex items-center justify-center h-screen">

  <?php

  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con,$_POST['name']);
    $emeel = mysqli_real_escape_string($con,$_POST['email']);
    $cpss = mysqli_real_escape_string($con,$_POST['password']);
    $pass = password_hash($cpss, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM user WHERE email='$emeel'";
    $query = mysqli_query($con, $sql);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
      echo "Email already exists";
    } else {
      $insertquery = "insert into user(name,email,password)values('$username','$emeel','$pass')";
      $db = mysqli_query($con, $insertquery);
      if ($db) {
        header('location:login.php');
      } else {
        echo "<script>alert('Not inserts')</script>";
      }
    }
  }
  
  ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Register</div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>