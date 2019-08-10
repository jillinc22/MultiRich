<?php
require 'db-connect2.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tbl_prod WHERE prod_id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: updateProducts.php");
}