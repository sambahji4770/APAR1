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
if (isset($_POST['submit'])) 
{
	$uid = $_REQUEST["role"];
	$uid=implode(",",$uid);
	
	$query1= "UPDATE user1 SET role='6'  WHERE uid IN ($uid)";
	$stmt = $conn->prepare($query1);
	$stmt->execute();
	if($stmt) 
	{
		header('Location: Admin.php');
	} 

}   	   
$department=$_COOKIE['department'];
$office=$_COOKIE['office'];
echo $office;
echo $department;

       $sql = "SELECT uid,fullname,grade,dob,designation,role FROM `user1` WHERE department='$department'AND office='$office'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

        
        $viewLists = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)){
	$viewLists[] = $row;
} 

        
  
?>
<html lang="en">
<head>
   <meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> APAR </title>
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
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
</head>

<body>
<nav class="navbar navbar-inverse fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="images/Rail_Logo.png" alt="Indian Railways" height="60px">
    </div>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="/APAR1"  style="float:right;" class="btn btn-info">Logout</a></li>
    </ul>
  </div>
</nav>
    <div class="container ">
	 
	<a type="button" style="float:left;" href="Admin.php" class="btn btn-info">Back</a><br>
	
    <div style="margin-bottom: 50px;">
    <!--<h4 style="float:left;">APARL1GP1900</h4>-->
    <!--<a type="button" style="float:right;" href="APARL1GP1900.php" class="btn btn-info">Add New</a>-->
    </div>
	<form name="apar1800" method="post">
<table class="table table-striped responsive">
  <thead>
    <tr>
      <th scope="col">PF No.</th>
     
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      <th scope="col">Date of Birth</th>
	  <th scope="col">Designation</th>
	  <th scope="col">Role</th>
	  <th scope="col">Assign role</th>
      
    </tr>
  </thead>
  <tbody>
  
  <?php	foreach ($viewLists as $viewList) { ?>
		<tr>
		  <td><?php echo $viewList['uid'] ?></td>
		  <td><?php echo $viewList['fullname'] ?></td>
		  <td><?php echo $viewList['grade'] ?></td>
		  <td><?php echo $viewList['dob'] ?></td>
		  <td><?php echo $viewList['designation'] ?></td>
		   <td><?php echo $viewList['role'] ?></td>
		    <?php  if (strtolower($viewList['role']) != '6') { ?>
		  <td ><input  type="checkbox" name="role[]" value="<?php echo $viewList['uid'] ?>"></td><?php } ?>
		</tr>
			
	<?php } ?>
	
  </tbody>
</table>

<button type="submit"  style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>





</div>
<?php include 'footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>