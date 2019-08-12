<?php
require 'db-connect2.php';
if(isset($_GET['name'])){

    $user = $_GET['name'];
    $get_user =  $mysqli->query("SELECT * FROM tbl_account WHERE name = '$user'");
    if ($get_user->num_rows == 1) {            
        $user_data = $get_user->fetch_assoc();        
        }    
}
 ?>

<?php require 'navInside.php'; ?>    
<body style="font-family: Arial;">
    <div class="demo-content2">
        <h1>Change Account Details</h1>
        <form method="POST" action="updateAction.php?user=<?php echo $user_data['name'] ?>">

            <div class="row">
                <label>Username *</label> <span id="user_error"></span>
                <div>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user_data['name'] ?>" placeholder="Enter New Username" required>
                </div>
            </div>

            <div class="row">
                <label>Password *</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password" class="form-control" value="<?php echo $user_data['password'] ?>" placeholder="Enter New Password" required>
                </div>
            </div>
            
            <div class="row">
                <div>
                    <button type="submit" name="submit" class="btn login">Update</button>
                </div>
            </div>

        </form>
    </div>

<?php require 'footerInside.php'; ?>