<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'db-connect.php';
    
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_account where name = '$name' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    
    $database->closeConnection();
    header('location: dashboard.php');
}
?>

<?php require 'head.php'; ?>
<body style="font-family: Arial; text-align: center; background-image: url('img/wood.jpg');">
<div class="demo-content" style="background-color: white; padding: 3em;">
        <h1>Login Form</h1>
        <form action="" method="POST"
            onsubmit="return loginvalidation();">


            <div class="row">
                <label>Username</label> <span id="user_error"></span>
                <div>
                    <input type="text" name="name" id="name"
                        class="form-control"
                        placeholder="Enter your Username">
                </div>
            </div>

            <div class="row">
                <label>Password</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password">

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>