<?php
require 'db-connect2.php';
$sql = 'SELECT * FROM tbl_message ORDER BY msg_dateAdded';
$statement = $connection->prepare($sql);
$statement->execute();
$message = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require 'navInside.php'; ?>    
<div class="container prodTable">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Messages Received</h2>	
      
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Message From: </th>
          <th>Sender Email</th>
          <th>Message</th>
          <th>Date & Time Sent</th>
          <th>Action</th>
        </tr>
        <?php foreach($message as $msg): ?>
          <tr>
            <td><?= $msg->msg_name; ?></td>
            <td><?= $msg->msg_email; ?></td>
            <td><?= $msg->msg_text; ?></td>
            <td><?= $msg->msg_dateAdded; ?></td>
            <td>
			      <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $msg->msg_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?php require 'footerInside.php'; ?>

    