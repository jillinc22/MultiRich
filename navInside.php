<?php 
session_start();
if(!isset($_SESSION['name'])){
    header('location:home.php');
}
?>
<?php require 'head.php'; ?>
<body>
<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                
                    </button>      
                    <a class="navbar-brand" href="dashboard.php"><img class="logo2" src="img/multiLogo.png">Multirich Foods Corporation</a>     
                    <!--<img src="img/mLogo.gif" />-->
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li><a href="updateProducts.php">Products</a></li>
                        <li><a href="updateContacts.php">Message</a></li>
                        <li><a href="settings.php">Settings</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>