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
$uid = $_COOKIE['uid'];
 
	
	
	
	$query = $sql = "select * from user1 u1 INNER JOIN reporting1800 r on u1.uid=r.uid WHERE u1.uid = $uid";
		
			
	$stmt = $conn->prepare($query);


	$uid = htmlspecialchars(strip_tags($uid));
	
	$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
	

	$stmt->execute();

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";


	//$viewLists = array();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
		




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

 <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
		<img src="images/Rail_Logo.png" alt="Indian Railways" height="60px"> 
		</nav>



   <div class="container" style="padding-top: 160px">
	<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
	<table  class="table table-bordered">
	<thead>
	
    <form name="apar1800" method="post">
	<th colspan="3"><div class="alert alert-info"  role="alert">
    APAR for staff working in Level -1 Grade Pay-1800</div></th>
    </thead>
	
	<tbody>
	<tr>
	<td colspan="2"><div >
    </div></td>
	<td colspan="3"><div >Assesment Year :    <?php echo $row['ayear']; ?></td>
    </div></td>
	</tr>
	<tr>
	<td colspan="3"><div class="alert alert-info" role="alert">
    Section A - Employee Particular.</div></td>
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
			<td><label for="exampleFormControlInput1">Father Name</label></td>
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
			<td><label for="exampleFormControlInput1">Rate of Pay</label></td>
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
	Section B - Assesment of Performance	</th>
    </div>
	</thead>
	<tbody>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlTextarea1"></label></td>
			<td><label for="exampleFormControlTextarea1">Integrity</label></td>
			<td><?php echo $row['integrity']; ?></td>
	</div>
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
			<td><?php echo $row['attendance']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlSelect1">2</label></td>
			<td><label for="exampleFormControlSelect1">General Intelligence</label></td>
			<td><?php echo $row['generalIntelligence']; ?></td>
			</tr>
	</div>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlSelect1">3</label></td>
			<td><label for="exampleFormControlSelect1">Physical Fitness</label></td>
			<td><?php echo $row['physicalFitness']; ?></td>
			</tr>
	</div>
	</tbody>
	
	<tbody>
	<td rowspan="5" width="50px"><label for="exampleFormControlSelect1">B3</label></td>
	<th rowspan="6" width="250px"><div class="alert alert-info" role="alert">
	Section B3 - Working Ability	</th>
    </div>
	
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">1</label></td>
			<td><label for="exampleFormControlSelect1">Knowledge of Rule</label></td>
			<td><?php echo $row['knowledgeofRule']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">2</label></td>
			<td><label for="exampleFormControlSelect1">Saftey Consciousness</label></td>
			<td><?php echo $row['safety']; ?></td>
		</tr>
	</div>
	<div class="form-group">
		<tr>
			<td width="25px"><label for="exampleFormControlSelect1">3</label></td>
			<td><label for="exampleFormControlSelect1">Quality of Work</label></td>
			<td><?php echo $row['quality']; ?></td>
		</tr>
	</div>
	</tbody>
	<tbody>
	<div class="form-group">
		<tr>
			<td><label for="exampleFormControlTextarea1">B4</label></td>
			<td colspan="3"><label for="exampleFormControlTextarea1">Overall Performance</label></td>
			<td ><?php echo $row['performance']; ?></td>
		</tr>
	</div>
	</tbody>
	
	<tbody>
		<div class="form-group">
			<td><label for="exampleFormControlTextarea1">B5</label></td>
			<td colspan="3"><label for="exampleFormControlTextarea1">Grand Total (B3+B2+B1)</label></td>
			<td><?php echo $row['grandTotal']; ?></td>
		</div>
	</tbody>
	
	<tbody>
	<div class="form-group">
		<tr>
			<td colspan="4"><label for="exampleFormControlTextarea1"> C)Any award / penalty during period then please mention</label></td>
			<td><?php echo $row['AoB']; ?></td>
		</tr>
		</div>
	
	</div>
	</tbody>
	</table>
	<p>Note:</p> 
	<p>1.One(1)is the lowest & five(5) is the highest in the assessment scale corresponding to 
	"Below Average","Average","Good","Very Good","Outstanding".</p>
	<p>      2. The total point (B5) will be the "Records of service" marks for assessment purpose.</p>
	
	
		
		<table>
		<tbody>
		<tr>
		<div class="input-group">
		  <td colspan="3"><label>Reviewing Officer</label><td>
		  <td colspan="3"><label>Reporting Officer</label></td>
		</tr>
		<tr>

			<td><label>Name</label></td>
			<td><?php echo $row['ReviewingName']; ?></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label>Name</label></td>
			<td><?php echo $row['ReportingName']; ?></td>
		
		</tr>
		<tr>
		
			<td><label>Designation</label></td>
			<td><?php echo $row['ReviewingDesignation']; ?></td>
			<td colspan="2"><input type="hidden">&nbsp;</td> 
			<td><label>Designation:-</label></td>
			<td><?php echo $row['ReportingDesignation']; ?></td>
		</tr>
		<tr>
			<td><label>Date</label></td>
			<td><?php echo $row['ReviewingDate']; ?></td>  
			<td colspan="2"><input type="hidden">&nbsp;</td>
			<td><label>Date</label></td>			
			<td><?php echo $row['ReportingDate']; ?></td>
		</tr>			
		</div>
		
		</tbody>
		</table>
		<a type="button" style="float:left;" href="Self.php" class="btn btn-info">Back</a>
		<!--<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
	</form>

    
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
