<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

	  <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


         <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
	<<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-image:url(imgs/hospic.jpg);">
	<nav class="navbar navbar-expand-bg navbar-info bg-info">
		<h5 class="text-white">Hospital Management System</h5>
		<div class="mr-auto"></div>
		<ul class="navbar-nav">
			<?php

            if (isset($_SESSION['admin']))
            {
               $user=$_SESSION['admin'];
                echo
                '
			<li class="nav-item"><a href="#"class="nav-link text-white">'.$user.'</a></li>
			
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>

                ';   
                } 
             else
             {

        

            echo
            '
			<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>

			<li class="nav-item"><a href="#"class="nav-link text-white">Doctor</a></li>
			
            <li class="nav-item"><a href="#" class="nav-link text-white">Patient </a></li>';
             }
                     
            ?>
          </ul>
       </nav> 


</body>
</html>