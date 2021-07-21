<html>
<head>
        <title>Academics</title>
        <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/global.css" type="text/css" rel="stylesheet">
</head>
<body class="back">
<header class="header">
    <nav class= "flex items-center justify-between">
    <div class="left flex items-center">
	<?php
		session_start();
		$connection = mysqli_connect("localhost:3325","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
        <img src="images/vidya-vikas-logo.png"alt="logo">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"></a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
        <a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</a>
		<center>Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">about</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="index.php">Student</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Contact</a>
        &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#">Logout</a>
        
</nav>
    </header>   
    <hr>
    
    <center><h3> IA marks </h3></center>
<section class= "services">
	 <head>
     
		  <title>Table with database</title>
		   <style> table {
			    border-collapse: collapse;
				 width: 100%;
				  color: #588c7e;
				   font-family: monospace;
				    font-size: 25px;
					 text-align: left;
					  }
					   th { 
						   background-color: lightblue;
						    color: white;
							 }
							  tr:nth-child(even) {
								  background-color: whitesmoke}
								   </style>
								    </head>
									 <body> 
										 <table>
											  <tr>
												   <th>Subject_Code</th><th></th>
												    <th>Subject_Name</th>
													 <th>Max_Marks</th>
													 <th>IA1</th>
													 <th>IA2</th>
													 <th>IA3</th>
													 <th>Average</th>
													 </tr>
													  <?php
													   $conn = mysqli_connect("localhost:3325", "root", "", "sms");
													     if ($conn->connect_error) { 
															 die("Connection failed: " . $conn->connect_error); }
															  $sql = "SELECT sub_code,sub_name,max_marks,ia1,ia2,ia3,avg FROM ia";
															   $result = $conn->query($sql);
															    if ($result->num_rows > 0)
																 {
																	   while($row = $result->fetch_assoc()) { 
																		   echo "<tr><td>" . $row["sub_code"]. "</td><td></td><td>" . $row["sub_name"] . "</td><td>" . $row["max_marks"]. "</td><td>" .$row["ia1"]."</td><td>" .$row["ia2"]."</td><td>" .$row["ia3"]."</td><td>" .$row["avg"]."</td></tr>"; } echo "</table>"; } 
																		   else { echo "0 results"; } $conn->close(); ?> </table> 
	
	
	</section>
</body>
</html>