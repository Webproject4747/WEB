<!DOCTYPE html>
<html>
<head>
        <title>Resources</title>
        <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">
</head>
<body class="back">
<header class="header">
    <nav class= "flex items-center justify-between">
    <div class="left flex items-center">
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
        <img src="user_images/vidya-vikas-logo.png"alt="logo">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"></a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
		<center>Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">about</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="admin_dashboard.php">Admin</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Contact</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Logout</a>
        
</nav>
    </header>   
    <hr>
<section class= "services">
<div class="container"> 
			<h1 class ="section-heading">Resources</h1>
				<div class="card-wrapper">
					<div class="card">
						<img src="user_images/notes.png" alt="">
						<a href="notes.php"><h3>Notes</h3></a>
					</div>

					<div class="card">
						<img src="user_images/qp.png" alt="">
						<a href="qp.php"><h3>Question papers</h3></a>
					</div>
				
					<div class="card">
						<img src="user_images/magz.png" alt="">
						<a href="magazine.php"><h3>Magazines</h3></a>
					</div>
					<div class="card">
						<img src="user_images/qb.png" alt="">
						<a href="qb.php"><h3>Question bank</h3></a>
					</div>
                    
				</div>
		</div>
		<br>
		<br>
		<br>
		<br>
	</section>
</body>
</html>
