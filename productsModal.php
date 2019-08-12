<?php

/**
 * Establish database connection
 */
require 'db-connect2.php';

if (isset($_POST['id'])) {
    $output = '';
    $id = $_POST['id'];

    $sql = "SELECT * FROM tbl_prod WHERE prod_id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$id]);
    $product = $stmt->fetch();

    $productCategories = ['Chocolate', 'Gelatins', 'Rolled Wafers'];

    $categoryOption = '';

    foreach ($productCategories as $category) {
        if ($category == $product->prod_categ) {
            $categoryOption .= '<option value="'.$category.'" selected>'.$category.'</option>';
        } else {
            $categoryOption .= '<option value="'.$category.'">'.$category.'</option>';
        }
    }

    $output .= '
        <div class="modal fade" id="productEditModal">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="editModalLabel">
                        Edit '.$product->prod_name.'
                        <button class="close" data-dismiss="modal" id="buttonClose">
                            &times;
                        </button>
                    </h3>
                </div>
                <form action"producs/update.php" method="POST">
                    <div class="modal-body">
                            <input type="text" class="form-control" id="prodid" name="id" value="'.$product->prod_id.'" required hidden>
                        <div class="form-group">
                            <label for="prodname">Product Name</label>
                            <input type="text" class="form-control" id="prodname" name="name" value="'.$product->prod_name.'" required>
                        </div>
                        <div class="form-group">
                        <label for="categ">Product Category</label>
                        <select name="categ" required>
                        '.$categoryOption.'
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="desc">Product Description</label>
                        <textarea class="form-control" id="desc" rows="4" required>"'.$product->prod_desc.'"</textarea>
                        </div>
                        <div class="form-group">
                        <label for="fileToUpload">Upload image: </label>
                        <input type="file" name="fileimage">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="btn_update_product" class="btn btn-primary btn-block" value="Submit">
                    </div>
                </form>

            </div>
            </div>
        </div>
        ';

        header('Content-type: application/json');
        echo json_encode( $output );
}