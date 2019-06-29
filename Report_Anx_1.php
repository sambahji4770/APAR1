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
$uid = $_COOKIE['uid'];
echo $uid;

// $fname=$_COOKIE['fullname'];

echo $ayear;
if (isset($_POST['submit'])) 
{
	$uid=$_POST['uid'];
	$ayear= $_POST['ayear'];
	$a2	= $_POST['2a'];
	$integrity1 = $_POST['integrity1'];
	$b2 = $_POST['2b'];
	$c2 = $_POST['2c']; 
	$d2	= $_POST['2d'];
	$e2 = $_POST['2e'];
	$a3 = $_POST['3a']; 
	$b3	= $_POST['3b'];
	$c3 = $_POST['3c']; 
	$d3	= $_POST['3d']; 
	$e3 = $_POST['3e'];
	$f3 = $_POST['3f'];
	$g3 = $_POST['3g'];
	$h3= $_POST['3h'];
	$hi3 = $_POST['3hi'];
	$hii3 = $_POST['3hii'];
	$hiii3 = $_POST['3hiii'];
	$i3 = $_POST['3i'];
	$j3 = $_POST['3j'];
	$a4= $_POST['4'];
	$a5 = $_POST['5'];
	$a6= $_POST['6'];
	$a7= $_POST['7a'];
	$b7 = $_POST['7b'];
	$c7 = $_POST['7c'];
	$a8= $_POST['8'];
	$a9= $_POST['9'];
	$a10= $_POST['10'];
	$a11 = $_POST['11a'];
	$b11 = $_POST['11b'];
	$c11 = $_POST['11c'];
	$d11 = $_POST['11d'];
	$a12 = $_POST['12'];
	$a13 = $_POST['13a'];
	$b13 = $_POST['13b'];
	$c13 = $_POST['13c'];
	$d13= $_POST['13d'];
	$e13= $_POST['13e'];
	$f13 = $_POST['13f'];
	$a14 = $_POST['14a'];
	$a15= $_POST['15']; 
	$s16= $_POST['16'];
	$a16= $_POST['16a'];
	$b16= $_POST['16b'];
	$c16 = $_POST['16c'];
	$a17 = $_POST['17'];
	$a18= $_POST['18'];
	$a19= $_POST['19'];
	$signReportOfficer= $_POST['signReportOfficer'];
	$name = $_POST['name'];
	$designation= $_POST['designation'];
	$dateReport= $_POST['dateReport'];

	
	$query1 = 
	"INSERT INTO `reporting_anx_i`(`ayear`, `2a`, `integrity1`, `2b`, `2c`, `2d`, `2e`, `3a`, `3b`, `3c`, `3d`, `3e`, `3f`, `3g`, `3h`, `3hi`, `3hii`, `3hiii`, `3i`, `3j`, `4`, `5`, `6`, `7a`, `7b`, `7c`, `8`, `9`, `10`, `11a`, `11b`, `11c`, `11d`, `12`, `13a`, `13b`, `13c`, `13d`, `13e`, `13f`, `14a`, `15`, `16`, `16a`, `16b`, `16c`, `17`, `18`, `19`, `signReportOfficer`, `name`, `designation`, `dateReport`, `createdDate`, `uid`) VALUES ('$ayear','$a2','$integrity1','$b2','$c2','$d2','$e2','$a3','$b3','$c3','$d3','$e3','$f3','$g3','$h3','$hi3','$hii3','$hiii3','$i3','$j3','$a4','$a5','$a6','$a7','$b7','$c7','$a8','$a9','$a10','$a11','$b11','$c11','$d11','$a12','$a13','$b13','$c13','$d13','$e13','$f13','$a14','$a15','$s16','$a16','$b16','$c16','$a17','$a18','$a19','$signReportOfficer', '$name', '$designation', '$dateReport', now(), '$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":2a",$a2, PDO::PARAM_STR);
		$stmt->bindParam(":integrity1", $integrity1, PDO::PARAM_STR);		
		$stmt->bindParam(":2b",$b2, PDO::PARAM_STR);
		$stmt->bindParam(":2c", $c2, PDO::PARAM_STR);
		$stmt->bindParam(":2d",$d2, PDO::PARAM_STR);
		$stmt->bindParam(":2e",$e2, PDO::PARAM_STR);
		$stmt->bindParam(":3a", $a3, PDO::PARAM_STR);
		$stmt->bindParam(":3b",$b3, PDO::PARAM_STR);
		$stmt->bindParam(":3c", $c3, PDO::PARAM_STR);
		$stmt->bindParam(":3d", $d3, PDO::PARAM_STR);
		$stmt->bindParam(":3e",$e3, PDO::PARAM_STR);
		$stmt->bindParam(":3f",$f3, PDO::PARAM_STR);
		$stmt->bindParam(":3g",$g3, PDO::PARAM_STR);
		$stmt->bindParam(":3h",$h3, PDO::PARAM_STR);
		$stmt->bindParam(":3hi",$hi3, PDO::PARAM_STR);
		$stmt->bindParam(":3hii",$hii3, PDO::PARAM_STR);
		$stmt->bindParam(":3hiii",$hiii3, PDO::PARAM_STR);
		$stmt->bindParam(":3i",$i3, PDO::PARAM_STR);
		$stmt->bindParam(":3j",$j3, PDO::PARAM_STR);
		$stmt->bindParam(":4",$a4, PDO::PARAM_STR);
		$stmt->bindParam(":5",$a5, PDO::PARAM_STR);
		$stmt->bindParam(":6",$a6, PDO::PARAM_STR);
		$stmt->bindParam(":7a",$a7, PDO::PARAM_STR);
		$stmt->bindParam(":7b",$b7, PDO::PARAM_STR);
		$stmt->bindParam(":7c",$c7 , PDO::PARAM_STR);
		$stmt->bindParam(":8",$a8, PDO::PARAM_STR);
		$stmt->bindParam(":9",$a9, PDO::PARAM_STR);
		$stmt->bindParam(":10",$a10, PDO::PARAM_STR);
		$stmt->bindParam(":11a",$a11, PDO::PARAM_STR);
		$stmt->bindParam(":11b",$b11, PDO::PARAM_STR);
		$stmt->bindParam(":11c",$c11, PDO::PARAM_STR);
		$stmt->bindParam(":11d",$d11, PDO::PARAM_STR);
		$stmt->bindParam(":12",$a12, PDO::PARAM_STR);
		$stmt->bindParam(":13a",$a13, PDO::PARAM_STR);
		$stmt->bindParam(":13b",$b13, PDO::PARAM_STR);
		$stmt->bindParam(":13c",$c13, PDO::PARAM_STR);
		$stmt->bindParam(":13d",$d13, PDO::PARAM_STR);
		$stmt->bindParam(":13e",$e13, PDO::PARAM_STR);
		$stmt->bindParam(":13f",$f13, PDO::PARAM_STR);
		$stmt->bindParam(":14a",$a14 , PDO::PARAM_STR);
		$stmt->bindParam(":15", $a15, PDO::PARAM_STR);
		$stmt->bindParam(":16",$s16, PDO::PARAM_STR);
		$stmt->bindParam(":16a",$a16, PDO::PARAM_STR);
		$stmt->bindParam(":16b",$b16, PDO::PARAM_STR);
		$stmt->bindParam(":16c",$c16, PDO::PARAM_STR);
		$stmt->bindParam(":17",$a17 , PDO::PARAM_STR);
		$stmt->bindParam(":18",$a18, PDO::PARAM_STR);
		$stmt->bindParam(":19",$a19, PDO::PARAM_STR);
		$stmt->bindParam(":signReportOfficer",$signReportOfficer, PDO::PARAM_STR);
		$stmt->bindParam(":name",$name, PDO::PARAM_STR);
		$stmt->bindParam(":designation",$designation, PDO::PARAM_STR);
		$stmt->bindParam(":dateReport",$dateReport, PDO::PARAM_STR);
			
		// execute the query
		$stmt->execute();
		
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
	$query = $sql = "select * from user1 u1 INNER JOIN self_anx_i r on u1.uid=r.uid WHERE u1.uid = $uid AND r.ayear=$ayear";
		
			
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
<html lang="en">
<head>
   <meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> APAR Report Annxure-I  </title>
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
		<script type="text/javascript">
		function changetextbox()
{
    if (document.getElementById("2a").value == "doubt") {
        document.getElementById("integrity1").disabled=false;
    } else {
        document.getElementById("integrity1").disabled=true;    
		document.getElementById("integrity1").value=null;
    }
}
</script>
<script>

$(document).ready(function(){
$('.next').click(function(){
   $('.nav-tabs > .nav-item >  .active').parent().next('li').find('a').trigger('click');

});
$('.previous').click(function () {
    $('.nav-tabs > .nav-item > .active').parent().prev('li').find('a').trigger('click');
});
  
});  </script>
</head>


<body>
<style>
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
</style>

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
	<div class="container" style="padding-top: 20px">
	<a type="button" style="float:left;" href="viewList.php" class="btn btn-info">Back</a><br />
    <form name="Anx-1" method="post">

    <h4 style="text-align:center " ><b>CONFIDENTIAL REPORT YEAR ENDING 31-3</b></h4><br>

    <h4 style="text-align:center">Confidential Report for Group 'C'Staff including Workshop Staff <br>(except PWIs,APWIs Signal Inspectors Asstt.Signal Inspectors and Teacher/Instructors)<br>for the year ending 31-3  <?php echo $ayear; ?> <input type="hidden" style="border:none" readonly name="ayear"  value=" <?php echo $ayear; ?>"></h4>
	<ul class="nav nav-tabs">
    <li class="nav-item "><a class="nav-link active" href="#tab1" data-toggle="tab">Part-I</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Part-II</a></li>
	 <li class="nav-item"><a class="nav-link"  href="#tab3" data-toggle="tab">Part-III</a></li>
</ul>
  <div class="tab-content">
    <div id="tab1" class=" tab-pane active"><br>
	<table class="table table-bordered">
	<thead>
    </thead>
	<tbody>
	<tr>
		<td colspan="2"><label for="exampleFormControlInput1">Department:
		<?php echo $row['department']; ?></td>

		<td><label for="exampleFormControlInput1">Office:</label>
		<?php echo $row['office']; ?></td>
	</tr>
	
	<tr>
	<td colspan="3"><div class="alert alert-info" role="alert">
    Section A - Employee Particular.</div></td>
	</tr>
	
		<input type="hidden" name="uid" id="uid" value="<?php echo $_GET['uid']; ?>">
	<tbody>
	
	<div class="form-group">	
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">1</label></td>
		<td><label for="exampleFormControlInput1">Name in full</label></td>
		<td><?php echo $row['fullname']; ?></td>
	</tr>
	</div>
	
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">2</label></td>
		<td> <label for="exampleFormControlInput1">Date of Birth</label></td>
		<td><?php echo $row['dob']; ?></td>
	</tr>
	</div>
  
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">3</label></td>
		<td><label for="exampleFormControlInput1">Designation</label></td>
		<td><?php echo $row['designation']; ?></td>
	</tr>
	</div>

	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">4</label></td>
		<td><label for="exampleFormControlInput1">Station at Which Employeed</label></td>
		<td><?php echo $row['atStation']; ?></td>
	</tr>
	</div>
  
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">5</label></td>
		<td><label for="exampleFormControlInput1">Substantive Pay:</label>
		<?php echo $row['substantivePay']; ?></td>
		<td><label for="exampleFormControlInput1">Scale</label>
		<?php //echo $row['doa']; ?></td>
	</tr>
	</div>
 
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1"></label></td>
		<td><label for="exampleFormControlInput1">Officiating Pay:</label>
		<?php echo $row['officiatingPay']; ?></td>
		<td><label for="exampleFormControlInput1">Scale</label>
		<?php //echo $row['doa']; ?></td>
	</tr>
	</div>
  
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">6</label></td>
		<td><label for="exampleFormControlInput1"></label>Date of  Appointment to Service:</td>
		<td><?php echo $row['doa']; ?></td>
	</tr>
	</div>
  
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">7</label></td>
		<td><label for="exampleFormControlInput1">Date of Continious employement to the Present Grade</label></td>
		<td><?php echo $row['docepg']; ?></td>
	</tr>
	</div>
  
	<div class="form-group">
	<tr>
		<td width="50px"><label for="exampleFormControlInput1">8</label></td>
		<td><label for="exampleFormControlInput1">Whether Permanent / Temporary or Officiating</label></td>
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
   <td><?php echo $row['poepy']; ?></td>
</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">11</label></td>
    <td><label for="exampleFormControlInput1">Whether the employee belongs to Scheduled Caste/Scheduled Tribe</label></td>
    <td><?php echo $row['isScheduleCaste']; ?></td>
	</tr>
  </div>
  </tbody>
  </table>
 <a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a>
<button class="btn btn-info next" style="float:right;">Next</button>
</div>
 <div id="tab2" class=" tab-pane fade"><br>
<table class="table table-bordered">
<h3 style="text-align:center "> Part-II Self Appraisal </h3>
<thead>


</thead>
<tbody>

   
<tr>
<td ><label for="exampleFormControlInput1">1</label></td>
<td><label for="exampleFormControlInput1">Brief description of duties</label></td>
<td><?php echo $row['1']; ?></td>
</tr>

<tr>
<td ><label for="exampleFormControlInput1">2</label></td>
<td><label for="exampleFormControlInput1">Brief resume of the work done by you during the year /period from  <?php echo $ayear ?><br>
   bringing out any special acheivements during the year/period. In the event<br> of shortfall in achievement , furnished reasons. (The resume is to be <br>furnished within the space provided , limited to 100 words and is required to be signed) </label> </td>
<td><?php echo $row['2']; ?><br></td>
</tr>


</tbody>
</table>


 <button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab3" class=" tab-pane fade"><br>
<table class="table table-bordered">
<thead>
<th style="text-align:center " colspan="3"><h2>part-III Assesement by the reporting officer</h2></th>
</thead>
<tbody>
  
<tr>
<td colspan="3"><label for="exampleFormControlInput1">1</label>
<label for="exampleFormControlInput1">Does the reporting officer agree with the statement made in part II ? If not, the extent of agreement and reasons therefor? (wherever applicable)</label></td>
</tr>

<tr>
<td colspan="3"><label for="exampleFormControlInput1">2</label>
<label for="exampleFormControlInput1">character and habits to include comments on :- </label> <br></td>
</tr>

<tr>
<td ><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Integrity(To be filled onky in those cases in which section II is not required to mentained)</label></td>
			<td><select required class="form-control" id="2a" name="2a"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Tact & Temper</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2b" id=" 2b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Conduct</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2c"
 id="2c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">attendance</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2d" id="2d"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">Physical fitness for strenuous work</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2e" id="2e"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label>
<label for="exampleFormControlInput1">Departmental abilities (Merits & Demerits) to includ comments on : </label> <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Initiative and direction</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3a" id="3a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">General intelligence</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3b" id="3b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Leenness/Promptness and efficiency</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3c" id="3c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Power to control others</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name=" 3d" id="3d"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">organising/supervising ability</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3e" id="3e"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Capacity for hardwork</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3f" id="3f"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(g)</label>
<label for="exampleFormControlInput1">Amenability to discipline</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3g" id="3g"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(h)</label>
<label for="exampleFormControlInput1">Safety consciousness : </label> <br></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3h" id="3h"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">i)</label>
<label for="exampleFormControlInput1">Knowledge of safe working rules : </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3hi" id="3hi"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">ii)</label>
<label for="exampleFormControlInput1">Whether he disregards saftey in train operations for short term gains ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3hii" id="3hii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">iii)</label>
<label for="exampleFormControlInput1">whether he excrcises sufficient supervision on the staff and equipment to ensure safety in train working : </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3hiii" id="3hiii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label>
<label for="exampleFormControlInput1">Qualities of leadership</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3i" id="3i"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(j)</label>
<label for="exampleFormControlInput1">Communication skill including remarks on commendable work done in raj Bhasha</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3j" id="3j"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label>
<label for="exampleFormControlInput1">Special aptitude or qualification</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name=" 4" id=" 4"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label>
<label for="exampleFormControlInput1">If any for outdoor work or posting to a particular area</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="5" id="5"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label>
<label for="exampleFormControlInput1">Reliability</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6" id="6"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">7</label>
<label for="exampleFormControlInput1">Relations with others</label></td>
<td><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Those above</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="7a" id="7a "><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Those below</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="7b" id="7b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">The public (if his duties entail his coming into contact with public/railway users)</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name=" 7c" id=" 7c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">8</label>
<label for="exampleFormControlInput1">Power of Drafting</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="8" id="8"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">9</label>
<label for="exampleFormControlInput1">Knowledge of Rules, Regulations & Procedure</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="9" id="9"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">10</label>
<label for="exampleFormControlInput1">Ability to conduct enquiries, gift evidence and prepare report(for INSPECTORS only)</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="10" id="10"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">11</label>
<label for="exampleFormControlInput1">IN CASE OF STENOGRAPHERS/STENO-TYPIST/TYPISTS</label></td>
<td><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Accuracy</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11a" id="11a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Speed</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11b" id="11b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Neatness of execution</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11c" id="11c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Trustworthyness in confidential and secret matters.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11d" id="11d"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">12</label>
<label for="exampleFormControlInput1">IN CASE OF DRAWING OFFICE STAFF <br> <label> whether the employee can design/is a neat tracer/Draftsman/is an accurate calculator<label></label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="12" id="12"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">13</label>
<label for="exampleFormControlInput1">IN CASE OF MINISTERIAL STAFF ONLY </label>  <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Is his/her hand writing neat ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13a" id="13a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Does he/she mentais his/her office files neatly ?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13b" id="13b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Does he/she mentain his/her rule books,codes,Diary and Reminder Memo book etc. ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13c" id="13c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Does he/she promptly produce papers when required ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13d" id="13d"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">Is his/her disposal prompt ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13e" id="13e"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Is he/she capable of putting up papers independently ?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13f" id="13f"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">14</label>
<label for="exampleFormControlInput1">IN CASE OF WORKSHOP STAFF AND TECHNICAL FIELD STAFF LIKE EBGINEER/SHOP SUPDTT.DY SHOP SUPDIT./BRIDGE INSPECTORS, ETC. ONLY  </label>  <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Technical abilities</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="14a" id="14a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">15</label>
<label for="exampleFormControlInput1">Has his/her work been satisfactory ? If not in what respect he/she has failed ?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="15" id="15"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">16</label>
<label for="exampleFormControlInput1">whether the employee was booked for the prscribed refresher course. if so ;- </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="16" id="16"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">whether he or she attended the refresher course on being release and </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name=" 16a" id="16a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">whether he or she passed/failed in the said refresher course ?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="16b" id="16b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">whether he or she is fit for posting as trainer in training institute ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="16c" id="16c "><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">17</label>
<label for="exampleFormControlInput1">Has the employee been reprimanded for in sifferent work or for other causes during  the period under report ? If so, Please give brief particulars </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="17" id="17"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">18</label>
<label for="exampleFormControlInput1">Has the employee done any outstanding or notable work meriting commendation ? If so, Please give brief particulars.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="18" id="18"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">19</label>
<label for="exampleFormControlInput1">Gradings</label></td>
<td>  <select name="19" id="19">
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select> </td>
<br>
</tr>
</tbody>
</table>
<table>
<tbody style="float:right">
<tr>
<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="signReportOfficer" id="signReportOfficer "><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><input type="text" readonly  name="name" id="name" value="<?php echo $fname;  ?>"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Designation</label></td>
<td><input type="text" readonly  name="designation" id="designation" value="<?php echo $designation;  ?>"></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><input required type="text" readonly name="dateReport" id="dateReport"value="<?php
			$dt = new DateTime();
			echo $dt->format('Y-m-d');
			?>"></td>
</tr>


</tbody>
</table>

<button class="btn btn-info previous " style="float:left;">Previous</button>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" id="submit">Save</button>
		
		</form>
		</div>

		</div>
		</div>
		
</body>
</html>

