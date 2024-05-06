<?php
$hostname = 'localhost';
$username = 'root1';
$password = ''; 
$db = 'hms';


$connect = mysqli_connect($hostname, $username,$password,$db);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// $createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS hms";
// if (mysqli_query($connect, $createDatabaseQuery)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($connect);
// }

// mysqli_close($connect);



