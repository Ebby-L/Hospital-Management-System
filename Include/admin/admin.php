<?php
session_start();

// Assuming that the admin username is stored in the session
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
} else {
    $admin = ""; // Set a default value or handle the case when admin is not logged in
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
</head>
<body>
    <?php
    include("../header.php");
    include("../connection.php");

    // Handle the remove admin request
    if (isset($_POST['remove'])) {
        $id = $_POST['id'];
        $delete_query = "DELETE FROM admin WHERE id = '$id'";
        $delete_result = mysqli_query($connect, $delete_query);

        if ($delete_result) {
            echo "<h5 class='text-center alert alert-success'>Admin removed successfully</h5>";
        } else {
            echo "<h5 class='text-center alert alert-danger'>Failed to remove admin: " . mysqli_error($connect) . "</h5>";
        }
    }
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px;">
                    <?php
                    include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-center">ALL Admin</h5>
                                <?php
                                $query = "SELECT * FROM admin WHERE uname != '$admin'";
                                $res = mysqli_query($connect, $query);
                                $output = "<table class='table table-bordered'>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th style='width:10%;'>Action</th>
                                    </tr>";
                                
                                if (mysqli_num_rows($res) < 1) {
                                    $output .= "<tr><td colspan='3' class='text-center'>No New Admin</td></tr>";
                                }
                                while ($row = mysqli_fetch_array($res)) {
                                    $id = $row['id'];
                                    $uname = $row['uname'];

                                    $output .= "<tr><td>$id</td>
                                        <td>$uname</td>
                                        <td>
                                            <form method='post' action=''>
                                                <input type='hidden' name='id' value='$id'>
                                                <button type='submit' name='remove' class='btn btn-danger'>Remove</button>
                                            </form>
                                        </td>
                                    </tr>";
                                }
                                $output .= "</table>";
                                echo $output;
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if (isset($_POST['add'])) {
                                    $uname = $_POST['uname'];
                                    $pass = $_POST['pass'];
                                    $image = $_FILES['img']['name'];

                                    $error = array();

                                    if (empty($uname)) {
                                        $error['u'] = "Enter Admin Username";
                                    } else if (empty($pass)) {
                                        $error['u'] = "Enter Admin Password";
                                    } else if (empty($image)) {
                                        $error['u'] = "Add Admin Picture";
                                    }
                                    if (count($error) == 0) {
                                        // Define the target directory relative to the project root
                                        $target_dir = "../../img/";
                                        if (!is_dir($target_dir)) {
                                            mkdir($target_dir, 0777, true);
                                        }

                                        $q = "INSERT INTO admin(uname, pass, profile)
                                           VALUES('$uname', '$pass', '$image')";

                                        $result = mysqli_query($connect, $q);

                                        if ($result) {
                                            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_dir . $image)) {
                                                $show = "<h5 class='text-center alert alert-success'>Admin added successfully</h5>";
                                            } else {
                                                $show = "<h5 class='text-center alert alert-danger'>Failed to move uploaded file</h5>";
                                            }
                                        } else {
                                            $show = "<h5 class='text-center alert alert-danger'>Failed to add admin: " . mysqli_error($connect) . "</h5>";
                                        }
                                    } else {
                                        $show = "<h5 class='text-center alert alert-danger'>" . $error['u'] . "</h5>";
                                    }
                                } else {
                                    $show = "";
                                }
                                ?>
                                <h5 class="text-center">Add Admin</h5>
                                <form method="post" enctype="multipart/form-data">    
                                    <div>
                                        <?php echo $show; ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="uname" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="pass" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Add Admin Picture</label>
                                        <input type="file" name="img" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="add" value="Add New Admin" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
