<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apar";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$ayear=$_COOKIE['ayear'];
$grade=$_COOKIE['grade'];
$designation=$_COOKIE['designation'];

 if (isset($_POST['submit'])) 
{
	$uid=$_POST['uid'];
	$Reviewremark =$_POST['Reviewremark'];
	$Special =$_POST['Special'];
	$ReviewingName =$_POST['ReviewingName'];
	$ReviewingDesignation = $_POST['ReviewingDesignation'];
	$ReviewingDate = $_POST['ReviewingDate'];
	
	
	$query1 =
"UPDATE `reporting1900` SET `Reviewremark`='$Reviewremark',`Special`='$Special',`ReviewingName`='$ReviewingName',`ReviewingDesignation`='$ReviewingDesignation',`ReviewingDate`='$ReviewingDate' WHERE `uid`='$uid'";	
	
		
	
		
		$stmt = $conn->prepare($query1);
		
		$stmt->bindParam(":Reviewremark", $Reviewremark, PDO::PARAM_STR);
		$stmt->bindParam(":Special", $Special, PDO::PARAM_STR);
		$stmt->bindParam(":ReviewingName", $ReviewingName, PDO::PARAM_STR);
		$stmt->bindParam(":ReviewingDesignation", $ReviewingDesignation, PDO::PARAM_STR);
		$stmt->bindParam(":ReviewingDate", $ReviewingDate, PDO::PARAM_STR);
	
			
		// execute the query
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
	
	

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";
	



 if (!empty($_GET['uid'])) {
	
	$uid = $_GET['uid'];
	
	$query = $sql = "select * from user1 u1 INNER JOIN reporting1900 r on u1.uid=r.uid WHERE u1.uid = $uid AND ayear=$ayear";
		
			
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
<?php include 'header.php';

//echo '<pre>'; print_r($_POST); echo '</pre>';

?>
  <div class="container" style="padding-top: 160px">
	<table class="table table-bordered">
	<thead>
	<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
    <form name="apar1900" method="post">
    <th colspan="3"><div class="alert alert-info "  role="alert">
    APAR for staff working in Level -1 Grade Pay-1900</div></th>
    </thead>
	<input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>">
	<tbody>
	<tr>
	<td colspan="2"><div >
    </div></td>
	<td colspan="3"><div >Assesment Year :   <?php echo $row['ayear']; ?></td>
    </div></td>
	</tr>
	<tr>
	<td colspan="3"><div class="alert alert-info" role="alert">
    Section A - Employee Particular.</div></td>
	</tr>
	<input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>">
	<tbody>
  <div class="form-group">
 
	
	 <tr>
	 <td width="50px"><label for="exampleFormControlInput1">1</label></td>
    <td><label for="exampleFormControlInput1">Name in Full</label></td>
    <td><?php echo $row['fullname']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">2</label></td>
   <td> <label for="exampleFormControlInput1">Date of Birth</label></td>
   <td><?php echo $row['dob']; ?></td>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">3</label></td>
    <td><label for="exampleFormControlInput1">Category (SC/ST/OBC/GENL) </label></td>
    <td><?php echo $row['category']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">4</label></td>
    <td><label for="exampleFormControlInput1">Designation</label></td>
    <td><?php echo $row['designation']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">5</label></td>
    <td><label for="exampleFormControlInput1">Station at Which Employeed</label></td>
    <td><?php echo $row['atStation']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">6</label></td>
    <td><label for="exampleFormControlInput1">Date of Appointmnet in Service</label></td>
    <td><?php echo $row['doa']; ?></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
	<td width="50px"><label for="exampleFormControlInput1">7</label></td>
	<td><label for="exampleFormControlInput1">Date of Continious Appointment to the Present Grade Pay</label></td>
    <td><?php //echo $row['DoCA']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">8</label></td>
    <td><label for="exampleFormControlInput1">Whether Permanent / Temporary</label></td>
    <td><?php //echo $row['permanent']; ?></td>
	</tr>
 </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">9</label></td>
    <td><label for="exampleFormControlInput1">Education, Professional & Technical Qualification</label></td>
    <td><?php echo $row['e_professional']; ?></td>
	</tr>
  </div>
  
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">10</label></td>
    <td><label for="exampleFormControlInput1">Particular of Examination (Including departmental examination) Passed during the year</label></td>
    <td><?php //echo $row['PoE']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">11</label></td>
    <td><label for="exampleFormControlInput1"></label></td>
    <td> <input required type="hidden" class="form-control" id="exampleFormControlInput1"  name="" value=""></td>
	</tr>
  </div>
  </tbody>
  <thead>
  <th colspan="3"><div class="alert alert-info" role="alert">
  Part B - Assesment	
	</div></th>
	</thead>
	<tbody>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">1</label></td>
			<td><label for="exampleFormControlSelect1">Punctuality / Regularity</label></td>
			<td><?php echo $row['punctuality']; ?></td>
			</tr>
	</div>
  
  <div class="form-group">

		<tr>
		<td width="50px"><label for="exampleFormControlInput1">2</label></td>
			<td><label for="exampleFormControlSelect1">Leave taken during this year</label></td>
			<td><?php echo $row['leave']; ?></td></tr>
	</div>
  
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">3</label></td>
			<td><label for="exampleFormControlSelect1">Integrity(* should be either Beyond or dobtful, if there is any doubt or suspicion ,the item should be left blank and action taken as per procedure in separte secret note)</label></td>
			<td><?php echo $row['integrity']; ?><br><br>
			<?php echo $row['integrity1']; ?></td></tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">4</label></td>
			<td><label for="exampleFormControlSelect1">Attitude / Relation with colleague/ Sr. / Jr./</label></td>
			<td><?php echo $row['attitude']; ?></td></tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">5</label></td>
			<td><label for="exampleFormControlSelect1">Initiative</label></td>
			<td><?php echo $row['Initiative']; ?></td></tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">6</label></td>
			<td><label for="exampleFormControlSelect1">Commitment / Devotion / Sincerity</label></td>
			<td><?php echo $row['commitment']; ?></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">7</label></td>
			<td><label for="exampleFormControlSelect1">Knowledge of Profession</label></td>
			<td><?php echo $row['KoP']; ?></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">8</label></td>
			<td><label for="exampleFormControlSelect1">Capacity to bear higher responsibility</label></td>
			<td><?php echo $row['capacitytobear']; ?></td>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">9</label></td>
			<td><label for="exampleFormControlSelect1">Capacity to Work Independently or need guideline / continuious guideline</label></td>
			<td><?php echo $row['capacitytowork']; ?></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">10</label></td>
			<td><label for="exampleFormControlSelect1">Level of efficiency / skill</label></td>
			<td><?php echo $row['efficiency']; ?></td>
			</tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">11</label></td>
			<td><label for="exampleFormControlSelect1">Any Specific Remark</label></td>
			<td><?php echo $row['remark']; ?></td></tr>
	</div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">12</label></td>
    <td><label for="exampleFormControlSelect1">Overall Grading.</label></td>
    <td><?php echo $row['grading']; ?></td>
	</tr>
  </div>
  <div class="form-group">
		<tr>
			<td colspan="2"><label for="exampleFormControlTextarea1"> Review Remark</label></td>
			<td><select required class="form-control" id="Reviewremark" name="Reviewremark" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select><br>
			<textarea  required class="form-control"  name="Special" id="Special"></textarea>
			</td></tr>
		</tr>
		</div>
  </tbody>
  </table>
 <table>
		<tbody>
		<tr>
		<div class="input-group">
		  <td colspan="6"><label>Reviewing Officers Signture</label><td>
		  <td colspan="6"><label>Reporting Officers signture</label></td>
		</tr>
		<tr>

			<td><label>Name</label></td>
			<td><input  type="text" readonly name="ReviewingName" id="ReviewingName" value="<?php echo $fname;  ?>"></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label>Name</label></td>
			<td><input  type="text" readonly name="ReportingName" id="ReportingName" value="<?php echo $row['ReportingName']; ?>"></td>  
		
		</tr>
		<tr>
		
			<td><label>Designation</label></td>
			<td><input  type="text" readonly name="ReviewingDesignation" id="ReviewingDesignation" value="<?php echo $designation;  ?>"></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label>Designation</label></td>
			<td><input  type="text" readonly name="ReportingDesignation" id="ReportingDesignation" value="<?php echo $row['ReportingDesignation']; ?>"></td>  
		</tr>
		<tr>
			<td><label>Date</label></td>
			<td><input type="text" readonly name="ReviewingDate" id="ReviewingDate" value="<?php
			$dt = new DateTime();
			echo $dt->format('Y-m-d');
				?>"></td>  
			<td colspan="2"><input type="hidden">&nbsp;</td> 	
			<td><label>Date</label></td>
			<td><input type="text" readonly name="ReportingDate" id="ReportingDate" value="<?php echo $row['ReportingDate']; ?>"></td>  
		</tr>			
		</div>
		
		</tbody>
		</table>
		<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
</form>
</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>