<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	include("./header.php");
	include(".//connection.php")
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
	$ad=$_SESSION['admin'];
    $query="SELECT * FROM admin WHERE username !='$ad'";
    $res= mysqli_query($connect,$query);
    $output=" <table class='table table-bordered'>
            <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th style='width:10%;'>Action</th>
                   <tr>     	";
            

    if (mysqli_num_rows($res) < 1){

    $output.="<tr><td colspan='3'
    class='text-center'>No New Admin</td></tr>";
    }
    while ($row=mysqli_fetch_array($res)){
    	$id=$row['id'];
    	$username=$row['username'];

    	$output.="
    	   <tr>
                 <td>$id</td>
                 <td>$Username</td>
                    <td>
                      <button id='$id' class='btn btn-danger'>Remove</button>
                      </td>
                         	";
    }
    $output.="
    	</tr>
    </table>
    ";
echo $output;
      ?>

                       

        
                         
								
							</div>
							<div class="col-md-6">
								<h5 class="text-center">Add Admin</h5>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		
			
				
					


			

</body>
</html>