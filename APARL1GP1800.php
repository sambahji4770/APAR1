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
$designation=$_COOKIE['designation'];
$ayear=$_COOKIE['ayear'];

//echo $ayear;
if (isset($_POST['submit'])) 
{
	$uid=$_POST['uid'];
	$ayear= $_POST['ayear'];
	$integrity = $_POST['integrity'];
	$integrity1 = $_POST['integrity1'];
	$attendance = $_POST['attendance'];
	$generalIntelligence = $_POST['generalIntelligence'];
	$physicalFitness = $_POST['physicalFitness'];
	$knowledgeofRule = $_POST['knowledgeofRule'];
	$safety =$_POST['safety'];
	$quality = $_POST['quality'];
	$promptness = $_POST['promptness'];
	$performance = $_POST['performance'];
	$grandTotal =$_POST['grandTotal'];
	$AoB =$_POST['AoB']; 
	$ReportingName =$_POST['ReportingName'];
	$ReportingDesignation = $_POST['ReportingDesignation'];
	$ReportingDate = $_POST['ReportingDate'];
	
	
	$query1 = 
	"INSERT INTO `reporting1800`(`ayear`, `integrity`, `integrity1`, `attendance`, `generalIntelligence`, `physicalFitness`, `knowledgeofRule`, `safety`, `quality`, `promptness`, `performance`, `grandTotal`, `AoB`, `ReportingName`, `ReportingDesignation`, `ReportingDate`, `uid`) VALUES ('$ayear','$integrity','$integrity1','$attendance','$generalIntelligence','$physicalFitness','$knowledgeofRule','$safety','$quality', $promptness,'$performance','$grandTotal','$AoB','$ReportingName','$ReportingDesignation','$ReportingDate','$uid')"; 
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":integrity", $integrity, PDO::PARAM_STR);
		$stmt->bindParam(":integrity1", $integrity1, PDO::PARAM_STR);
		$stmt->bindParam(":attendance", $attendance, PDO::PARAM_STR);
		$stmt->bindParam(":generalIntelligence", $generalIntelligence, PDO::PARAM_STR);
		$stmt->bindParam(":physicalFitness", $physicalFitness, PDO::PARAM_STR);
		$stmt->bindParam(":knowledgeofRule", $knowledgeofRule, PDO::PARAM_STR);
		$stmt->bindParam(":safety", $safety, PDO::PARAM_STR);
		$stmt->bindParam(":quality", $quality, PDO::PARAM_STR);
		$stmt->bindParam(":promptness", $promptness, PDO::PARAM_STR);
		$stmt->bindParam(":performance", $performance, PDO::PARAM_STR);
		$stmt->bindParam(":grandTotal", $grandTotal, PDO::PARAM_STR);
		$stmt->bindParam(":AoB", $AoB, PDO::PARAM_STR); 
		$stmt->bindParam(":ReportingName", $ReportingName, PDO::PARAM_STR);
		$stmt->bindParam(":ReportingDesignation", $ReportingDesignation, PDO::PARAM_STR);
		$stmt->bindParam(":ReportingDate", $ReportingDate, PDO::PARAM_STR);
	
			
		// execute the query
		$stmt->execute(array(
		":uid"=>$uid,
		":ayear"=> $ayear,
		":integrity" => $integrity,
		":integrity1" => $integrity1,
		":attendance" => $attendance,
		":generalIntelligence" => $generalIntelligence,
		":physicalFitness" => $physicalFitness,
		":knowledgeofRule" => $knowledgeofRule,
		":safety" =>$safety,
		":quality" => $quality,
		":promptness:"=>$promptness,
		":performance" => $performance,
		":grandTotal" =>$grandTotal,
		":AoB" =>$AoB,
		":ReportingName"=> $ReportingName,
		":ReportingDesignation"=> $ReportingDesignation, 
		":ReportingDate"=> $ReportingDate
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
	
	

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";
	



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
		
		 <script>
			function doAdditions(){
				var v1 = document.getElementById("attendance").value;
				var v2 = document.getElementById("generalIntelligence").value;
				var v3 = document.getElementById("physicalFitness").value;
				var v4 = document.getElementById("knowledgeofRule").value;
				var v5 = document.getElementById("safety").value;
				var v6 = document.getElementById("quality").value;
				var v7 = document.getElementById("promptness").value;
			
				var additions = Number(v1)+Number(v2)+Number(v3)+Number(v4)+Number(v5)+Number(v6)+Number(v7);
				
				document.getElementById("grandTotal").value  = additions;
			}
		</script>
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


<nav class="navbar navbar-inverse fixed-top" style="background-color:#D6EAF8;" >
	
    <div class="navbar-header">
		<img src="images/Rail_Logo.png"   alt="Indian Railways" height="60px">
	</div>
	
      <a class="nav-link btn btn-info" style="font-size:18px;" href="/APAR1" >Logout</a>
	
	
	</nav>



   <div class="container" style="padding-top: 160px">
	<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
	<table  class="table table-bordered">
	<thead>
	
    <form name="apar1800" method="post">
	<th colspan="3"><div class="alert alert-info"  role="alert">
    APAR for staff working in Level -1, Grade Pay-1800/-</div></th>
    </thead>
	<input type="hidden" name="uid" id="uid" value="<?php echo $_GET['uid']; ?>">
	<tbody>
	<tr>
	<td colspan="2"><div >
    </div></td>
	<td colspan="3"><div >Assesment Year :   <input type="text" readonly  class="form-control" id="exampleFormControlInput1" name="ayear" id="ayear" value=" <?php echo $ayear; ?>"></td>
    </div></td>
	</tr>
	<tr>
	<td colspan="3"><div class="alert alert-info" role="alert">
    (A) - EMPLOYEE PARTICULARS (To be filled by Office)</div></td>
	</tr>
    
	
	
	<div class="">
	
		<tr>
			<td width="50px"><label for="exampleFormControlInput1">1</label></td>	
			<td width="500px"><label for="exampleFormControlInput1">Name</label></td>
			<td><?php echo $row['fullname']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">2</label></td>
			<td><label for="exampleFormControlInput1">Father's Name</label></td>
			<td> <?php echo $row['fatherName']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">3</label></td>
			<td><label for="exampleFormControlInput1">Designation</label></td>
			<td> <?php echo $row['designation']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">4</label></td>
			<td><label for="exampleFormControlInput1">Date of Birth</label></td>
			<td><?php echo $row['dob']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">5</label></td>
			<td><label for="exampleFormControlInput1">Date of Appointment</label></td>
			<td> <?php echo $row['doa']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">6</label></td>
			<td><label for="exampleFormControlInput1">Educational Qualification</label></td>
			<td> <?php echo $row['e_professional']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			
			<td><label for="exampleFormControlInput1">7</label></td>
			<td><label for="exampleFormControlInput1">Rate of Pay/Scale of pay/Level</label></td>
			<td><?php echo $row['grade']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">8</label></td>
			<td><label for="exampleFormControlInput1">SC/ST (Specify)</label></td>
			<td><?php echo $row['category']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlInput1">9</label></td>
			<td><label for="exampleFormControlInput1"></label></td>
			<td></td>
	</div>
	</tbody>
	
	<thead>
	<th colspan="3"><div class="alert alert-info" role="alert">
	(B) - Assesment of Performance	</th>
    </div>
	</thead>
	<tbody>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlTextarea1"></label></td>
			<td><label for="exampleFormControlTextarea1">Integrity</label> <label for="exampleFormControlTextarea1">(If integrity is "Beyond  doubt" writes so. If there is  doubt or suspicion ,Leave item  blank & attach separate note on which an appropriate decision shall be  taken as per procedure.) </label></td>
			
			<td><select required class="form-control" id="integrity" name="integrity"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
	</tbody>
	</table>
	<table class="table table-bordered">
	<tbody>
	
	<tr>
	<td rowspan="5" width="25px"><label for="exampleFormControlSelect1">B2</label></td>
	<td rowspan="5" width="250px" ><div class="alert alert-info" role="alert">
	 General Qualities	</td>
    </div>
	</tr>
	<div >
	<tr>
	<td><label for="exampleFormControlSelect1"></label></td>
	<td><label for="exampleFormControlSelect1">Marks to be awarded in a scale of</label></td>
	<td><label for="exampleFormControlSelect1">1 to 5</label></td>
	</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">1</label></td>
			<td><label for="exampleFormControlSelect1">Attendance</label></td>
			<td><select required class="form-control" id="attendance" name="attendance" onchange="doAdditions()">
			<option value=""> </option>
			<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlSelect1">2</label></td>
			<td><label for="exampleFormControlSelect1">General Intelligence</label></td>
			<td><select required class="form-control" id="generalIntelligence" name="generalIntelligence" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
			</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlSelect1">3</label></td>
			<td><label for="exampleFormControlSelect1">Physical Fitness</label></td>
			<td><select required class="form-control" id="physicalFitness" name="physicalFitness" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
			</tr>
	</div>
	</tbody>
	
	<tbody>
	<td rowspan="5" width="50px"><label for="exampleFormControlSelect1">B3</label></td>
	<th rowspan="6" width="250px"><div class="alert alert-info" role="alert">
	Working Ability	</th>
    </div>
	
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">1</label></td>
			<td><label for="exampleFormControlSelect1">Knowledge of Rules</label></td>
			<td><select required class="form-control" id="knowledgeofRule" name="knowledgeofRule" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">2</label></td>
			<td><label for="exampleFormControlSelect1">Saftey Consciousness(where relevant)</label></td>
			<td><select required class="form-control" id="safety" name="safety" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option  value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">3</label></td>
			<td><label for="exampleFormControlSelect1">Quality of Work</label></td>
			<td><select required class="form-control" id="quality" name="quality" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">4</label></td>
			<td><label for="exampleFormControlSelect1">Promptness</label></td>
			<td><select required class="form-control" id="promptness" name="promptness" onchange="doAdditions()">
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	</tbody>
	<tbody>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlTextarea1">B4</label></td>
			<td colspan="3"><label for="exampleFormControlTextarea1">OVERALL PERFORMANCE</label></td>
			<td><select required class="form-control"  name="performance" id="performance" >
				<option value=""> </option>
				<option  value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
	</div>
	</tbody>
	
	<tbody>
		<div class="form-group">
			<td><label for="exampleFormControlTextarea1">B5</label></td>
			<td colspan="3"><label for="exampleFormControlTextarea1">GRAND TOTAL POINTS OBTAINED (B3+B2+B1)</label></td>
			<td><input type="text" readonly  class="form-control" name="grandTotal" id ="grandTotal" > </td>
		</div>
	</tbody>
	
	<tbody>
	<div class="form-group">
		<tr>
			<td colspan="4"><label for="exampleFormControlTextarea1"> C)Whether Any award / penalty during the period if so mention.</label></td>
			<td><textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="AoB" id="AoB"></textarea>
			</td>
		</tr>
		</div>
	
	</div>
	</tbody>
	</table>
	<p>Note:</p> 
	<p>1.One(1) is the lowest & Five(5) is the highest in the assessment scale corresponding to 
	"Below Average","Average","Good","Very Goods","Outstanding".</p>
	<p>      2. The total points (B5) will be the "Records of service" marks for assessment purpose.</p>
	
	
		
		<table>
		<tbody>
		<tr>
		<div class="input-group">
		<td colspan="2"><label style="float:left;">Reporting Officers signature</label></td>
		<td colspan="6"><input type="hidden">&nbsp;</td> 
		  <td><label style="float:right;">Reviewing Officers signature</label></td>
		  
		</tr>
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" readonly  name="ReportingName" id="ReportingName" value="<?php echo $fname;  ?>"></td>
			<td colspan="5"><input type="hidden">&nbsp;</td> 
			<td><label style="float:right;"  >Name</label></td>
			<td><input style="float:right;"  type="text" readonly name="ReviewingName" id="ReviewingName"></td>
			
			
		
		</tr>
		<tr>
			<td><label style="float:left;">Designation</label></td>
			
			<td><input type="text" style="float:left;" readonly  name="ReportingDesignation" id="ReportingDesignation" value="<?php echo $designation;  ?>"></td>
			<td colspan="5"><input type="hidden">&nbsp;</td> 
			<td><label style="float:right;">Designation</label></td>
			<td><input  type="text" style="float:right;" readonly name="ReviewingDesignation" id="ReviewingDesignation"></td>
			
			
		</tr>
		<tr>
			<td><label>Date</label></td>
			<td><input required type="text" readonly name="ReportingDate" id="ReportingDate"value="<?php
			$dt = new DateTime();
			echo $dt->format('Y-m-d');
			?>"></td>
			<td colspan="5"><input type="hidden">&nbsp;</td> 
			<td><label style="float:right;">Date</label></td>
			<td><input type="text" style="float:right;" readonly name="ReviewingDate" id="ReviewingDate"></td>  
				
			
		</tr>			
		</div>
		
		</tbody>
		</table>
		<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
	</form>

   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
