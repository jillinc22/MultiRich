<?php

/**
 * Establish database connection
 */
require 'db-connect2.php';

if (isset($_POST['submit_update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $sql = 'INSERT INTO tbl_prod(prod_id, prod_name, prod_categ, prod_desc, prod_imagePath, prod_dateAdded)';
    INSERT INTO `tbl_prod`(`prod_id`, `prod_name`, `prod_categ`, `prod_desc`, `prod_imagePath`, `prod_dateAdded`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

}