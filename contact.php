<?php

if($_POST) {
	
	$name = $_POST['name'];
	$emailaddress = $_POST['emailaddress'];
	$contactnumber = $_POST['contactnumber'];
	$message = $_POST['message'];
	
	if($name == "") {
		echo " * Name is Required <br />";
	}
	
	 if($emailaddress == "") {
		 echo " * Email Address is Required <br />";
	 }

	if($contactnumber == "") {
		echo " * Contact Number is Required <br />";
	}
	
	if($message == "") {
		echo " * Message is Required <br />";
	}
	
	else {
				if(registerUser() === TRUE) {
					echo "Succesfully Submitted <a href='contact.php'>Contact</a>";
				} 
				else {
					echo "Error";
				}
		}
		
	
			
}
?>
<?php require 'nav.php'; ?>
<!----------------------------------------START-OF-CONTENT---------------------------------------------->
		
		<div id="contact1">
			<div> 
				<form id="login" action="" method="get" target="self">
				<h1>CONTACT US</h1>
					<p>* Intended for inquiries/suggestions only</p>
					<br>
				<label for="">Name</label>
					<br>
					<input type="text" name="name">
					<br>
				<label for="">Email Address</label>
					<br>
					<input type="email">
					<br>
				<label for="">Contact number</label>
					<br>
					<input type="text">
					<br>
					<label for="">Message</label>
					<br>
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<br>
					<button type="submit">Submit</button>
					</form>
			</div>
		</div>

<!-----------------------------------------END-OF-CONTENT------------------------------------------------>
<?php require 'footer.php'; ?>

<?php 
	require 'db_connect.php'; 
	session-start();

function registerUser() {
	
	global $connect;
	
	$name = $_POST['name'];
	$emailaddress = $_POST['emailaddress'];
	$contactnumber = $_POST['contactnumber'];
	$message = $_POST['message'];

		$sql = "INSERT INTO users
		(msg_name, emailaddress, contactnumber, message)
		VALUES ('$name', '$emailaddress', '$contactnumber', '$message)";
		$query = $connect->query($sql);
		if($query === TRUE) {
			return true;
		} else {
			return false;
		}
	
	$connect->close();
	// close the database connection
}
?>