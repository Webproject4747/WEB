<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta charset="utf-8">
        <meta name="viewport" content="Width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">

        <script  src="https://ajax.googleapls.com/ajax/libs/jquery/3.2.1/jquery_latest.js"></script>
        <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
<body>
    <header class="header">
    <nav class= "flex items-center justify-between">
    <div class="left flex items-center">
	<body background="user_images/b.jpg"
	style="background-repeat:no-repeat;background-size:100%300%">
        <img src="user_images/vidya-vikas-logo.png"alt="logo"><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="home.php">home</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">about</a>
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
                    <label><h3><strong>Edit Student</strong></h3></label><br>
                    <form action="" method="post">
			USN: <input type="text" name="usn" required><br><br>
			<input type="submit" name="search" value="Edit">
</form>
			<?php
			if(isset($_POST['search']))
			{

				$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where usn = '$_POST[usn]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					
						<table>
						<tr>
							<td>
								<b>USN:</b>
							</td> 
							<td>
								<input type="text" name="usn" value="<?php echo $row['usn']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Sem:</b>
							</td> 
							<td>
								<input type="text" name="sem" value="<?php echo $row['sem']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Branch:</b>
							</td> 
							<td>
								<input type="text" name="branch" value="<?php echo $row['branch']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td>
								<input method="post" type="submit" name="edit" value="Save">
                               
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
			
		?>
		 <?php
session_start();
if(isset($_POST['edit']))
			{
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "UPDATE students set name='$_POST[name]',father_name='$_POST[father_name]',sem=$_POST[sem],branch='$_POST[branch]',mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]' where usn = '$_POST[usn]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_home.php";
</script>
<?php
            }
            ?>
        
    </div>
    
    <div class="col-md-2 col-sm-2 col-xs-8"></div>
    </div>
</center>
</div>

</body>
</html>