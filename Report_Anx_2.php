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
	$i3 = $_POST['3i'];
	$a4= $_POST['4'];
	$a5 = $_POST['5'];
	$a6= $_POST['6'];
	$a7= $_POST['7'];
	$a8= $_POST['8'];
	$a9= $_POST['9'];
	$a10= $_POST['10a'];
	$b10 = $_POST['10b'];
	$c10 = $_POST['10c'];
	$a11 = $_POST['11'];
	$a12 = $_POST['12'];
	$a13 = $_POST['13a'];
	$b13 = $_POST['13b'];
	$c13 = $_POST['13c'];
	$a14 = $_POST['14'];
	$a15= $_POST['15a'];
	$b15= $_POST['15b'];
	$a16= $_POST['16'];
	$a17 = $_POST['17'];
	$a18= $_POST['18'];
	$a19= $_POST['19'];
	$a20= $_POST['20'];
	$a21 = $_POST['21'];
	$a22= $_POST['22'];
	$a23= $_POST['23'];
	$a24= $_POST['24a'];
	$b24 = $_POST['24b'];
	$c24= $_POST['24c'];
	$a25= $_POST['25'];
	$a26= $_POST['26'];
	$a27= $_POST['27'];
	$signReportOfficer= $_POST['signReportOfficer'];
	$name = $_POST['name'];
	$designation= $_POST['designation'];
	$dateReport= $_POST['dateReport'];

	
	$query1 = 
	"INSERT INTO `reporting_anx_ii`( `ayear`,`2a`,`integrity1`, `2b`, `2c`, `2d`, `2e`, `3a`, `3b`, `3c`, `3d`, `3e`, `3f`, `3g`, `3h`, `3i`, `4`, `5`, `6`, `7`, `8`, `9`, `10a`, `10b`, `10c`, `11`, `12`, `13a`, `13b`, `13c`, `14`, `15a`, `15b`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`,`24a`, `24b`, `24c`, `25`, `26`, `27`,`signReportOfficer`, `name`, `designation`, `dateReport`, `createdDate`, `uid`) VALUES ('$ayear','$a2','$integrity1','$b2','$c2','$d2','$e2','$a3','$b3','$c3','$d3','$e3','$f3','$g3','$h3','$i3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$b10','$c10','$a11','$a12','$a13','$b13','$c13','$a14','$a15','$b15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$b24','$c24','$a25','$a26','$a27','$signReportOfficer', '$name', '$designation', '$dateReport', now(), '$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid" , $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear" , $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":2a" ,$a2, PDO::PARAM_STR);	
		$stmt->bindParam(":integrity1", $integrity1, PDO::PARAM_STR);
		$stmt->bindParam(":2b" , $b2, PDO::PARAM_STR);
		$stmt->bindParam(":2c" , $c2, PDO::PARAM_STR);
		$stmt->bindParam(":2d" , $d2, PDO::PARAM_STR);
		$stmt->bindParam(":2e" ,$e2, PDO::PARAM_STR);
		$stmt->bindParam(":3a", $a3, PDO::PARAM_STR);
		$stmt->bindParam(":3b",$b3, PDO::PARAM_STR);
		$stmt->bindParam(":3c", $c3, PDO::PARAM_STR);
		$stmt->bindParam(":3d", $d3, PDO::PARAM_STR);
		$stmt->bindParam(":3e",$e3, PDO::PARAM_STR);
		$stmt->bindParam(":3f",$f3, PDO::PARAM_STR);
		$stmt->bindParam(":3g",$g3, PDO::PARAM_STR);
		$stmt->bindParam(":3h",$h3, PDO::PARAM_STR);
		$stmt->bindParam(":3i",$i3, PDO::PARAM_STR);
		$stmt->bindParam(":4",$a4, PDO::PARAM_STR);
		$stmt->bindParam(":5",$a5, PDO::PARAM_STR);
		$stmt->bindParam(":6",$a6, PDO::PARAM_STR);
		$stmt->bindParam(":7",$a7, PDO::PARAM_STR);
		$stmt->bindParam(":8",$a8, PDO::PARAM_STR);
		$stmt->bindParam(":9",$a9, PDO::PARAM_STR);
		$stmt->bindParam(":10a",$a10, PDO::PARAM_STR);
		$stmt->bindParam(":10b",$b10, PDO::PARAM_STR);
		$stmt->bindParam(":10c",$c10, PDO::PARAM_STR);
		$stmt->bindParam(":11",$a11, PDO::PARAM_STR);
		$stmt->bindParam(":12",$a12, PDO::PARAM_STR);
		$stmt->bindParam(":13a",$a13, PDO::PARAM_STR);
		$stmt->bindParam(":13b",$b13, PDO::PARAM_STR);
		$stmt->bindParam(":13c",$c13, PDO::PARAM_STR);
		$stmt->bindParam(":14",$a14 , PDO::PARAM_STR);
		$stmt->bindParam(":15a", $a15, PDO::PARAM_STR);
		$stmt->bindParam(":15b", $b15, PDO::PARAM_STR);
		$stmt->bindParam(":16",$a16, PDO::PARAM_STR);
		$stmt->bindParam(":17",$a17 , PDO::PARAM_STR);
		$stmt->bindParam(":18",$a18, PDO::PARAM_STR);
		$stmt->bindParam(":19",$a19, PDO::PARAM_STR);
		$stmt->bindParam(":20",$a20 , PDO::PARAM_STR);
		$stmt->bindParam(":21",$a21, PDO::PARAM_STR);
		$stmt->bindParam(":22",$a22, PDO::PARAM_STR);
		$stmt->bindParam(":23",$a23 , PDO::PARAM_STR);
		$stmt->bindParam(":24a",$a24, PDO::PARAM_STR);
		$stmt->bindParam(":24b",$b24, PDO::PARAM_STR);
		$stmt->bindParam(":24c",$c24 , PDO::PARAM_STR);
		$stmt->bindParam(":25",$a25, PDO::PARAM_STR);
		$stmt->bindParam(":26",$a26, PDO::PARAM_STR);
		$stmt->bindParam(":27",$a27, PDO::PARAM_STR);
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
	$query = $sql = "select * from user1 u1 INNER JOIN self_anx_ii r on u1.uid=r.uid WHERE u1.uid = $uid AND r.ayear=$ayear";
		
			
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

		<title>  APAR Report Annxure-II </title>
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
	
	<a type="button" style="float:left;" href="viewList.php" class="btn btn-info">Back</a><br /><br /><br />
    <form name="Anx-2" method="post">
    <h4 style="text-align:center ">CONFIDENTIAL REPORT YEAR ENDING 31-3</h4><br>

    <h4 style="text-align:center ">Confidential Report for Group 'C'Staff( PWIs,APWIs Signal Inspectors& Asstt.Signal Inspectors )for the year ending 31-3 <?php echo $ayear; ?><div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>"></div>
	</h4>
	<ul class="nav nav-tabs">
    <li class="nav-item "><a class="nav-link active" href="#tab1" data-toggle="tab">Part-I</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Part-II</a></li>
	 <li class="nav-item"><a class="nav-link"  href="#tab3" data-toggle="tab">Part-III</a></li>
