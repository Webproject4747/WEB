<!DOCTYPE html>
<html>
<head>
        <title>Student Home Page</title>
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
			<h1 class ="section-heading">Home</h1>
				<p>Welcome to Student Portal </p>
				<div class="card-wrapper">
					<div class="card">
						<img src="user_images/student.png" alt="">
						
                        <a href="index.php"><h3>View personal detail</h3></a>
					</div>
					<div class="card">
						<img src="user_mages/acadamic.png" alt="">
						<h3>View acadamic detail</h3>
					</div>
					<div class="card">
						<img src="user_images/feed.jpg" alt="">
						<h3>Feedback</h3>
					</div>
					<div class="card">
						<img src="user_images/notes.jpg" alt="">
						<h3>Resources</h3>
					</div>
                    <div class="card">
						<img src="user_images/attendance.jpg" alt="">
						<h3>Attendance status</h3>
					</div>
                    <div class="card">
						<img src="user_images/certificate.jpg" alt="">
						<h3>Certificate</h3>
					</div>
                    <div class="card">
						<img src="user_images/book.png" alt="">
						<h3>Library</h3>
					</div>
                    <div class="card">
						<img src="user_images/apli.png" alt="">
						<h3>Exam application</h3>
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
