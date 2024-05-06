<?php

//A session is a way to store information (in variables) to be used across multiple pages.
//A function is a block of statements that can be used repeatedly in a program
//Variables are "containers" for storing information.
session_start();
if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	header("location:../index.php");
}


?>