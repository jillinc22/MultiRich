<?php

if (isset($_POST['btn_update_product'])) {
    /**
     * Setup db connection
     */dsada
    $conn = mysqli_connect('localhost', 'root', '', 'multirich_db');
    
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }

    /**
     * Insert product
     */
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    if (!empty($name) || !empty($category) || !empty($description)) {
        $sql = "UPDATE tbl_prod SET prod_name = ?, prod_categ = ?, prod_desc = ? WHERE prod_id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../updateProducts.php?error=sqlerror');
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 'ssss', $name, $category, $description, $id);
            mysqli_stmt_execute($stmt);
            header('Location: ../updateProducts.php?success=productUpdated');
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