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
        <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost:3325","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
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
    <div id="right_side"><br><br>
		<div id="demo">
            <h2>Academic info</h2>
		<!-- #Code for search student---Start-->
			<?php
				
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
                    
						?>
						<table>
                        <center>
							<tr>
								<td>
									<b>Usn:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Usn']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Father's Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Branch,sem:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Branch']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Phone:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Phone']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Password'] ?>" disabled>
								</td>
							</tr>
                        </center>	
						</table>
						<?php
					
				}
			?>
            </body>
            </html>