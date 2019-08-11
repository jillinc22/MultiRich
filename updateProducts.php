<?php
require 'db-connect2.php';
$sql = 'SELECT * FROM tbl_prod ORDER BY prod_dateAdded';
$statement = $connection->prepare($sql);
$statement->execute();
$product = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require 'navInside.php'; ?>
<div class="container prodTable">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Products<a href="" class="btn btn-info" data-toggle="modal" data-target="#productAddModal">Add Product</a></h2>	

      
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Product Name</th>
          <th>Product Category</th>
          <th>Product Description</th>
          <th>Product Image</th>
          <th>Action</th>
        </tr>
        <?php foreach($product as $prod): ?>
          <tr>
            <td><?= $prod->prod_name; ?></td>
            <td><?= $prod->prod_categ; ?></td>
            <td><?= $prod->prod_desc; ?></td>
            <td><img src="img/prods/<?= $prod->prod_imagePath; ?>"></td>
            <td>
              <a href="#"
                id="buttonEditModal" 
                onclick="prefillEditModal(<?php echo $prod->prod_id; ?>)" 
                class="btn btn-info">
                  Edit
              </a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="deleteProd.php?id=<?= $prod->prod_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="productAddModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="productAddLabel">
            Add Product
            <button class="close" data-dismiss="modal">
              &times;
            </button>
          </h3>
        </div>
        <div class="modal-body">
          <form action="products/insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="prodname">Product Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="categ">Product Category</label>
              <select name="category" required>
                <option value="chocolate">Chocolate</option>
                <option value="rolledwafers">Rolled Wafers</option>
                <option value="gelatins">Gelatins</option>
              </select>
            </div>
            <div class="form-group">
              <label for="desc">Product Description</label>
              <textarea class="form-control" id="desc" name="description" required></textarea>
            </div>
            <div class="form-group">
              <label for="fileToUpload">Select Image pf Product: </label>
              <input type="file" name="image">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit_insert_product" class="btn btn-primary btn-block" value="Submit">
        </div>
      </div>
    </div>
  </div>

  <!-- Update modal -->
  <div id="updateModal">
  </div>

  <script>
      function prefillEditModal(productId){
        console.log(`${productId}`);
        $.ajax({
          url:"productsModal.php",
          method:"post",
          data:{id:productId},
          success:function(data)
          {
            console.log(data);
            $('#updateModal').html(data);
            $('#productEditModal').attr({
              "class": "modal fade in",
              "aria-hidden": false,
              "style": "display: block",
            });

            $('#buttonClose').click(function(){
              $('#productEditModal').attr({
                "class": "modal",
                "aria-hidden": true,
                "style": "display: hidden",
              });
            });
          }
        });

      }

  </script>

  <?php require 'footerInside.php'; ?>