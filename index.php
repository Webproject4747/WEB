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
            <form class="form-container">
                <div class="form-group">
                    <label><h3><strong>Student login</strong></h3></label><br>
                    <label for="inputEmail3" > &nbsp; &nbsp; &nbsp; Email : </label><input type="email" class="form-control" id="inputEmail3" placeholder="Enter email id">
                 </div><br>
  
                <div class="form-group">
                    <label for="inputPassword3">Password : </label> <input type="password" class="form-control" id="inputPassword3" placeholder="Enter password">
                </div>
 
  <br>
  

                <button type="submit" class="btn btn-success" >Login</button>
            </form>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-8"></div>

    </div>
</center>
</div>

</body>
</html>
