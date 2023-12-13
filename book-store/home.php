<?php include "../book-store/config.php"; 
session_start();
?>


<?php
include "../book-store/config.php";
?>
<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>
    <hr class="mt-3">
    <div class="container mt-2 ">
        <div class="row">

            <?php
            $sql = "SELECT * FROM books";
            $res = mysqli_query($con, $sql);
            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
            ?>

                    <div class="col-md-3 text-center ">
                        <a href="detail_page.php"> <img src="../admin-be/upload/<?= $row['image'] ?>" alt="Image not found" class="w-100"></a>
                        <span class="spn fw-bold"><?= $row['price'] ?>  </span>
                        <h1 class="h5"><?= $row['name'] ?></h1>
                        <p class="my-2"><?= $row['description'] ?></p>
                        <form action="add_to_cart.php" method="post">
                <div class="d-flex gap-2 m-3 justify-content-center">
                  <h5 class="opacity-75">QTY</h5>
                  <input type="number" name="quantity" min="1" value="1" class="form-control w-25">
                </div>
                <div class="text-center">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <input type="hidden" name="name" value="<?= $row['name'] ?>">
                  <input type="hidden" name="image" value="<?= $row['image'] ?>">
                  <input type="hidden" name="price" value="<?= $row['price'] ?>">
                  <button type="submit" name="addCart" class="btn btn-outline-secondary btn-md">ADD TO CART</button>
                </div>
                </div>

              </form>
            <?php
                }
            }
            ?>
            
        </div>
    </dsiv>
    </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>
</html>