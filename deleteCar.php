<?php
require 'db-connect2.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tbl_career WHERE car_id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: updateCareers.php");
}