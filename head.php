<!DOCTYPE html>
<html lang="en">
    <!-------------------------------------------------START-OF-HEAD------------------------------------------------->
    <head>
    <!-------------------------------------------------META-TAGS------------------------------------------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="Multirich, Multirich Foods Corporation, Binx, Choco Mucho, Havana, Jiggels, Jumpee, Krim Stix, Superstix, Tigerstix, Rebisco, Foods, Snacks, Bulacan, Philippines">
    <meta name="Description" content="A simple website for Multirich Foods Corporation using Vanilla PHP and Bootstrap. A group project for Mindtech TESDA Training.">

    <title>Multirich Foods Corporation</title>
    
    <!-------------------------------------------------FAVICON------------------------------------------------->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <!-------------------------------------------------STYLE-LINKS------------------------------------------------->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/overwrite.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- <style>
        .active{
            color: black !important;
        }
    </style> -->

    <!-------------------------------------------------SCRIPT------------------------------------------------->

    <script>
    function loginvalidation(){
        var name = document.getElementById('name').value;
        var password = document.getElementById('password').value;

        var valid = true;

        if(name == ""){
            valid = false;
            document.getElementById('user_error').innerHTML = "required.";
        }

        if(password == ""){
            valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }

    </script>


    </head>