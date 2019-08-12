<?php
require 'db-connect2.php';
?>

<?php require 'nav.php'; ?>
<!----------------------------------------START-OF-CONTENT---------------------------------------------->
		
<!-- CONTACT -->
<section id="message" class="bg-faded py-5">
	<form action="" medthod="POST" enctype="multipart/form-data">
    <div class="container">
	<?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-lg-9">
          <h2>Get In Touch</h2>
          <p class="lead">* Intended for inquiries/suggestions only</p>
          <form>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Name" name="msg_name" id="msg_name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email" name="msg_email" id="msg_email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" placeholder="Message" rows="5" name="msg_text" id="msg_text"></textarea>
              </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="img/multiLogo.png" class="img-fluid hidden-md-down" alt="">
        </div>
      </div>
	</div>
	</form>
  </section>

<!-----------------------------------------END-OF-CONTENT------------------------------------------------>
<?php require 'footer.php'; ?>

<?php
$message = 'Cannot be registered';
if (isset ($_POST['msg_name'])  && isset($_POST['msg_email']) && isset($_POST['msg_text'])) {
  $msg_name = $_POST['msg_name'];
  $msg_email = $_POST['msg_email'];
  $msg_text = $_POST['msg_text'];

  $sql = "INSERT INTO tbl_account (msg_name, msg_email, msg_text) VALUES (?,?,?)";
  $stmt= $connection->prepare($sql);
  $stmt->execute([$msg_name, $msg_email, $msg_text]);
}
?>