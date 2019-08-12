<?php

require 'db-connect2.php';

$sqlAll = 'SELECT * FROM tbl_prod ORDER BY prod_dateAdded';
$s = $connection->prepare($sqlAll);
$s->execute();
$allproduct = $s->fetchAll(PDO::FETCH_OBJ);

$sqlChoco = "SELECT * FROM tbl_prod WHERE prod_categ = 'Chocolate'";
$s1 = $connection->prepare($sqlChoco);
$s1->execute();
$chocoproducts = $s1->fetchAll(PDO::FETCH_OBJ);

$sqlWafer = "SELECT * FROM tbl_prod WHERE prod_categ = 'Rolled Wafers'";
$s2 = $connection->prepare($sqlWafer);
$s2->execute();
$waferproducts = $s2->fetchAll(PDO::FETCH_OBJ);

$sqlGel = "SELECT * FROM tbl_prod WHERE prod_categ = 'Gelatins'";
$s3 = $connection->prepare($sqlGel);
$s3->execute();
$gelproducts = $s3->fetchAll(PDO::FETCH_OBJ);

 ?>

<?php require 'nav.php'; ?>
<!----------------------------------------START-OF-CONTENT---------------------------------------------->
<div class="feature">
    <div class="container">
      <div class="row">
        <div class="">
          <h1>CATEGORY</h1>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <button id="alls"><img src="img/allbtn.png" alt="ALL PRODUCTS"></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <button id="chocos"><img src="img/chocobtn.png" alt="Chocolates Category"></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
            <button id="wafers"><img src="img/rollbtn.png" alt="Rolled Wafers Category"></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
            <button id="gels"><img src="img/gelbtn.png" alt="Gelatins Category"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <hr>
  <div class="text-center">
          
  </div>

  <div class="container allProd">
    <h1>All Products</h1>
    <div class="card mt-5">
      <div class="card-body">
          <?php foreach($allproduct as $prod): ?>
              <div class="col-md-3">
                <div class="text-center">
                  <div class="hi-icon-wrap hi-icon-effect listProd">
                    <a href="viewProd.php?id=<?= $prod->prod_id ?>"><img src="img/prods/<?= $prod->prod_imagePath ?>">
                    <h3><?= $prod->prod_name; ?></h3></a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="container prodView chocoProd">
    <h1>Chocolate Products</h1>
    <div class="card mt-5">
      <div class="card-body">
          <?php foreach($chocoproducts as $prod): ?>
              <div class="col-md-3">
                <div class="text-center">
                  <div class="hi-icon-wrap hi-icon-effect listProd">
                    <a href="viewProd.php?id=<?= $prod->prod_id ?>"><img src="img/prods/<?= $prod->prod_imagePath ?>">
                    <h3><?= $prod->prod_name; ?></h3></a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="container prodView waferProd">
    <h1>Rolled Wafer Products</h1>
    <div class="card mt-5">
      <div class="card-body">
          <?php foreach($waferproducts as $prod): ?>
              <div class="col-md-3">
                <div class="text-center">
                  <div class="hi-icon-wrap hi-icon-effect listProd">
                    <a href="viewProd.php?id=<?= $prod->prod_id ?>"><img src="img/prods/<?= $prod->prod_imagePath ?>">
                    <h3><?= $prod->prod_name; ?></h3></a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="container prodView gelProd">
    <h1>Gelatin Products</h1>
    <div class="card mt-5">
      <div class="card-body">
          <?php foreach($gelproducts as $prod): ?>
              <div class="col-md-3">
                <div class="text-center">
                  <div class="hi-icon-wrap hi-icon-effect listProd">
                    <a href="viewProd.php?id=<?= $prod->prod_id ?>"><img src="img/prods/<?= $prod->prod_imagePath ?>">
                    <h3><?= $prod->prod_name; ?></h3></a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>
<script>

    document.querySelector("#alls").addEventListener("click", function(){
      document.querySelector(".allProd").style.display = "block";
      document.querySelector(".waferProd").style.display = "none";
      document.querySelector(".gelProd").style.display = "none";
      document.querySelector(".chocoProd").style.display = "none";
      });
    document.querySelector("#chocos").addEventListener("click", function(){
      document.querySelector(".allProd").style.display = "none";
      document.querySelector(".waferProd").style.display = "none";
      document.querySelector(".gelProd").style.display = "none";
      document.querySelector(".chocoProd").style.display = "block";
      });

    document.querySelector("#wafers").addEventListener("click", function(){
      document.querySelector(".allProd").style.display = "none";
      document.querySelector(".chocoProd").style.display = "none";
      document.querySelector(".gelProd").style.display = "none";
      document.querySelector(".waferProd").style.display = "block";
      });

    document.querySelector("#gels").addEventListener("click", function(){
      document.querySelector(".allProd").style.display = "none";
      document.querySelector(".waferProd").style.display = "none";
      document.querySelector(".chocoProd").style.display = "none";
      document.querySelector(".gelProd").style.display = "block";
      });

</script>


<!-----------------------------------------END-OF-CONTENT------------------------------------------------>
<?php require 'footer.php'; ?>