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
	$b2 = $_POST['2b'];
	$c2 = $_POST['2c'];
	$integrity1 = $_POST['integrity1'];		
	$di2= $_POST['2di'];
	$dii2= $_POST['2dii'];
	$e2 = $_POST['2e'];
	$f2 = $_POST['2f'];
	$s3 = $_POST['3'];
	$a3 = $_POST['3a']; 
	$b3	= $_POST['3b'];
	$c3 = $_POST['3c']; 
	$d3	= $_POST['3d'];
	$di3 = $_POST['3di'];
	$dii3 = $_POST['3dii'];
	$diii3 = $_POST['3diii'];	
	$div3 = $_POST['3div'];
	$e3 = $_POST['3e'];
	$f3 = $_POST['3f'];
	$fi3 = $_POST['3fi'];
	$fii3 = $_POST['3fii'];
	$fiii3 = $_POST['3fiii'];	
	$g3 = $_POST['3g'];
	$h3= $_POST['3h'];
	$i3 = $_POST['3i'];
	$a4= $_POST['4'];
	$a5 = $_POST['5'];
	$s6= $_POST['6'];
	$a6 = $_POST['6a'];
	$b6 = $_POST['6b'];
	$a7= $_POST['7'];
	$a8= $_POST['8'];
	$a9= $_POST['9'];
	$signReportOfficer= $_POST['signReportOfficer'];
	$name = $_POST['name'];
	$designation= $_POST['designation'];
	$dateReport= $_POST['dateReport'];
	
	
	$query1 = 
	"INSERT INTO `reporting_anx_iv`( `ayear`, `2a`, `2b`, `2c`, `integrity1`, `2di`, `2dii`, `2e`, `2f`, `3`, `3a`, `3b`, `3c`, `3d`, `3di`, `3dii`, `3diii`, `3div`, `3e`, `3f`, `3fi`, `3fii`, `3fiii`, `3g`, `3h`, `3i`, `4`, `5`, `6`, `6a`, `6b`, `7`, `8`, `9`, `SignReportOfficer`, `name`, `designation`, `dateReport`, `createdDate`, `uid`) VALUES ('$ayear','$a2','$b2 ','$c2','$integrity1','$di2','$dii2','	$e2','$f2 ','$s3','$a3 ','$b3','$c3','$d3','$di3','$dii3','$diii3','$div3','$e3','$f3 ','$fi3','$fii3','$fiii3','$g3','$h3','$i3','$a4','$a5','$s6','$a6','$b6','$a7','$a8','$a9','$signReportOfficer','$name ','$designation','$dateReport', now(), '$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":2a",$a2, PDO::PARAM_STR);	
		$stmt->bindParam(":2b",$b2, PDO::PARAM_STR);
		$stmt->bindParam(":2c", $c2, PDO::PARAM_STR);
		$stmt->bindParam(":integrity1", $integrity1, PDO::PARAM_STR);		
		$stmt->bindParam(":2di",$di2, PDO::PARAM_STR);
		$stmt->bindParam(":2dii",$dii2, PDO::PARAM_STR);
		$stmt->bindParam(":2e",$e2, PDO::PARAM_STR);
		$stmt->bindParam(":2f",$f2, PDO::PARAM_STR);
		$stmt->bindParam(":3", $s3, PDO::PARAM_STR);
		$stmt->bindParam(":3a", $a3, PDO::PARAM_STR);
		$stmt->bindParam(":3b",$b3, PDO::PARAM_STR);
		$stmt->bindParam(":3c", $c3, PDO::PARAM_STR);
		$stmt->bindParam(":3d", $d3, PDO::PARAM_STR);
		$stmt->bindParam(":3di",$di3, PDO::PARAM_STR);	
		$stmt->bindParam(":3dii",$dii3, PDO::PARAM_STR);
		$stmt->bindParam(":3diii", $diii3, PDO::PARAM_STR);
		$stmt->bindParam(":3div",$div3, PDO::PARAM_STR);
		$stmt->bindParam(":3e",$e3, PDO::PARAM_STR);
		$stmt->bindParam(":3f",$f3, PDO::PARAM_STR);
		$stmt->bindParam(":3fi",$fi3, PDO::PARAM_STR);	
		$stmt->bindParam(":3fii",$fii3, PDO::PARAM_STR);
		$stmt->bindParam(":3fiii", $fiii3, PDO::PARAM_STR);
		$stmt->bindParam(":3g",$g3, PDO::PARAM_STR);
		$stmt->bindParam(":3h",$h3, PDO::PARAM_STR);
		$stmt->bindParam(":3i",$i3, PDO::PARAM_STR);
		$stmt->bindParam(":4",$a4, PDO::PARAM_STR);
		$stmt->bindParam(":5",$a5, PDO::PARAM_STR);
		$stmt->bindParam(":6",$s6, PDO::PARAM_STR);
		$stmt->bindParam(":6a",$a6, PDO::PARAM_STR);
		$stmt->bindParam(":6b",$b6, PDO::PARAM_STR);
		$stmt->bindParam(":7",$a7, PDO::PARAM_STR);
		$stmt->bindParam(":8",$a8, PDO::PARAM_STR);
		$stmt->bindParam(":9",$a9, PDO::PARAM_STR);
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
	$query = $sql = "select * from user1 u1 INNER JOIN self_anx_iv r on u1.uid=r.uid WHERE u1.uid = $uid AND r.ayear=$ayear";
		
			
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
    if (document.getElementById("2c").value == "doubt") {
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
	
	<a type="button" style="float:left;" href="viewlist.php" class="btn btn-info">Back</a><br /><br /><br />
    <form name="Anx-1" method="post">
    <h4 style="text-align:center" >CONFIDENTIAL REPORT YEAR ENDING 31-3</h4><br>

    <h4 style="text-align:center">Confidential Report for Group 'C'Staff including Workshop Staff (except PWIs,APWIs Signal Inspectors Asstt.Signal Inspectors and Teacher/Instructors)for the year ending 31-3 <?php echo $ayear; ?>"<div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>"></div>
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
	<td><label for="exampleFormControlInput1">Name of School/Institution:</label>
	<?php //echo $row['']; ?></td>
	</tr>
	<tr>
		<td colspan="2"><label for="exampleFormControlInput1">Department:</label>
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
    <td><label for="exampleFormControlInput1">Whether Permanent / Temporary or Officiating</label></td>
    <td><?php echo $row['P/T']; ?></td>
	</tr>
 </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">9</label></td>
    <td><label for="exampleFormControlInput1">Education & Technical Qualification</label></td>
    <td><?php echo $row['e_professional']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">a</label></td>
    <td><label for="exampleFormControlInput1">Professional</label></td>
    <td><?php echo $row['e_professional']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">b</label></td>
    <td><label for="exampleFormControlInput1"> Technical</label></td>
    <td><?php echo $row['e_technical']; ?></td>
	</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">c</label></td>
    <td><label for="exampleFormControlInput1">Special</label></td>
    <td><?php echo $row['e_special']; ?></td>
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
    <td><label for="exampleFormControlInput1">Actual duty of which employee(subject & Classes taught)</label></td>
       <td><?php echo $row['Aduty']; ?></td>
</tr>
  </div>
  <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">12</label></td>
    <td><label for="exampleFormControlInput1">Whether the employee belongs to Scheduled Caste/Scheduled Tribe</label></td>
    <td><?php echo $row['isScheduleCaste']; ?></td>
	</tr>
  </div>
  </tbody>
  </table>
 <a type="button" style="float:left;" href="Self.php" class="btn btn-info">Back</a>
<button class="btn btn-info next" style="float:right;">Next</button>
</div>
 <div id="tab2" class=" tab-pane fade"><br>

<table class="table table-bordered">
<h3> Part-II Self Appraisal </h3>
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
    <td><?php echo $row['2']; ?></td>
</tr>


</tbody>
</table>
<a type="button" style="float:left;" href="Self.php" class="btn btn-info">Back</a>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab3" class=" tab-pane fade"><br>
<table class="table table-bordered">
<thead>
<th colspan="3"><h2>part-III Assesement by the reporting officer</h2></th>
</thead>
<tbody>


   <form name="apar1800" method="post">
<tr>

<td colspan="3"><label for="exampleFormControlInput1">1</label>
<label for="exampleFormControlInput1">Does the reporting officer agree with the statement made in part II ? If not, the extent of agreement and reasons therefor? (wherever applicable)</label></td>
</tr>
<tr>
<td colspan="3"><label for="exampleFormControlInput1">2</label>
<label for="exampleFormControlInput1">character and habits </label> <br></td>
</tr>
<tr>
<td ><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Moral Character</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2a" id="2a"><br></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Relations with fellow teachers</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2b" id="2b"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Integrity</label></td>
<td><select required class="form-control" id="2c" name="2c"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="integrity1" id="integrity1"></textarea>
			</td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(d) (i)</label>
<label for="exampleFormControlInput1">Regularity & Punctuality</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2di" id="2di"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Leave taken during the scholl session in the year</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2dii" id="2dii"><br></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">Health</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2e" id="2e"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Whether he/she gets good example in (a) neatness (b) cleanliness & (c) Obedience of orders</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="2f" id="2f"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label>
<label for="exampleFormControlInput1">Departmental abilities </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3" id="3"><br></td>

</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Initiative </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3a" id="3a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Intelligence</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3b" id="3b"><br></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Keenness/Promptness and efficiency</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3c" id="3c"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Profeciency in day-to-day teaching</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3d" id="3d"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label>
<label for="exampleFormControlInput1">Coomunication skill including remark on commendable work done in Raj Bhasha </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3di" id="3di"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Power of expression</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3dii" id="3dii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iii)</label>
<label for="exampleFormControlInput1">Supervision of written work of scholars</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3diii" id="3diii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iv)</label>
<label for="exampleFormControlInput1">Maintenence of records</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3div" id="3div"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">organising ability</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3e" id="3e"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Ability to maintain discipline</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3f" id="3f"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label>
<label for="exampleFormControlInput1">In the class</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3fi" id="3fi"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Outside the class</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3fii" id="3fii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iii)</label>
<label for="exampleFormControlInput1">Control of servants</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3fiii" id="3fiii"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(g)</label>
<label for="exampleFormControlInput1">Proficiency in educating the backward students of the class</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3g" id="3g"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(h)</label>
<label for="exampleFormControlInput1">Examination results of the subjects taught by the teacher in different classes </label> </td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3h" id="3h"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">i)</label>
<label for="exampleFormControlInput1">Qualities of leadership </label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="3i" id="3i"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label>
<label for="exampleFormControlInput1">Physical disability,If any, for outdoor work or posting to a particular area</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="4" id="4"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label>
<label for="exampleFormControlInput1">Aptitude for developing (i)Character (ii) Sportsmanship & developing extra curricular activities such as (a) Games & Sports (b) Music (c) Debating socities 9d) Managing clubs etc. amongst the students</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="5" id="5"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label>
<label for="exampleFormControlInput1">Whether the teacher was booked for the prescribed rfresher course, if so</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6" id="6"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Whether he/she attended the course on being released; and</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6a" id="6a"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Whether he/she passed/failed in the said course</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="6b" id="6b"><br></td>
<tr>

<tr>
<td><label for="exampleFormControlInput1">7</label>
<label for="exampleFormControlInput1">Has he/she been reprimanded for indifferent work or for any other causes during the period under report ? If so, give brief particulars</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="7" id="7"><br></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">8</label>
<label for="exampleFormControlInput1">Has he/se done any outstanding or notable work meriting commendation? If so, give brief particulars</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="8" id="8"><br></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">9</label>
<label for="exampleFormControlInput1">Gradings</label></td>
<td>  <select name="9">
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select>
</td>
<br>
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



