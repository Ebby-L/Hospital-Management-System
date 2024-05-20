<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMS Home page nnnnnn</title>
</head>
<body style="background-image:url(imgs/hospic.jpg);">




<div class="container">
    <div class="row">
        <div class="col-md-3 mx-1 shadow">
            <img src="./imgs/doctor.jpg" style="width:100%;height:190px;">
            <h5 class="text-center">Click button for more information </h5>
            <a href="#">
                <button class="btn btn-success my-3" style="margin-left: 30%;">More Information</button>
            </a>
        </div>

        <div class="col-md-4 mx-1 shadow">
            <img src="./imgs/patient.jpg" style="width:100%;">
            <h5 class="text-center">Create account so we can take good care of you. </h5>
            <a href="#">
                <button class="btn btn-success my-3" style="margin-left: 30%;">Create account!</button>
            </a>
        </div>

        <div class="col-md-3 mx-1 shadow">
            <img src="./imgs/mr.jfif" style="width:100%;">
            <h5 class="text-center">We are looking for doctors </h5>
            <a href="adminlogin.php"> <!-- Add the link to adminlogin.php here -->
                <button class="btn btn-success my-3" style="margin-left: 30%;">Admin Login</button>
            </a>
        </div>
    </div>
</div>

</body>
</html>
