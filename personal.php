<!DOCTYPE html>
<html>
<head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="Width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">

        <script  src="https://ajax.googleapls.com/ajax/libs/jquery/3.2.1/jquery_latest.js"></script>
        <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
<body class="back">
    <header class="header">
    <nav class= "flex items-center justify-between">
    <div class="left flex items-center">

        <img src="images/vidya-vikas-logo.png"alt="logo"><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="home.php">home</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">about</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="admin_dashboard.php">Admin</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Contact</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Logout</a>
        
</nav>
    </header>
    <hr>
	<div class="container-fluid bg">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-8"></div>
            <div class="col-md-2 col-sm-2 col-xs-8">
            <br><br><br><br><br>
            <center>
            <form action="" method="POST" class="form-container">
                <div class="form-group">
                    <label><h3><strong>Search</strong></h3></label><br>
                    <form action="" method="post">
			USN: <input type="text" name="usn" required><br><br>
			<input type="submit" name="per_search" value="Search">
		</form><br>
 
  <br>
<?php
session_start();
if(isset($_POST['per_search'])){
$connection = mysqli_connect("localhost:3325","root","");
$db = mysqli_select_db($connection,"sms");
  $query = "select * from personal where usn = '$_POST[usn]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run))  
					
					{
                    
						?>
						<center>
						<table>
                        
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Father</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mother:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mother_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Present address:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['present_address']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Permanent address:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['permanent_address']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Phone:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['phone']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Religion:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Religion'] ?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Siblings:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['siblings'] ?>" disabled>
								</td>
							</tr>
							
                        </center>	
						</table>
						<input type="submit" name="back" value="Back" >
						<?php
						
						if(isset($_POST['back'])){
							header("location:home.php");
						}
						?>
						
						<?php
					}
				}
			?>
            </body>
            </html>
