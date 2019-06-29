<?php

$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apar";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if($conn)
		{
			echo"conn ok";
		}
		else
		{
			echo " no";
		}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$department=$_COOKIE['department'];
$office=$_COOKIE['office'];
echo $office;
echo $department;

if(isset($_POST['submit']))
	{	
		$assign=$_POST['assign'];	
		if($assign=='role'){
		setcookie('department',$_COOKIE['department'],0);
		setcookie('office',$_COOKIE['office'] ,0 );
		header('Location: Assignrole.php');	
		}
		if($assign=='officer'){
		setcookie('department',$_COOKIE['department'],0);
		setcookie('office',$_COOKIE['office'] ,0 );
		header('Location: Assignofficer.php');	
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Login - RailKarmik </title>
		<meta name="description" content="">
		<meta name="author" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
		crossorigin="anonymous">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
		crossorigin="anonymous">

		<!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 
 
		<title>Login </title>
		
		<link rel="stylesheet" type="text/css" href="Css/Style1.css">
</head>
<body>

	
		<nav class="navbar navbar-inverse fixed-top" style="background-color:#EBF5FB;" >
	
    <div class="navbar-header">
		<img src="images/Rail_Logo.png"   alt="Indian Railways" height="60px">
	</div>
	<ul class="nav navbar-tab">
    
	<li>
      <a class="nav-link btn btn-info" style="font-size:18px;" href="/APAR1" >Logout</a>
	</li>
	</ul>
	
	</nav>
		
		
		<form action="" method="post" >
		
		
		<ul id="sidemanu" class="sidebar" style="padding-top: 50px;background-color:#EBF5FB;">
			<li class="nav-item">
			<a class="nav-link active" href="#Home">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#services">Assignrole</a>
			</li>
			 <li class="nav-item">
			<a class="nav-link" href="#clients">Assignofficer</a>
			</li>
			 <li class="nav-item">
			<a class="nav-link" href="#contact">Contact</a>
			</li>
			</ul>
	<div class="tab-content">
	
	<div id="tab1" class=" tab-pane active">
		<div id="Home">
		</div>
		</div>
		<div class="main"style="padding-top: 50px">
		<div class="container" style="padding-top: 50px">
		
		<div class="row"style="padding-top: 50px" >
			<div class="col-sm-2"></div>
		<div class="col-sm-9">
		
	  
	  <label style="color: black;font-size:17px" for="office" >Assign:</label>
		<select  style="height:30px; width:150px" id="assign" name="assign">
		<option >Select Office</option>
		<option value="role">Role</option>
        <option value="officer">Officer</option>
		</select>
	  <button type="submit" style="margin-left: 100px; " class="btn btn-info" name="submit" value="submit">Submit</button>
	  </div>
	  </div>
	  </div>

</div>
</div>
		<script type="text/javascript"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

		