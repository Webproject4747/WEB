<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
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
            <form action="" method="post" class="form-container">
                <div class="form-group">
                    <label><h3><strong>Fill Student Details</strong></h3></label><br>
                    <form action="" method="post">
			USN: <input type="text" name="usn" required><br><br>
            Name: <input type="text" name="name" required><br><br>
            Father Name: <input type="text" name="father_name" required><br><br>
            Sem: <input type="text" name="sem" required><br><br>
            Branch: <input type="text" name="branch" required><br><br>
            Mobile: <input type="text" name="mobile" required><br><br>
            Email: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
            
			<input type="submit" name="add" value="Add">
		</form><br>
 
  <br>

  <?php
			session_start();
			if(isset($_POST['add']))
			{
				$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "INSERT into students values('','$_POST[usn]','$_POST[name]','$_POST[father_name]',$_POST[sem],'$_POST[branch]',$_POST[mobile],'$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_home.php";
</script>
            <?php
            }
            ?>

    <div class="col-md-2 col-sm-2 col-xs-8"></div>
    </div>
</center>
</div>

</body>
</html>