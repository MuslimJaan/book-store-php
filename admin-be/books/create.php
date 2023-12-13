<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <!-- sidebar -->
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark text-light">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">book </li>
            </ol>
        </nav>
        <form action="upload.php" method="POST" class="custom-form" enctype="multipart/form-data">
            <div class="row text-light bg-dark border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="index.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Author:</label>
                    <select name="author" class="form-control">
                        <?php
                        include "../../book-store/config.php";
                        $autqry = "SELECT*FROM authors";
                        $query = mysqli_query($con, $autqry);
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="category">Category:</label>
                    <select name="category" class="form-control">
                        <?php
                        $category = "SELECT*FROM categories";
                        $catoqry = mysqli_query($con, $category);
                        while ($roww = mysqli_fetch_assoc($catoqry)) {
                        ?>
                            <option value="<?php echo $roww['id'] ?>"><?php echo $roww['name'] ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
                <div class="form-group">
                <div class="form-group col-md-12">
                    <label for="name">price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                    
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>
</body>

</html>