<?php

if (isset($_POST['btn_insert_product'])) {
    /**
     * Setup db connection
     */
    $conn = mysqli_connect('localhost', 'root', '', 'multirich_db');
    
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }

    /**
     * Insert product
     */
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    if (!empty($name) || !empty($category) || !empty($description)) {
        $sql = "INSERT INTO tbl_prod(prod_name, prod_categ, prod_desc, prod_imagePath) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../updateProducts.php?error=sqlerror');
            exit();
        }
        else {
            $sampleImagePath = 'SampleImagePathh';
            mysqli_stmt_bind_param($stmt, 'ssss', $name, $category, $description, $sampleImagePath);
            mysqli_stmt_execute($stmt);
            header('Location: ../updateProducts.php?success=productAdded');
            exit();
        }
    } else {
        header('Location: ./updateProducts.php?error=emptyfields');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header('Location: ../updateProducts.php');
    exit();
}