</ul>
  <div class="tab-content">
    <div id="tab1" class=" tab-pane active"><br>
	<table class="table table-bordered">
	<thead>
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
	<input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>">
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
    <td><label for="exampleFormControlInput1">Whether Permanent / Temporary </label></td>
    <td><?php echo $row['P/T']; ?></td>
	</tr>
 </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">9</label></td>
    <td><label for="exampleFormControlInput1">Education,& Technical Qualification</label></td>
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
 <a type="button" style="float:left;" href="viewList.php" class="btn btn-info">Back</a>
<button class="btn btn-info next" style="float:right;">Next</button>
</div>
 <div id="tab2" class=" tab-pane fade"><br>
<table class="table table-bordered">
<h3> Part-II Self Appraisal </h3>
<thead>


</thead>
<tbody>

   
<tr>
<td><label for="exampleFormControlInput1">1</label></td>
<td><label for="exampleFormControlInput1">Brief description of duties</label></td>
<td><?php echo $row['1']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">2</label></td>
<td><label for="exampleFormControlInput1"> Brief resume of the work done by you during yhe year/period from <?php echo $ayear ?><br> bringing out any special achievements during the year/period. in the event of short fall in <br>achievement,furnish reasons.(The resume is to be furnished within the space provided,<br> limited to 100 words and is required to be signed). </label> </td>

<td><?php echo $row['2']; ?></td>
</tr>
</tbody>
</table>


<button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab3" class=" tab-pane fade"><br>

<table class="table table-bordered">
 <div class="container" style="padding-top: 160px">
