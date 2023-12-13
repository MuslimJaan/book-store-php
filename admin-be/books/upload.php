<?php
include "../../book-store/config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $descript = $_POST['description'];
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $filePath = $file['tmp_name'];
    $fileError = $file['error'];

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Error: Invalid file type. Please upload a valid image file.";
        exit();
    }

    // Check if the same image file is not uploaded again
    $checkQuery = "SELECT * FROM books WHERE image = '$fileName'";
    $checkResult = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('Error: The same image file cannot be uploaded again.')</script>";
        exit();
    }

    if ($fileError == 0) {
        $destfile = '../upload/' . date('ymdHis') . $fileName;
        move_uploaded_file($filePath, $destfile);

        $insertQuery = "INSERT INTO books(name, description, image, author_id, category_id, price)
        VALUES ('$name', '$descript', '$destfile', '$author', '$category', '$price')";

        $query = mysqli_query($con, $insertQuery);

        if ($query) {
            echo "<script>alert('Insert Successfully')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}