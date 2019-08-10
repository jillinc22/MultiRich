<?php
require 'db-connect2.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tbl_message WHERE msg_id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: updateContacts.php");
}