<h3>Part-III Assessment of the Reporting Officer<h3>
 
   <tbody>

	<tr>
		<td><label for="exampleFormControlInput1">1)</label></td>
		<td colspan="2"><label for="exampleFormControlInput1">Does the Reporting Officer agree with the statement made in PartII ? If not, the extent of disagreement and reasons therefor ?(wherever applicable)</label></td>
	</tr>
	<tr>
		<td><label for="exampleFormControlInput1">2)</label></td>
		<td colspan="2"><label for="exampleFormControlInput1">Character and habits to include comments on: </label></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">a)</label></td>
		<td><label for="exampleFormControlInput1">Integrity </label></td>
		<td><select required class="form-control" id="2a" name="2a"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">Tact & Temper</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2b" id="2b"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">c)</label></td>
		<td><label for="exampleFormControlInput1">Conduct </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2c" id="2c"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">d)</label></td>
		<td><label for="exampleFormControlInput1">Attendance </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2d" id="2d"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">e)</label></td>
		<td><label for="exampleFormControlInput1">Physical fitness for strenuous work</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2e" id="2e"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">3)</label></td>
		<td><label for="exampleFormControlInput1">Departmental abilities (Merits & Demerits) to include comments on :</label></td>
	</tr>		
	
	<tr>
		<td><label for="exampleFormControlInput1">a)</label></td>
		<td><label for="exampleFormControlInput1">Initiative and direction </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3a" id="3a"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">General Intelligence</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3b" id="3b"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">c)</label></td>
		<td><label for="exampleFormControlInput1">Keenness/ promptness and efficiency</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3c" id="3c"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">d)</label></td>
		<td><label for="exampleFormControlInput1">Power on control other</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3d" id="3d"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">e)</label></td>
		<td><label for="exampleFormControlInput1">Organising/ supervising ability</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3e" id="3e"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">f)</label></td>
		<td><label for="exampleFormControlInput1">Capacity for hardwork</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3f" id="3f"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">g)</label></td>
		<td><label for="exampleFormControlInput1">Amenability to discipline</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3g" id="3g"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">h)</label></td>
		<td><label for="exampleFormControlInput1">Qualities of leadership</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3h" id="3h"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">i)</label></td>
		<td><label for="exampleFormControlInput1">Communication skill including remark on commendable work done in Raj Bhasha</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3i" id=" 3i"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">4)</label></td>
		<td><label for="exampleFormControlInput1">Special attitude or qualification </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="4" id="4"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">5)</label></td>
		<td><label for="exampleFormControlInput1">Physical disability , if any, for outdoor work or posting to a particular area</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="5" id="5"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">6)</label></td>
		<td><label for="exampleFormControlInput1">Is he/she work well and methodically done and close supervision exercised?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6" id="6"></td>
	</tr>	
	
	<tr>
		<td><label for="exampleFormControlInput1">7)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she level and survey accurately and his/her plans accurate and well turned out?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="7" id="7"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">8)</label></td>
		<td><label for="exampleFormControlInput1">Is he/she careful in seeing that the existing buildings and their surroundings in his/her charge are well maintained??</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="8" id="8"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">9)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she bring defects to notice promptly and arrange at once for their rectification ?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="9" id="9"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">10)  a)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she control and supervise his/her labour and arrange it properly?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="10a" id="10a"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">Is he/she able to insist on goods work from contractor?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="10b" id="10b"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">c)</label></td>
		<td><label for="exampleFormControlInput1">Whether his/her demand for temporary extra labour is resonable ?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="10c" id="10c"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">11)</label></td>
		<td><label for="exampleFormControlInput1">Is he/she prompt and carefull in   (i)  Correspondence  ,  (ii)   Submission of his/her returns? </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11" id="11"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">12)</label></td>
		<td><label for="exampleFormControlInput1">Are his/her measurement books properly entered & well kept?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="12" id="12"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">13)  a)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she settle up quickly with contractoretc?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13a" id="13a"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">Are his/her bills promptly made out and submitted?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13b" id="13b"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">c)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she submit in time compliation , drawing and other information for preparing Compilation reports?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13c" id="13c"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">14)</label></td>
		<td><label for="exampleFormControlInput1">Are his/her office and godown tidy and in good order?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="14" id="14"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">15) a)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she arrange for the safe custody and proper storage of materials against unnecessary deterioration from weather or any other cause?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="15a" id="15a"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she maintain proper accounts of issues , receipts release and surplus stores?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="15b" id="15b"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">16)</label></td>
		<td><label for="exampleFormControlInput1">Is his/her technical knowledge such as would be expected from one of his rank?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="16" id="16"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">17)</label></td>
		<td><label for="exampleFormControlInput1">Is his/her materials and tools and plant accountal and issues properly made?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="17" id="17"></td>	
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">18)</label></td>
		<td><label for="exampleFormControlInput1">Is he/she active and hardworking ?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="18" id="18"></td>	
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">19)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she turn out promptly on emergencies?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="19" id="19"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">20)</label></td>
		<td><label for="exampleFormControlInput1">Has he/she been ill during the year ? if so , state in what way and for how long ?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="20" id="20"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">21)</label></td>
		<td><label for="exampleFormControlInput1">Does he/she take an interest in the welfare of his /her staff.</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="21" id="21"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">22)</label></td>
		<td><label for="exampleFormControlInput1">Remarks may be made as to his/her supervision of work. Is his/her brickwork carefully supervised and painting carefully done? Does he/she see that fences, etc. are carefully aligned and levelled, doors and windows carefully fitted, beams properly bedded, painting and white-washing carefully done and all splashes of paint and whitewash removed? When works are completed. does he/she the surrounding are cleaned up and all surplus material & tools- quickly disposed of? </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="22" id="22"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">23)</label></td>
		<td><label for="exampleFormControlInput1">has his/her work been satisfactory ?if not, In what tespect he/she has failed?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="23" id="23"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">24)</label></td>
		<td colspan="2"><label for="exampleFormControlInput1">Whether the employee was booked for the prescribed refresher course?if so</label></td>
	</tr>	
	
	<tr>
		<td><label for="exampleFormControlInput1">a)</label></td>
		<td><label for="exampleFormControlInput1">Whether he/she attended the refresher course on being released , and </label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="24a" id="24a"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">b)</label></td>
		<td><label for="exampleFormControlInput1">Whether he/she passed/failed in the said refresher course?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="24b" id="24b"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">c)</label></td>
		<td><label for="exampleFormControlInput1">Whether he/she is fitt for posting as trainer in training institute?</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="24c" id="24c"></td>
	</tr>
	
	<tr>
		<td><label for="exampleFormControlInput1">25)</label></td>
		<td><label for="exampleFormControlInput1">Has the employee been reprimanded for indifferent work or for other cause during the period under report if so , please give brief particulars</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="25" id="25"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">26)</label></td>
		<td><label for="exampleFormControlInput1">Has the employee done any outstanding work meriting commendations ? If so, please give brief particulars.</label></td>
		<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="26" id="26"></td>
	</tr>

	<tr>
		<td><label for="exampleFormControlInput1">27</label></td>

		<td><label for="exampleFormControlInput1">Gradings</label></td>
		 
		<td><select name="27" id="27">
			<option value="Outstanding">Outstanding</option>
			<option value="Very good">Very good</option>
			<option value="good">Good</option>
			<option value="Average">Average</option>
			<option value="Below average">Below Average</option>
		</select>
		</td>
	</tr>	
	</div>
</tbody>
</table>

<table>
	<tbody>
	<tr>
		<td><label   for="exampleFormControlInput1">Signature of the reporting officer</label></td>
		<td><input required type="text"   class="form-control" id="exampleFormControlInput1" name="signReportOfficer" id="signReportOfficer "></td>
	</tr>
	<tr>
		<td><label style="float:right;" for="exampleFormControlInput1">Name in block letters</label></td>
		<td><input type="text" readonly  name="name" id="name" value="<?php echo $fname;  ?>"></td>
	</tr>
	<tr>
		<td><label style=" float:right" for="exampleFormControlInput1">Designation</label></td>
		<td><input type="text" readonly style="float:right" name="designation" id="designation" value="<?php echo $designation;  ?>"></label></td>
	</tr>
	<tr>
		<td><label style=" float:right" for="exampleFormControlInput1">Date</label></td>
		<td><input required type="text" readonly style="float:right" name="dateReport" id="dateReport"value="<?php
					$dt = new DateTime();
					echo $dt->format('Y-m-d');
					?>"></td>
	</tr>
	

</tbody>
</table>

<button class="btn btn-info previous " style="float:left;">Previous</button>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		</form>
		</div>

		</div>
		</div>
</body>
</html>
