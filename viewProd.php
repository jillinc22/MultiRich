<?php 
require 'db-connect2.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM tbl_prod WHERE prod_id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$specificProd = $statement->fetch(PDO::FETCH_OBJ);


?>
<?php require 'nav.php'; ?> 
<div class="viewProd" style="background-image: url(img/wood.jpg);">
    <div class="container">
            <a href="products.php"><button class="btn">Back</button></a>    
            <br>
            
                <div class="col-md-6 details">
                <h2><?= $specificProd->prod_name; ?></h2>
                <p>Product Name: <?= $specificProd->prod_name; ?></p>
                <p>Product Category: <?= $specificProd->prod_categ; ?></p>
                <p>Product Description: <?= $specificProd->prod_desc; ?></p>
                </div>

                <div class="col-md-6 IMG">
                <img src="img/prods/<?=$specificProd->prod_imagePath; ?>" alt="product image">
                </div>
    </div>
</div>

<!-----------------------------------------END-OF-CONTENT------------------------------------------------>
<?php require 'footer.php'; ?>
