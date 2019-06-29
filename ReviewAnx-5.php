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
$fname=$_COOKIE['fullname'];
$ayear=$_COOKIE['ayear'];
$grade=$_COOKIE['grade'];
$designation=$_COOKIE['designation'];


if(isset($_POST['submit']))
	{		
			$uid = $_POST['uid'];
			$remarkReview=$_POST['remarkReview'];
			$signReview	=$_POST['signReview'] ;
			$ReviewingName	=$_POST['ReviewingName']; 
			$designationReview=$_POST['designationReview']; 
			

			$sql= "UPDATE   `reporting_anx_v` SET 
					`remarkReview`='$remarkReview',
					`signReview` = '$signReview',
					`ReviewingName` = '$ReviewingName',
					`designationReview` = '$designationReview'  WHERE `uid`='$uid'";	
			
			$stmt = $conn->prepare($sql);

			
			$stmt->bindParam(":remarkReview", $remarkReview, PDO::PARAM_STR);
			$stmt->bindParam(":signReview", $signReview, PDO::PARAM_STR);
			$stmt->bindParam(":ReviewingName", $ReviewingName, PDO::PARAM_STR);
			$stmt->bindParam(":designationReview", $designationReview, PDO::PARAM_STR);
			

			$stmt->execute();
		
		if($stmt->rowCount()) 
	{
		header('Location: view_Review.php');
	} 
	else 
	{
		echo 'Data not updated';
	}

}
if (!empty($_GET['uid'])) {
	
	$uid = $_GET['uid'];
	
	$query =  "select * from user1 u1 INNER JOIN reporting_anx_v r on u1.uid=r.uid WHERE u1.uid = $uid AND ayear=$ayear";
		
		
			
	$stmt = $conn->prepare($query);


	$uid = htmlspecialchars(strip_tags($uid));
	
	$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
	

	$stmt->execute();

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";


	//$viewLists = array();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
		

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
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
</head>
<body>
	
		<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
		<img src="images/Rail_Logo.png" alt="Indian Railways" height="60px"> 
		</nav>
		
		<div class="container" style="padding-top: 80px">
		<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
		<td><label style="float:left;" for="exampleFormControlInput1">CENTRAL RAILWAY</label></td>
		<td><label style="float:right;" for="exampleFormControlInput1">GC-16/ANNEXURE-V</label></td><br><br>
		<h3> CONFIDENTIAL REPORT-YEAR ENDING 31-3- </h3>
		<h2> CONFIDENTIAL REPORT FOR STAFF IN GRADE Rs. 4500-7000(RSRP)</h2>
		<br>
		<form name="GC5" method="post">
		<table class="table table-bordered">
		<thead>
		<input type="hidden" name="uid" id="uid" value="<?php echo $_GET['uid']; ?>">
	
    
		</thead>
		
	<tbody>
	<tr>
		<td colspan="2"><label for="exampleFormControlInput1">Department:
		<?php echo $row['department']; ?></td>

		<td><label for="exampleFormControlInput1">Office:</label>
		<?php echo $row['office']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">1</label></td>
		<td><label for="exampleFormControlInput1">Name of the employee</label></td>
		<td><?php echo $row['fullname']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">2</label></td>
		<td><label for="exampleFormControlInput1">Date of Birth</label></td>
		<td><?php echo $row['dob']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">3</label></td>
		<td><label for="exampleFormControlInput1">Date of original appointment</label></td>
		<td><?php echo $row['doa']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">4</label></td>
		<td><label for="exampleFormControlInput1">Designation & Grade</label></td>
		<td><?php echo $row['designation']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">(a)</label></td>
		<td><label for="exampleFormControlInput1">Substantive </label></td>
		<td><?php //echo $row['designation']; ?></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">(b)</label></td>
		<td><label for="exampleFormControlInput1">Officiating</label></td>
		<td><?php //echo $row['designation']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">5</label></td>
	<td><label for="exampleFormControlInput1">Total length of service in the substantive /officiating grade</label></td>
	<td><?php //echo $row['designation']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">6</label></td>
	<td><label for="exampleFormControlInput1">Amenability to Discipline</label></td>
	<td><?php echo $row['Amenability']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">7</label></td>
	<td><label for="exampleFormControlInput1">General remarks about his work & discharge of his duties with efficiency & sincerity</label></td>
	<td><?php echo $row['generalremark']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">8</label></td>
	<td><label for="exampleFormControlInput1">knowledge of departmental rules/working</label></td>
	<td><?php echo $row['knowledge']; ?></td>
	</tr>
	
	<tr>
	<td ><label for="exampleFormControlInput1">9</label></td>
	<td colspan="2"><label for="exampleFormControlInput1">Safety consciousness:</label></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(i)</label></td>
	<td><label for="exampleFormControlInput1">Knowledge of safe working rules</label></td>
	<td><?php echo $row['knowledgesafety']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(ii)</label></td>
	<td><label for="exampleFormControlInput1">Whether he disregards safety in train operation for short term gains</label></td>
	<td><?php echo $row['safetygains']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">10</label></td>
	<td><label for="exampleFormControlInput1">Punishments, if any,awarded during the reporting year</label></td>
	<td><?php echo $row['punishment']; ?></td>
	</tr>
	
	</tr>
	<td><label for="exampleFormControlInput1">11</label></td>
	<td><label for="exampleFormControlInput1">Awards/commendation Certificates,if any, awarded during the reporting year</label></td>
	<td><?php echo $row['awarded']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">12</label></td>
	<td><label for="exampleFormControlInput1">Integrity</label></td>
	<td><?php echo $row['integrity']; ?><br>
	<?php echo $row['integrity1']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">13</label></td>
	<td><label for="exampleFormControlInput1">Overall classification i,e. "Outstanding", "Very Good","Good","Average","Below Average"</label></td>
	<td><?php echo $row['overall']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">14</label></td>
	<td><label for="exampleFormControlInput1">For Stenos only</label></td>
	<td><?php echo $row['stenos']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(a)</label></td>
	<td><label for="exampleFormControlInput1">accuracy in Stenographic work</label></td>
	<td><?php echo $row['accuracy']; ?></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(b)</label></td>
	<td><label for="exampleFormControlInput1">Power of Drafting</label></td>
	<td><?php echo $row['power']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<td colspan="2"><label for="exampleFormControlInput1">For Categories to whom applicable</label> </td>
	</tr>
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Signature of reporting officer</label></td>
	<td><?php echo $row['signReportOfficer']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Name in Block letters</label></td>
	<td><?php echo $row['ReportingName']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Designation</label></td>
	<td><?php echo $row['designationReport']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Date</label></td>
	<td><?php echo $row['dateReport']; ?></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Remarks if any of the reviewing officer</label></td>
	<td><input  type="text" class="form-control" id="exampleFormControlInput1" name="remarkReview" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Signaure of the reviewing officer</label></td>
	<td><input  type="text" readonly class="form-control" id="exampleFormControlInput1" name="signReview" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Name in Block letters</label></td>
	<td><input type="text" readonly class="form-control" id="exampleFormControlInput1" name="ReviewingName" value="<?php echo $fname; ?>"></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Designation during the period of report</label></td>
	<td><input  type="text" readonly class="form-control" id="exampleFormControlInput1" name="designationReview" value="<?php echo $designation; ?>"></td>
	</tr>
	</tbody>
	</table>
	
	
	<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a>
	<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		

	</form>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
