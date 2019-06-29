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
$fname=$_COOKIE['fullname'];
$ayear=$_COOKIE['ayear'];
$designation=$_COOKIE['designation'];

if (isset($_POST['submit']))  {
	$uid = $_POST['uid'];
	$ayear= $_POST['ayear'];
	$punctuality = $_POST['punctuality'];
	$leave = $_POST['leave'];
	$integrity =$_POST['integrity'];
	$integrity1 =$_POST['integrity1'];
	$attitude =$_POST['attitude'];
	$Initiative = $_POST['Initiative'];
	$commitment = $_POST['commitment'];
	$KoP = $_POST['KoP'];
	$capacitytobear =$_POST['capacitytobear'];
	$capacitytowork =$_POST['capacitytowork'];
	$efficiency =$_POST['efficiency'];
	$remark =$_POST['remark'];
	$grading = $_POST['grading'];
	$ReportingName =$_POST['ReportingName'];
	$ReportingDesignation = $_POST['ReportingDesignation'];
	$ReportingDate = $_POST['ReportingDate'];
	$query = 
		"INSERT INTO `reporting1900`( `ayear`, `punctuality`, `leave`, `integrity`,`integrity1`, `attitude`, `Initiative`, `commitment`, `KoP`, `capacitytobear`, `capacitytowork`, `efficiency`, `remark`, `grading`, `ReportingName`, `ReportingDesignation`, `ReportingDate`, `uid`) VALUES ('$ayear','$punctuality' ,'$leave','$integrity','$integrity1','$attitude','$Initiative' ,'$commitment','$KoP','$capacitytobear','$capacitytowork','$efficiency','$remark','$grading','$ReportingName','$ReportingDesignation','$ReportingDate','$uid')"; 
		
		
		
			
	$stmt = $conn->prepare($query);
	$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
	$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
	$stmt->bindParam(":punctuality", $punctuality, PDO::PARAM_STR);
	$stmt->bindParam(":leave", $leave, PDO::PARAM_INT);
	$stmt->bindParam(":integrity", $integrity, PDO::PARAM_STR);
	$stmt->bindParam(":integrity1", $integrity, PDO::PARAM_STR);
	$stmt->bindParam(":attitude", $attitude, PDO::PARAM_STR);
	$stmt->bindParam(":Initiative", $Initiative, PDO::PARAM_STR);
	$stmt->bindParam(":commitment", $commitment, PDO::PARAM_STR);
	$stmt->bindParam(":KoP", $KoP, PDO::PARAM_STR);
	$stmt->bindParam(":capacitytobear", $capacitytobear, PDO::PARAM_STR);
	$stmt->bindParam(":capacitytowork", $capacitytowork, PDO::PARAM_STR);
	$stmt->bindParam(":efficiency", $efficiency, PDO::PARAM_STR);
	$stmt->bindParam(":remark", $remark, PDO::PARAM_STR);
	$stmt->bindParam(":grading", $grading, PDO::PARAM_STR);
	$stmt->bindParam(":ReportingName", $ReportingName, PDO::PARAM_STR);
	$stmt->bindParam(":ReportingDesignation", $ReportingDesignation, PDO::PARAM_STR);
	$stmt->bindParam(":ReportingDate", $ReportingDate, PDO::PARAM_STR);

	$stmt->execute();
	
	if ($stmt->rowCount()) {
		header('Location: viewlist.php');
	} else {
		echo 'Data not updated';
	}

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";
	
}


