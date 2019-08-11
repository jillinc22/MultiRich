<?php

/**
 * Establish database connection
 */
require 'db-connect2.php';

if (isset($_POST['submit_insert_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $sql = 'INSERT INTO tbl_prod(prod_id, prod_name, prod_categ, prod_desc, prod_imagePath, prod_dateAdded) VALUES(:id, :name, :category, :description, :dateAdded)';
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        'id' => $id,
        'name' => $name,
        'category' => $category,
        'description' => $description,
        'dateAdded' => now(),
    ]);

    header('Location: ../updateProducts.php?addProduct=success');

    // $product = $stmt->fetch();

}
