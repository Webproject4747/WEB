<!DOCTYPE html>
<html>
<head>
        <title>Certificate Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="Width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">

        <script  src="https://ajax.googleapls.com/ajax/libs/jquery/3.2.1/jquery_latest.js"></script>
        <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
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
    <div class="row">
    	<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2 class="text-white">Certificate Form</h2>
					<hr>
                    <center>
					<form>
						<h4>Certificate type</h4>
						<div class="row">
							<div class="col-md-4">
								<input type="radio" name="feed" class="pointer" >&nbsp;&nbsp;<label>Study certificate</label><br>
							</div>
							<div class="col-md-4">
								<input type="radio" name="feed">&nbsp;&nbsp;<label>Character certificate</label><br>
							</div>
							<div class="col-md-4">
								<input type="radio" name="feed">&nbsp;&nbsp;<label>Transfer certificate</label><br><br>
							</div>
						</div>
						<div class="form-group mt-3 mb-3">
							<label class="form-label">Full Name</label><br><br>
							<input type="text" class="form-control" required="">
						</div>
						<div class="form-group mb-2">
							<label class="form-label">USN</label><br><br>
							<input type="USN" class="form-control" required="">
						</div>
						<div class="form-group mb-2">
							<label class="form-label">Branch</label><br><br>
							<input type="Branch" class="form-control" required="">
						</div>
						<div class="form-group mb-2">
							<label class="form-label">Email</label><br><br>
							<input type="Email" class="form-control" required="">
						</div>
						<button type="Submit" class="btn btn-primary">Submit</button>
					</form>
</center>
				</div>
			</div>
		</div>
	
	</body>
</html>

