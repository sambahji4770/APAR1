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
if (isset($_POST['submit'])) 
{
	$reporting = $_REQUEST["reporting"];
	$reporting=implode(",",$reporting);
	
	$reviewing = $_REQUEST["reviewing"];
	$reviewing=implode(",",$reviewing);
	
	$accepting = $_REQUEST["accepting"];
	$accepting=implode(",",$accepting);
	
	$reporting = explode("-", $reporting);
	$reviewing = explode("-", $reviewing);
	$accepting = explode("-", $accepting);
	/* echo $reporting[0];*/
	echo $reviewing[0];
	echo $reviewing[1];
	/*echo $accepting[0]; */
	
	
	
	/* $query1= "UPDATE user1 SET reporting='$reporting[1]' WHERE uid IN ($reporting[0]);
	UPDATE user1 SET reviewing='$reviewing[1]' WHERE uid IN ($reviewing[0]);
	UPDATE user1 SET accepting='$accepting[1]' WHERE uid IN ($accepting[0]);";
	$stmt = $conn->prepare($query1);
	$stmt->execute();
	if($stmt) 
	{
		header('Location: Admin.php');
	}  */
	
}   	   
$department=$_COOKIE['department'];
$office=$_COOKIE['office'];

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
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
		<img src="images/Rail_Logo.png" alt="Indian Railways" height="60px"> 
		</nav>
    <div class="container ">
	 
	<a type="button" style="float:left;" href="Subadmin.php" class="btn btn-info">Back</a>
	<a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br>
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
	   <th scope="col">Reporting</th>
	  <th scope="col">Reviewing</th>
	  <th scope="col">Accepting</th>
      
      
    </tr>
  </thead>
  <tbody>
  
  <?php	foreach ($viewLists as $viewList) { ?>
		<tr>
		  <td><?php  echo $viewList['uid'] ?></td>
		  <td><?php echo $viewList['fullname'] ?></td>
		  <td><?php echo $viewList['grade'] ?></td>
		  <td><?php echo $viewList['dob'] ?></td>
		  <td><?php echo $viewList['designation'] ?></td>
		  <td><?php echo $viewList['role'] ?></td>
		 
		 <td><?php  
			$sql = "SELECT uid ,fullname FROM user1 WHERE role='3' AND department='$department'AND office='$office'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "<select name='reporting[]'>";
							echo "<option value=''>"."select" . "</option>";
			while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='" .$viewList['uid']."-". $row['uid'] . "'>" . $row['fullname'] . "</option>";
			}
			echo "</select>";
			?></td>
			
			<td><?php
			$sql = "SELECT uid ,fullname FROM user1 WHERE role='4'AND department='$department'AND office='$office'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "<select name='reviewing[]'>";
				echo "<option value=''>"."select" . "</option>";
			while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='".$viewList['uid']."-" . $row['uid'] . "'>" . $row['fullname'] . "</option>";
			}
			echo "</select>";
			?></td>
			
			<td><?php
			$sql = "SELECT uid ,fullname FROM user1 WHERE role='5'AND department='$department'AND office='$office'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "<select name='accepting[]'>";
							echo "<option value=''>"."select" . "</option>";
			while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='".$viewList['uid']."-" . $row['uid'] . "'>" . $row['fullname'] . "</option>";
			}
			echo "</select>";
			?></td>
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