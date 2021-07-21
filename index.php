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
</head>
<body>
    <header class="header">
    <nav class= "flex items-center justify-between">
    <div class="left flex items-center">
    <body background="user_images/b.jpg"
	style="background-repeat:no-repeat;background-size:100%300%">
        <img src="user_images/vidya-vikas-logo.png"alt="logo"><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a><a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="home.php">home</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">about</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="admin_login.php">Admin</a>
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
            <form action="" method="post" class="form-container">
                <div class="form-group">
                    <label><h3><strong>Student login</strong></h3></label><br>
                    <form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
 
  <br>

  <?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location:home.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>     
    </div>
    
    <div class="col-md-2 col-sm-2 col-xs-8"></div>
    </div>
</center>
</div>

</body>
</html>
