<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        .box {
            height: 130px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            border: 1px solid #ccc; /* Add border for better visualization */
            padding-left: 20px;
        }

        .icon {
            position: absolute;
            top: 5px;
            right: 5px;
        }

        .info {
            position: absolute;
            top: 0;
            left: 0;
            text-align: left;
            color: white;
        }

        .info h5 {
            margin: 0;
            font-size: 20px; /* Increase font size */
        }
    </style>
</head>
<body>
<?php
include(".//header.php");
include(".//connection.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="margin-left: -30px;">
            <?php
            include("sidenav.php");
            ?>
        </div>
        <div class="col-md-10">
            <h4 class="my-2">Admin Dashboard</h4>
            <div class="col-md-12 my-1">
                <div class="row">
                    <div class="col-md-4">
                        <a href="admin.php">
                        
                        <div class="bg-success mx-0 box"> 
                            <?php
                            $ad= mysqli_query($connect,"SELECT * FROM admin");
                            $num= mysqli_num_rows($ad);
                            ?>
                            
                           <i class="fa fa-users-cog fa-3x text-white icon" aria-hidden="true"></i>
                           </a>
                            <div class="info">
                                <h5 style="font-size: 24px;"><?php echo $num;?></h5>
                                <h5>Total</h5>
                                <h5>Admin</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-info mx-0 box">
                            <i class="fa fa-user-md fa-3x text-white icon"></i>
                            <div class="info">
                                <h5 style="font-size: 24px;">0</h5>
                                <h5>Total</h5>
                                <h5>Doctor</h5>
                            <!-- Content for the second box -->
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-warning mx-0 box">
                            <i class="fa fa-hospital-user fa-3x text-white icon"></i>
                            <div class="info">
                                <h5 style="font-size: 24px;">0</h5>
                                <h5>Total</h5>
                                <h5>Patient</h5>
                            <!-- Content for the second box -->
                        </div>

                            <!-- Content for the third box -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-warning mx-0 my-2 box">
                            <i class="fa fa-pen fa-3x text-white icon"></i>
                            <div class="info">
                                <h5 style="font-size: 24px;">0</h5>
                                <h5>Total</h5>
                                <h5>Report</h5>
                            <!-- Content for the second box -->
                        </div>
                            <!-- Content for the fourth box -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-danger mx-0 my-2 box">
                            <i class="fa fa-book-open fa-3x text-white icon"></i>
                            <div class="info">
                                <h5 style="font-size: 24px;">0</h5>
                                <h5>Total</h5>
                                <h5>Job Request</h5>
                            <!-- Content for the second box -->
                        </div>
                            <!-- Content for the fifth box -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-success mx-0
                        my-2 box">
                        <i class="fa fa-wallet fa-3x text-white icon"></i>
                        <div class="info">
                                <h5 style="font-size: 24px;">0</h5>
                                <h5>Total</h5>
                                <h5>Income</h5>
                            <!-- Content for the second box -->
                        </div>
                            <!-- Content for the sixth box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
