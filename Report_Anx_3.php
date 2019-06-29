<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apar";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) 
{
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
	$gi3 = $_POST['3gi'];
	$h3= $_POST['3h'];
	$hi3 = $_POST['3hi'];
	$hii3 = $_POST['3hii'];
	$hiii3 = $_POST['3hiii'];
	$i3 = $_POST['3i'];
	$j3 = $_POST['3j'];
	$a4= $_POST['4'];
	$a5 = $_POST['5'];
	$a6= $_POST['6'];
	$a7= $_POST['7'];
	$a8= $_POST['8'];
	$a9= $_POST['9'];
	$a10= $_POST['10'];
	$a11 = $_POST['11'];
	$a12 = $_POST['12'];
	$a13 = $_POST['13'];
	$a14 = $_POST['14'];
	$a15= $_POST['15'];
	$a16= $_POST['16'];
	$a17 = $_POST['17'];
	$a18= $_POST['18'];
	$a19= $_POST['19'];
	$a20= $_POST['20a'];
	$b20= $_POST['20b'];
	$a21 = $_POST['21'];
	$a22= $_POST['22a'];
	$b22= $_POST['22b'];
	$a23= $_POST['23'];
	$a24= $_POST['24'];
	$a25= $_POST['25'];
	$a26= $_POST['26'];
	$a27= $_POST['27'];
	$a28= $_POST['28'];
	$a29= $_POST['29'];
	$a30= $_POST['30'];
	$a31= $_POST['31'];
	$s32= $_POST['32'];
	$a32= $_POST['32a'];
	$b32= $_POST['32b'];
	$c32= $_POST['32c'];
	$a33= $_POST['33'];
	$a34= $_POST['34'];
	$a35= $_POST['35'];
	$a36= $_POST['36'];
	$signReportOfficer= $_POST['signReportOfficer'];
	$name = $_POST['name'];
	$designation= $_POST['designation'];
	$dateReport= $_POST['dateReport'];
	
	
	$query1 = 
	"INSERT INTO `reporting_anx_iii`( `ayear`,`2a`, `integrity1`, `2b`, `2c`, `2d`, `2e`, `3a`, `3b`, `3c`, `3d`, `3e`, `3f`, `3g`,`3gi`, `3h`, `3hi`, `3hii`, `3hiii`, `3i`, `3j`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20a`, `20b`, `21`, `22a`, `22b`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `32a`, `32b`, `32c`, `33`, `34`, `35`, `36`, `SignReportOfficer`, `name`, `designation`, `dateReport`, `createdDate`, `uid`) VALUES ('$ayear',   '$a2','$integrity1','$b2','$c2','$d2','$e2','$a3','$b3','$c3','$d3','$e3','$f3','$g3','$gi3','$h3','$hi3','$hii3',       '$hiii3','$i3','$j3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$b20','$a21','$a22','$b22','$a23','$a24','$a25','$a26','$a27','$a28','$a29' ,'$a30' ,'$a31' ,'$s32','$a32','$b32','$c32','$a33','$a34','$a35','$a36','$signReportOfficer', '$name', '$designation', '$dateReport', now(), '$uid')";
		
	
		
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
		$stmt->bindParam(":3gi",$gi3, PDO::PARAM_STR);
		$stmt->bindParam(":3h",$h3, PDO::PARAM_STR);
		$stmt->bindParam(":3hi",$hi3, PDO::PARAM_STR);
		$stmt->bindParam(":3hii",$hii3, PDO::PARAM_STR);
		$stmt->bindParam(":3hiii",$hiii3, PDO::PARAM_STR);
		$stmt->bindParam(":3i",$i3, PDO::PARAM_STR);
		$stmt->bindParam(":3j",$j3, PDO::PARAM_STR);
		$stmt->bindParam(":4",$a4, PDO::PARAM_STR);
		$stmt->bindParam(":5",$a5, PDO::PARAM_STR);
		$stmt->bindParam(":6",$a6, PDO::PARAM_STR);
		$stmt->bindParam(":7",$a7, PDO::PARAM_STR);
		$stmt->bindParam(":8",$a8, PDO::PARAM_STR);
		$stmt->bindParam(":9",$a9, PDO::PARAM_STR);
		$stmt->bindParam(":10",$a10, PDO::PARAM_STR);
		$stmt->bindParam(":11",$a11, PDO::PARAM_STR);
		$stmt->bindParam(":12",$a12, PDO::PARAM_STR);
		$stmt->bindParam(":13",$a13, PDO::PARAM_STR);
		$stmt->bindParam(":14",$a14 , PDO::PARAM_STR);
		$stmt->bindParam(":15", $a15, PDO::PARAM_STR);
		$stmt->bindParam(":16",$a16, PDO::PARAM_STR);
		$stmt->bindParam(":17",$a17 , PDO::PARAM_STR);
		$stmt->bindParam(":18",$a18, PDO::PARAM_STR);
		$stmt->bindParam(":19",$a19, PDO::PARAM_STR);
		$stmt->bindParam(":20a",$a20 , PDO::PARAM_STR);
		$stmt->bindParam(":20b",$b20 , PDO::PARAM_STR);
		$stmt->bindParam(":21",$a21, PDO::PARAM_STR);
		$stmt->bindParam(":22a",$a22, PDO::PARAM_STR);
		$stmt->bindParam(":22b",$b22 , PDO::PARAM_STR);
		$stmt->bindParam(":23",$a23 , PDO::PARAM_STR);
		$stmt->bindParam(":24",$a24, PDO::PARAM_STR);
		$stmt->bindParam(":25",$a25, PDO::PARAM_STR);
		$stmt->bindParam(":26",$a26, PDO::PARAM_STR);
		$stmt->bindParam(":27",$a27, PDO::PARAM_STR);
		$stmt->bindParam(":28",$a28, PDO::PARAM_STR);
		$stmt->bindParam(":29",$a29, PDO::PARAM_STR);
		$stmt->bindParam(":30",$a30, PDO::PARAM_STR);
		$stmt->bindParam(":31",$a31, PDO::PARAM_STR);
		$stmt->bindParam(":32",$s32 , PDO::PARAM_STR);
		$stmt->bindParam(":32a",$a32 , PDO::PARAM_STR);
		$stmt->bindParam(":32b", $b32, PDO::PARAM_STR);
		$stmt->bindParam(":32c",$c32, PDO::PARAM_STR);
		$stmt->bindParam(":33",$a33 , PDO::PARAM_STR);
		$stmt->bindParam(":34",$a34, PDO::PARAM_STR);
		$stmt->bindParam(":35",$a35, PDO::PARAM_STR);
		$stmt->bindParam(":36",$a36, PDO::PARAM_STR);
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
	$query = $sql = "select * from user1 u1 INNER JOIN self_anx_iii r on u1.uid=r.uid WHERE u1.uid = $uid AND r.ayear=$ayear";
		
			
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

		<title> APAR </title>
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
    <h4 style="text-align:center">CONFIDENTIAL REPORT YEAR ENDING 31-3</h4></td>

    <h4 style="text-align:center">Confidential Report for Group 'C'Staff( PWIs,APWIs Signal Inspectors<br>& Asstt.Signal Inspectors )for the year ending 31-3 <?php echo $ayear; ?>"<div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>"></div>
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
 <a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a>
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
<td><label for="exampleFormControlInput1"> Brief resume of the work done by you during yhe year/period from <?php echo $ayear ?><br> bringing out any special achievements during the year/period. in the event of short fall in achievement,furnish reasons.(The resume is to be furnished within the space provided, limited to 100 words and is required to be signed). </label> </td>

 <td><?php echo $row['2']; ?></td>
</tr>



</tbody>
</table>
<button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab3" class=" tab-pane fade"><br>
<table class="table table-bordered">
<tbody>
<h2>part-III Assessment by the reporting officer</h2>
<tr>  
<td><label for="exampleFormControlInput1">1</label></td>
<td><label for="exampleFormControlInput1">Does the reporting officer agree with the statement made in part II ? If not, the extent of disagreement and reasons therefor?(wherever applicable)</label></td>
<td></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">2</label></td>
<td><label for="exampleFormControlInput1">Character and habits to include comments on:-</label></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Integrity</label></td>
<td><select required class="form-control" id="2a" name="2a"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">tact & temper</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2b" id="2b"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">conduct</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2c" id="2c"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">attendance</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2d" id="2d"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label></td>
<td><label for="exampleFormControlInput1">Physical fitness for strenuous work. </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2e" id="2e"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label></td>
<td><label for="exampleFormControlInput1">Department abilities(merits & demerits)to include comments on:</label></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Initiative and direction</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3a" id="3a"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">General Intelligence</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3b" id="3b"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">keenness/promptness and efficiency</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3c" id="3c"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">Power to control other</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3d" id="3d"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label></td>
<td><label for="exampleFormControlInput1">Organising/supervising ability</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3e" id="3e"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label></td>
<td><label for="exampleFormControlInput1">Amenability to discipline</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3f" id="3f"></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">(g)</label></td>
<td><label for="exampleFormControlInput1">amenability to discipline</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3g" id="3g"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(g)</label></td>
<td><label for="exampleFormControlInput1">knowledge of rules,Regulations & procedure</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3gi" id="3gi"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(h)</label></td>
<td><label for="exampleFormControlInput1">safety Consciousness</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3h" id="3h"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label></td>
<td><label for="exampleFormControlInput1">Knowledge of safe working rules:</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name=" 3hi" id="3hi"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label></td>
<td><label for="exampleFormControlInput1">Whether he disregards safety in train operation for short term gains:</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3hii" id="3hii"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(iii)</label></td>
<td><label for="exampleFormControlInput1">Whether he exercise sufficient supervision on the staff and equipment to ensure safety in train working:</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3hiii" id="3hiii"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(i)</label></td>
<td><label for="exampleFormControlInput1">Qualities of leadership</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3i" id="3i"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(j)</label></td>
<td><label for="exampleFormControlInput1">Communication skill including  remarks on commendable work done in raj bhasha</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3j" id="3j"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">4</label></td>
<td><label for="exampleFormControlInput1">special aptitude or qualification</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="4" id="4"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">5</label></td>
<td><label for="exampleFormControlInput1">Physical disability,if any for outdoor work or posting to a particular area</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="5" id="5"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">6</label></td>
<td><label for="exampleFormControlInput1">reliability</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6" id="6"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">7</label></td>
<td><label for="exampleFormControlInput1">Relations with other</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="7" id="7"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">8</label></td>
<td><label for="exampleFormControlInput1">Has he/she effected any improvement during the year?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="8" id="8"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">9</label></td>
<td><label for="exampleFormControlInput1">Doeshe/she keep his/her stock of material i an orderly manner? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="9" id="9"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">10</label></td>
<td><label for="exampleFormControlInput1">Are his/her tools & pant in goods order and kept in repair ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="10" id="10"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">11</label></td>
<td><label for="exampleFormControlInput1">supervise his/her labour properly & is he/she economical with it? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="11" id="11"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">12</label></td>
<td><label for="exampleFormControlInput1">i has any reliaying, re-sleepering or renewals been done, & if so, were they carried out carefully, satisfactorily & economically ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="12" id="12"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">13</label></td>
<td><label for="exampleFormControlInput1">I he/she methodical & careful on his/her work specially as to details ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="13" id="13"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">14</label></td>
<td><label for="exampleFormControlInput1">Does he she return released & other surplus materials promptly to stores? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="14" id="14"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">15</label></td>
<td><label for="exampleFormControlInput1">Does he she arrange for the safe custody and proper storage of materials against unnecessary deterioration from weather or any other cause ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="15" id="15"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">16</label></td>
<td><label for="exampleFormControlInput1">what was the date of last annual inspection of his/her beat & what was the impression as a result of this inspection?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="16" id="16"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">17</label></td>
<td><label for="exampleFormControlInput1">When was his/her section last tested with the hallade recorder and what was the general result as compared with the previous test?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="17" id="17"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">18</label></td>
<td><label for="exampleFormControlInput1">Are the bridges clean and tidy, & kept in good order & free from weeds & dirt ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="18" id="18"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">19*</label></td>
<td><label for="exampleFormControlInput1">are the approaches of bridge well kept up & ballasted? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="19" id="19"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">20*</label>
<label for="exampleFormControlInput1">(A)</label></td>
<td><label for="exampleFormControlInput1">Has he/she carefully renewed timbers & worn out fittings of bridges during the year?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="20a" id="20a"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Are his/her level crossing and their approaches maintained well?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="20b" id="20b"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">21*</label></td>
<td><label for="exampleFormControlInput1">Have any speed restrictions been imposed on his/her length on account of defective maintainance of permanent way or other cause under his/her control. </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="21" id="21"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">22</label>
<label for="exampleFormControlInput1">(A)</label></td>
<td><label for="exampleFormControlInput1">Is he/she prompt and careful in correspondence?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="22a" id="22a"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Does he/she maintain creep and other registers regularly with the requisite data and observations.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="22b" id="22b"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">23</label></td>
<td><label for="exampleFormControlInput1">Are his/her store accounts carefully kept? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="23" id="23"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">24</label></td>
<td><label for="exampleFormControlInput1">Does he/she submit his/her returns in time?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="24" id="24"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">25</label></td>
<td><label for="exampleFormControlInput1">Are his/her office and godown tidy and in good order?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="25" id="25"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">26</label></td>
<td><label for="exampleFormControlInput1">Are his/her muster rolls and gang charts properly entered and well kept?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="26" id="26"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">27</label></td>
<td><label for="exampleFormControlInput1">Does he/she turn out promptly on emergencies?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="27" id="27"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">28</label></td>
<td><label for="exampleFormControlInput1">Are his/her demands for temporary extra labour reasonable?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="28" id="28"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">29</label></td>
<td><label for="exampleFormControlInput1">Is his/her technical knowledge such as would be expected from one of his rank?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="29" id="29"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">30</label></td>
<td><label for="exampleFormControlInput1">does he/she takes interest in the welfare of staff ? </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="30" id="30"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">31</label></td>
<td><label for="exampleFormControlInput1">Has his/her work been satisfactory? If not, in what respect he/she has failed?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="31" id="31"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">32</label></td>
<td><label for="exampleFormControlInput1">whether the employee was booked for the prescribed refresher course?if so.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="32" id="32"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(A)</label></td>
<td><label for="exampleFormControlInput1">Whether he/she attended the refresher course on being released,and</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="32a" id="32a"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Whether he/she passed/failed in the said refresher course on being released, and</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="32b" id="32b"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">Whether he/she is fit for posting as trainer in training institute?</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="32c" id="32c"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">33</label></td>
<td><label for="exampleFormControlInput1">his/her relation with the staff working under his/her supervision and other fellow employees.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="33" id="33"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">34</label></td>
<td><label for="exampleFormControlInput1">Has the employee been reprimanded for indifferent work or for other causes during the period under review ? if so, please give brief perticulars.  </label></td>
<td><input required type="text" classbeen reprimanded for indifferent work or ="form-control" id="exampleFormControlInput1" name="34" id="34"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">35</label></td>
<td><label for="exampleFormControlInput1">Has the employee done any outstanding work meriting commendation ? If so ,please give brief particulars.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="35" id="35"></td>
</tr>

<tr><td><label for="exampleFormControlInput1">36</label></td>
<td><label for="exampleFormControlInput1">Grading:-</label></td>
  <td><select name="36">
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>

<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="signReportOfficer" id="signReportOfficer"></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><input type="text" readonly  name="name" id="name" value="<?php echo $fname;  ?>"></td>
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
<table>
<button class="btn btn-info previous " style="float:left;">Previous</button>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		</form>
		</div>

		</div>
		</div>
</body>
</html>
