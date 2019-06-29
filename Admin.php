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

setcookie('department', '', time()-3600);
setcookie('office', '', time()-3600);	
if(isset($_POST['submit']))
	{
		
		setcookie('department',$_POST['department'],0);
		setcookie('office',$_POST['office'] ,0 );
		header('Location: Adminview.php');
		
	}
?>

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
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		  
		 
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
		crossorigin="anonymous">

		<!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
            	<link rel="stylesheet" type="text/css" href="Css/Style1.css">               

</head>
<body>
	

	<nav class="navbar navbar-inverse fixed-top" style="background-color:#D6EAF8;" >
	
    <div class="navbar-header">
		<img src="images/Rail_Logo.png"   alt="Indian Railways" height="60px">
	</div>
	<ul class="nav navbar-tab">
    <li class="nav-item">
	
		<a class="nav-link active" style="font-size:18px; " href="#tab1" data-toggle="tab">Home</a>
    </li>
    <li class="nav-item">
		<a class="nav-link" style="font-size:18px;" href="#tab2" data-toggle="tab">Update Employee</a>
    </li>
		<li class="nav-item">
		<a class="nav-link" style="font-size:18px;" href="#tab3" data-toggle="tab">Set Authority</a>
    </li>
	<li>
      <a class="nav-link btn btn-info" style="font-size:18px;" href="/APAR1" >Logout</a>
	</li>
	</ul>
	
	</nav>
	
	<div class="tab-content">
	
	<div id="tab1" class=" tab-pane active">
	
		<div class="main">
		<div class="slideshow" style="margin-top:28px;background-color:white" >
		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			  <img src="images/Rail2.jpg" style="height:250px; width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="images/Rail3.jpg" style="height:250px; width:100%">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="images/Rail4.jpg" style="height:250px; width:100%; ">
			</div>
			<div  hidden  style="text-align:center; background-color:white">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			</div>
		
	</div>
	</div>
	<div id="tab2" class=" tab-pane fade ">
	
	
	</div>
		<div id="tab3" class=" tab-pane fade " style="background-color:white;"><br>
		<form action="" method="post">
		<div class="row"style="padding-top: 50px" >
			<div class="col-sm-2"></div> 
		<div class="col-sm-7"> 
		<label style="color: black;font-size:17px" for="office">Office:</label>
		<select required onchange="doAdditions()" style="height:30px; width:170px" id="office" name="office">
		<option value="" >Select Office</option>
		<option value="pune">Pune</option>
        <option value="pimpri">Pimpri</option>
   		</select>
		<label style="color: black;font-size:17px" for="office" display="float">            Department: </label>
		<select required onchange="doAdditions()"  style="height:30px; width:170px" id="department" name="department">
		<option value="">Select Department</option>
        <option value="account">Account</option>
        <option value="sales">Sales</option>
		<option value="IT">It</option>
      </select>
	  <button type="submit" style="margin-left: 30px; " class="btn btn-info" name="submit" value="submit">Submit</button>
	  </div>
	  </div>
	  </div>


		<script type="text/javascript"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</div>

	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1700); // Change image every 2 seconds
}
</script>
</body>

</html>
