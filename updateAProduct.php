<?php
require 'db-connect2.php';

// $id = $_POST['id'];

$sql = "SELECT * FROM tbl_prod WHERE prod_id = ?";
$stmt = $connection->prepare($sql);
$id = 1;
$stmt->execute([$id]);
$product = $stmt->fetch();


?>

<?php require 'navInside.php'; ?>
<br><br><br><br><br>
<form action"processUpdateProduct.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                            <input type="text" class="form-control" id="prodid" name="id" style="display: none;" value="'.$product->prod_id.'" required>
                        <div class="form-group">
                            <label for="prodname">Product Name</label>
                            <input type="text" class="form-control" id="prodname" name="name" value="'.$product->prod_name.'" required>
                        </div>
                        <div class="form-group">
                            <label for="categ">Product Category</label>
                            <select name="category" required>
                            '.$categoryOption.'
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desc">Product Description</label>
                            <textarea class="form-control" name="description" id="desc" rows="4" required>'.$product->prod_desc.'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="fileToUpload">Upload image: </label>
                            <input type="file" name="fileimage">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btn_update_product" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
<?php require 'footerInside.php'; ?>