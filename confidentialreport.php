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
			//echo"conn ok";
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
$designation=$_COOKIE['designation'];

if(isset($_POST['submit']))
	{		
			$uid = $_POST['uid'];
			$ayear=$_POST['ayear'];
			$Amenability=$_POST['Amenability'];
			$generalremark=$_POST['generalremark'];
			$knowledge=$_POST['knowledge']; 
			$knowledgesafety=$_POST['knowledgesafety'];
			$safetygains=$_POST['safetygains'];
			$punishment=$_POST['punishment'];
			$awarded=$_POST['awarded'];
			$integrity=$_POST['integrity']; 
			$integrity1 =$_POST['integrity1'];
			$overall=$_POST['overall'];
			$stenos=$_POST['stenos'];
			$accuracy=$_POST['accuracy']; 
			$power=$_POST['power'];
			$signReportOfficer=$_POST['signReportOfficer']; 
			$ReportingName=$_POST['ReportingName'];
			$designationReport=$_POST['designationReport']; 
			$dateReport=$_POST['dateReport'];
			

			$sql="INSERT INTO`reporting_anx_v`(`ayear`,`Amenability`,`generalremark`,`knowledge`,
			`knowledgesafety`,`safetygains`,`punishment`,`awarded`,`integrity`,`integrity1`,`overall`, `stenos`, `accuracy`, `power`, `signReportOfficer`, `ReportingName`, `designationReport`, `dateReport`, `uid`)VALUES('$ayear','$Amenability','$generalremark','$knowledge','$knowledgesafety','$safetygains', '$punishment','$awarded','$integrity','$integrity1','$overall','$stenos','$accuracy','$power','$signReportOfficer','$ReportingName','$designationReport','$dateReport','$uid')";
			
			$stmt = $conn->prepare($sql);

			
			$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
			$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
			$stmt->bindParam(":Amenability", $Amenability, PDO::PARAM_STR);
			$stmt->bindParam(":generalremark", $generalremark, PDO::PARAM_STR);
			$stmt->bindParam(":knowledge", $knowledge, PDO::PARAM_STR);
			$stmt->bindParam(":knowledgesafety", $knowledgesafety, PDO::PARAM_STR);
			$stmt->bindParam(":safetygains", $safetygains, PDO::PARAM_STR);
			$stmt->bindParam(":punishment", $punishment, PDO::PARAM_STR);
			$stmt->bindParam(":awarded", $awarded, PDO::PARAM_STR);
			$stmt->bindParam(":integrity",$integrity, PDO::PARAM_STR);
			$stmt->bindParam(":integrity1", $integrity, PDO::PARAM_STR);
			$stmt->bindParam(":overall" ,$overall, PDO::PARAM_STR);
			$stmt->bindParam(":stenos", $stenos, PDO::PARAM_STR);			
			$stmt->bindParam(":accuracy", $accuracy, PDO::PARAM_STR);
			$stmt->bindParam(":power", $power, PDO::PARAM_STR);
			$stmt->bindParam(":signReportOfficer", $signReportOfficer, PDO::PARAM_STR);
			$stmt->bindParam(":ReportingName", $ReportingName, PDO::PARAM_STR);
			$stmt->bindParam(":designationReport", $designationReport, PDO::PARAM_STR); 
			$stmt->bindParam(":dateReport", $dateReport, PDO::PARAM_STR);
			

			$stmt->execute(array( 
			":uid"=>$uid,
			":ayear"=> $ayear,
			":Amenability" => $Amenability,
			":generalremark" => $generalremark, 
			":knowledge" => $knowledge, 
			":knowledgesafety" => $knowledgesafety, 
			":safetygains" => $safetygains, 
			":punishment" => $punishment,
			":awarded" => $awarded,
			":integrity" => $integrity, 
			":integrity1" => $integrity1, 
			":overall" =>$overall,
			":stenos"=>$stenos,
			":accuracy" => $accuracy,
			":power" => $power, 
			":signReportOfficer" => $signReportOfficer,
			":ReportingName" => $ReportingName,
			":designationReport" => $designationReport,
			":dateReport" => $dateReport, 
			 ));
		
		if($stmt->rowCount()) 
	{
		header('Location: viewlist.php');
	} 
	else 
	{
		echo 'Data not updated';
	}
		

}
if (!empty($_GET['uid'])) {
	
	$uid = $_GET['uid'];
	
	$query = "SELECT * FROM user1 WHERE uid = :uid";
		
			
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
		<script type="text/javascript">
		function changetextbox()
{
    if (document.getElementById("integrity").value == "doubt") {
        document.getElementById("integrity1").disabled=false;
    } else {
        document.getElementById("integrity1").disabled=true;
				document.getElementById("integrity1").value=null;

    }
}
</script>
</head>
<body>
	
		<?php include 'header.php';?> 
		<div class="container" style="padding-top: 160px">
		<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
		
		<td><label style="float:left;" for="exampleFormControlInput1">CENTRAL RAILWAY</label></td>
		<td><label style="float:right;" for="exampleFormControlInput1">GC-16/ANNEXURE-V</label></td><br><br>
		<h3> CONFIDENTIAL REPORT-YEAR ENDING 31-3- </h3>
		<h2> CONFIDENTIAL REPORT FOR STAFF IN GRADE Rs. 4500-7000(RSRP)</h2>
		<br>
		<form name="GC5" method="post">
		<table class="table table-bordered">
		<thead>
		<input type="hidden" name="uid" id="uid" value="<?php echo $_GET['uid']; ?>">
		<div><input type="hidden" class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>">
		</div>
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
		<td><label for="exampleFormControlInput1">substantive</label></td>
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
	<td><label for="exampleFormControlInput1">amenability to discipline 
</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="Amenability" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">7</label></td>
	<td><label for="exampleFormControlInput1">General remarks about his work & discharge of his duties with efficiency & sincerity</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="generalremark" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">8</label></td>
	<td><label for="exampleFormControlInput1">knowledge of departmental rules/working</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="knowledge" ></td>
	</tr>
	
	<tr>
	<td ><label for="exampleFormControlInput1">9</label></td>
	<td colspan="2"><label for="exampleFormControlInput1">Safety consciousness:</label></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(i)</label></td>
	<td><label for="exampleFormControlInput1">Knowledge of safe working rules</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="knowledgesafety" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(ii)</label></td>
	<td><label for="exampleFormControlInput1">Whether he disregards safety in train operation for short term gains</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="safetygains" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">10</label></td>
	<td><label for="exampleFormControlInput1">Punishments, if any,awarded during the reporting year</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="punishment" ></td>
	</tr>
	
	</tr>
	<td><label for="exampleFormControlInput1">11</label></td>
	<td><label for="exampleFormControlInput1">Awards/commendation Certificates,if any, awarded during the reporting year</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="awarded" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">12</label></td>
	<td><label for="exampleFormControlInput1">Integrity</label></td>
	<td><select required class="form-control" id="integrity" name="integrity"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">13</label></td>
	<td><label for="exampleFormControlInput1">Overall classification i,e. "Outstanding", "Very Good","Good","Average","Below Average"</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="overall" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">14</label></td>
	<td><label for="exampleFormControlInput1">For Stenos only</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="stenos" value=" "></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(a)</label></td>
	<td><label for="exampleFormControlInput1">accuracy in Stenographic work</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="accuracy" ></td>
	</tr>
	
	<tr>
	<td><label for="exampleFormControlInput1">(b)</label></td>
	<td><label for="exampleFormControlInput1">Power of Drafting</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="power" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td colspan="2"><label for="exampleFormControlInput1">For Categories to whom applicable</label> </td>
	</tr>
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Signature of reporting officer</label></td>
	<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="signReportOfficer" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Name in Block letters</label></td>
	<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="ReportingName" value="<?php echo $fname; ?>" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Designation</label></td>
	<td>
	<input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="designationReport" value="<?php echo $designation; ?>" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Date</label></td>
	<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="dateReport" value="<?php
$dt = new DateTime();
echo $dt->format('Y-m-d');
?>"></td> ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Remarks if any of the reviewing officer</label></td>
	<td><input  type="text"readonly class="form-control" id="exampleFormControlInput1" name="remarkReview" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Signaure of the reviewing officer</label></td>
	<td><input  type="text"readonly class="form-control" id="exampleFormControlInput1" name="signReview" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Name in Block letters</label></td>
	<td><input type="text"readonly class="form-control" id="exampleFormControlInput1" name="nameReview"></td>
	</tr>
	
	<tr>
	<td></td>
	<td><label for="exampleFormControlInput1">Designation during the period of report</label></td>
	<td><input  type="text"readonly class="form-control" id="exampleFormControlInput1" name="designationReview" ></td>
	</tr>
	</tbody>
	</table>
	
	
	<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a>
	<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		

	</form>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