if (!empty($_GET['uid'])) 
{
	
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
	<table class="table table-bordered">
	<thead>
	<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
    <form name="apar1900" method="post">
    <th colspan="3"><div class="alert alert-info "  role="alert">
    APAR for staff working in GP:1900/-</div></th>
    </thead>
	<input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>">
	<tbody>
	<tr>
	<td colspan="2"><div >
    </div></td>
	<td colspan="3"><div >Assesment Year :   <input type="text" readonly class="form-control" id="exampleFormControlInput1" name="ayear" id="ayear" value=" <?php echo $ayear; ?>"></td>
    </div></td>
	</tr>
	<tr>
	<td colspan="3"><div class="alert alert-info" Style="float:center;" role="alert">
  PART-A ,ASSESMENT </div></td>
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
    <td><label for="exampleFormControlInput1">Category (SC/ST/OBC/GENL) 
</label></td>
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
    <td><?php echo $row['doa']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">8</label></td>
    <td><label for="exampleFormControlInput1">Whether Permanent / Temporary</label></td>
    <td><?php echo $row['P/T']; ?></td>
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
    <td><?php echo $row['deptExam']; ?></td>
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
  Part-B , Assesment	
	</div></th>
	</thead>
	<tbody>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">1</label></td>
			<td><label for="exampleFormControlSelect1">Punctuality / Regularity</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="punctuality" >
			    <option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td>
			</tr>
	</div>
  
  <div class="form-group">

		<tr>
		<td width="50px"><label for="exampleFormControlInput1">2</label></td>
			<td><label for="exampleFormControlSelect1">Leave taken during the year</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="leave" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
  
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">3</label></td>
			<td><label for="exampleFormControlSelect1">Integrity(* should be either Beyond doubt or doubtful, if there is any doubt or suspicion ,the item should be left blank and action taken as per procedure in separate secret note)</label></td>
			<td><select required class="form-control" id="integrity" name="integrity"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">4</label></td>
			<td><label for="exampleFormControlSelect1">Attitude / Relation with colleague/ Sr. / Jr./</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="attitude" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">5</label></td>
			<td><label for="exampleFormControlSelect1">Initiative</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="Initiative" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">6</label></td>
			<td><label for="exampleFormControlSelect1">Commitment / Devotion / Sincerity</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="commitment" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">7</label></td>
			<td><label for="exampleFormControlSelect1">Knowledge of Profession</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="KoP" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">8</label></td>
			<td><label for="exampleFormControlSelect1">Capacity too bear higher responsibility</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="capacitytobear" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">9</label></td>
			<td><label for="exampleFormControlSelect1">Capacity to Work Independently or need guideline / continuous guideline</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="capacitytowork" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td></tr>
	</div>
 <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">10</label></td>
			<td><label for="exampleFormControlSelect1">Level of efficiency / skill</label></td>
			<td><select required class="form-control" id="exampleFormControlSelect1" name="efficiency" >
				<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
			</select></td>
			</tr>
	</div>
  <div class="form-group">
		<tr>
		<td width="50px"><label for="exampleFormControlInput1">11</label></td>
			<td><label for="exampleFormControlSelect1">Any Specific Remark</label></td>
			<td><textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="remark" id ="remark"></textarea></td>
			
	</div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">12</label></td>
    <td><label for="exampleFormControlSelect1">Overall Grading</label></td>
    <td><select required class="form-control" id="exampleFormControlSelect1"  name="grading">
	<option value=""> </option>
				<option  value=" Below Average">Below Average</option>
				<option value="Average">Average</option>
				<option value="Good">Good</option>
				<option value="Very Good">Very Good</option>
				<option value="Outstanding">Outstanding</option>
	  
    </select></td>
	</tr>
  </div>
  </tbody>
  </table>
 <table>
		<tbody>
		<tr>
		<div class="input-group">
		  <td colspan="3"><label>Reviewing Officers Signature</label><td>
		  <td colspan="3"><label style="float:right;">Reporting Officers signature</label></td>
		</tr>
		<tr>

			<td><label>Name</label></td>
			<td><input  type="text" readonly name="ReviewingName" id="ReviewingName"></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label style="float:right;">Name</label></td>
			<td><input type="text" style="float:right;" readonly name="ReportingName" id="ReportingName" value="<?php echo $fname;  ?>"></td>
		
		</tr>
		<tr>
		
			<td><label>Designation</label></td>
			<td><input  type="text" readonly name="ReviewingDesignation" id="ReviewingDesignation"></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label style="float:right;">Designation</label></td>
			<td><input type="text" style="float:right;" readonly name="ReportingName" id="ReportingName" value="<?php echo $designation;  ?>"></td>
		</tr>
		<tr>
			<td><label>Date</label></td>
			<td><input type="text" readonly name="ReviewingDate" id="ReviewingDate"></td>  
			<td colspan="2"><input type="hidden">&nbsp;</td> 	
			<td><label style="float:right;">Date</label></td>
			<td><input required type="text" style="float:right;" readonly name="ReportingDate" id="ReportingDate"  value="<?php
$dt = new DateTime();
echo $dt->format('Y-m-d');
?>"></td>
		</tr>			
		</div>
		
		</tbody>
		</table>
		<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
</form>
</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>