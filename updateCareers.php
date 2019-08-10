<?php
require 'db-connect2.php';
$sql = 'SELECT * FROM tbl_career ORDER BY car_dateAdded';
$statement = $connection->prepare($sql);
$statement->execute();
$career = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require 'navInside.php'; ?>    
<div class="container prodTable">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Available Positions<a href="" class="btn btn-info" data-toggle="modal" data-target="#careerAddModal">Add Job</a></h2>	
      
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Position Name</th>
          <th>Job Type</th>
          <th>Job Description</th>
          <th>Date & Time Added</th>
          <th>Action</th>
        </tr>
        <?php foreach($career as $car): ?>
          <tr>
            <td><?= $car->car_position; ?></td>
            <td><?= $car->car_type; ?></td>
            <td><?= $car->car_description; ?></td>
            <td><?= $car->car_dateAdded; ?></td>
            <td>
			  <a href="editCareers.php?id=<?= $car->car_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $car->car_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="careerAddModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="careerAddLabel">Add Job<button class="close" data-dismiss="modal">&times;</button></h3>
          
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="prodname">Position Name</label>
              <input type="text" class="form-control" id="prodname">
            </div>
            <div class="form-group">
              <label for="type">Job Type</label>
              <select name="type">
                <option value="chocolate">Sales</option>
                <option value="rolledwafers">Information Technology</option>
                <option value="gelatins">Manufacturing</option>
              </select>
            </div>
            <div class="form-group">
              <label for="desc">Job Description</label>
              <textarea class="form-control" id="desc"></textarea>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">Submit</button>
        </div>
      </div>
    </div>
  </div>

<?php require 'footerInside.php'; ?>