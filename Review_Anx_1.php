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

// $fname=$_COOKIE['fullname'];

echo $ayear;
if (isset($_POST['submit'])) 
{
	$uid=$_POST['uid'];
	$ayear= $_POST['ayear'];
	$a1	= $_POST['1'];
	$a2	= $_POST['2'];
	$a3 = $_POST['3']; 
	$ai3 = $_POST['3ai']; 
	$a4= $_POST['4'];
	$a5 = $_POST['5'];
	$ai5 = $_POST['5ai'];
	$a6= $_POST['6'];
	$ai6= $_POST['6ai'];
	$signReviewOfficer= $_POST['signReviewOfficer'];
	$name = $_POST['name'];
	$designation= $_POST['designation'];
	$placeReview = $_POST['placeReview'];
	$dateReview= $_POST['dateReview'];

	
	$query1 = 
	"INSERT INTO`reviewing_anx_i`(`ayear`,`1`,`2`,`3`,`3ai`,`4`,`5`,`5ai`,`6`,`6ai`,`signReviewOfficer`, `name`, `designationReview`, `placeReview`, `dateReview`, `createdDate`, `uid`) VALUES  ('$ayear','$a1','$a2','$a3','$ai3','$a4','$a5','$ai5','$a6','$ai6','$signReviewOfficer', '$name', '$designation','$placeReview', '$dateReview', now(), '$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":1",$a1, PDO::PARAM_STR);	
		$stmt->bindParam(":2",$a2, PDO::PARAM_STR);	
		$stmt->bindParam(":3", $a3, PDO::PARAM_STR);
		$stmt->bindParam(":3ai", $ai3, PDO::PARAM_STR);
		$stmt->bindParam(":4",$a4, PDO::PARAM_STR);
		$stmt->bindParam(":5",$a5, PDO::PARAM_STR);
		$stmt->bindParam(":5ai",$ai5, PDO::PARAM_STR);
		$stmt->bindParam(":6",$a6, PDO::PARAM_STR);
		$stmt->bindParam(":6ai",$ai6, PDO::PARAM_STR);
		$stmt->bindParam(":signReviewOfficer",$signReviewOfficer, PDO::PARAM_STR);
		$stmt->bindParam(":name",$name, PDO::PARAM_STR);
		$stmt->bindParam(":designation",$designation, PDO::PARAM_STR);
		$stmt->bindParam(":placeReview",$placeReview, PDO::PARAM_STR);
		$stmt->bindParam(":dateReview",$dateReview, PDO::PARAM_STR);
			
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
if (!empty($_GET['uid'])) {
	
	$uid = $_GET['uid'];
	$query = "select * from user1 u1 INNER JOIN self_anx_i r join reporting_anx_i s  on u1.uid=r.uid and u1.uid=s.uid WHERE u1.uid = $uid AND r.ayear = $ayear AND s.ayear = $ayear";
		
			
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
	
	<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a>

    <form name="Anx-1" method="post">
    <h4 style="text-align:center">CONFIDENTIAL REPORT YEAR ENDING 31-3</h4><br>

    <h4 style="text-align:center">Confidential Report for Group 'C'Staff including Workshop Staff (except PWIs,APWIs Signal Inspectors Asstt.Signal Inspectors and Teacher/Instructors)for the year ending 31-3 <?php echo $ayear; ?><div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear" id="ayear"  value=" <?php echo $ayear; ?>"></div>
	</h4>
	<ul class="nav nav-tabs">
    <li class="nav-item "><a class="nav-link active" href="#tab1" data-toggle="tab">Part-I</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Part-II</a></li>
	 <li class="nav-item"><a class="nav-link"  href="#tab3" data-toggle="tab">Part-III</a></li>
	 <li class="nav-item"><a class="nav-link"  href="#tab4" data-toggle="tab">Part-IV</a></li>
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
	<td colspan="3"><div style="text-align:center" class="alert alert-info" role="alert">
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
<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a>
<button class="btn btn-info next" style="float:right;">Next</button>
</div>
 <div id="tab2" class=" tab-pane fade"><br>
<table class="table table-bordered">
<h3 style="text-align:center"> Part-II Self Appraisal </h3>
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
<th colspan="3"><h2 style="text-align:center">part-III Assesement by the reporting officer</h2></th>
</thead>
<tbody>
   <form name="apar1800" method="post">
<tr>
<td ><label for="exampleFormControlInput1">1</label></td>
<td colspan="2"><label for="exampleFormControlInput1">Does the reporting officer agree with the statement made in part II ? If not, the extent of agreement and reasons therefor? (wherever applicable)</label></td>
</tr>

<tr>
<td ><label for="exampleFormControlInput1">2</label></td>
<td colspan="2"><label for="exampleFormControlInput1">character and habits to include comments on :- </label> <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Integrity(To be filled onky in those cases in which section II is not required to mentained)</label></td>
<td><?php echo $row['2a']; ?><br><br>
<?php echo $row['integrity1']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Tact & Temper</label></td>
<td><?php echo $row['2b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">Conduct</label></td>
<td><?php echo $row['2c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">attendance</label></td>
<td><?php echo $row['2d']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label></td>
<td><label for="exampleFormControlInput1">Physical fitness for strenuous work</label></td>
<td><?php echo $row['2e']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label></td>
<td><label for="exampleFormControlInput1">Departmental abilities (Merits & Demerits) to includ comments on : </label> <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Initiative and direction</label></td>
<td><?php echo $row['3a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">General intelligence</label></td>
<td><?php echo $row['3b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">Leenness/Promptness and efficiency</label></td>
<td><?php echo $row['3c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">Power to control others</label></td>
<td><?php echo $row['3d']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label></td>
<td><label for="exampleFormControlInput1">organising/supervising ability</label></td>
<td><?php echo $row['3e']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label></td>
<td><label for="exampleFormControlInput1">Capacity for hardwork</label></td>
<td><?php echo $row['3f']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(g)</label></td>
<td><label for="exampleFormControlInput1">Amenability to discipline</label></td>
<td><?php echo $row['3g']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(h)</label></td>
<td><label for="exampleFormControlInput1">Safety consciousness : </label> <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">i)</label></td>
<td><label for="exampleFormControlInput1">Knowledge of safe working rules : </label></td>
<td><?php echo $row['3hi']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">ii)</label></td>
<td><label for="exampleFormControlInput1">Whether he disregards saftey in train operations for short term gains ? </label></td>
<td><?php echo $row['3hii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">iii)</label></td>
<td><label for="exampleFormControlInput1">whether he excrcises sufficient supervision on the staff and equipment to ensure safety in train working : </label></td>
<td><?php echo $row['3hiii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label></td>
<td><label for="exampleFormControlInput1">Qualities of leadership</label></td>
<td><?php echo $row['3i']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(j)</label></td>
<td><label for="exampleFormControlInput1">Communication skill including remarks on commendable work done in raj Bhasha</label></td>
<td><?php echo $row['3j']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label></td>
<td><label for="exampleFormControlInput1">Special aptitude or qualification</label></td>
<td><?php echo $row['4']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label></td>
<td><label for="exampleFormControlInput1">If any for outdoor work or posting to a particular area</label></td>
<td><?php echo $row['5']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label></td>
<td><label for="exampleFormControlInput1">Reliability</label></td>
<td><?php echo $row['6']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">7</label></td>
<td><label for="exampleFormControlInput1">Relations with others</label></td></td>
<td><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Those above</label></td>
<td><?php echo $row['7a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Those below</label></td>
<td><?php echo $row['7b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">The public (if his duties entail his coming into contact with public/railway users)</label></td>
<td><?php echo $row['7c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">8</label></td>
<td><label for="exampleFormControlInput1">Power of Drafting</label></td>
<td><?php echo $row['8']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">9</label></td>
<td><label for="exampleFormControlInput1">Knowledge of Rules, Regulations & Procedure</label></td>
<td><?php echo $row['9']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">10</label></td>
<td><label for="exampleFormControlInput1">Ability to conduct enquiries, gift evidence and prepare report(for INSPECTORS only)</label></td>
<td><?php echo $row['10']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">11</label></td>
<td><label for="exampleFormControlInput1">IN CASE OF STENOGRAPHERS/STENO-TYPIST/TYPISTS</label></td>
<td><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<label for="exampleFormControlInput1">Accuracy</label></td>
<td><?php echo $row['11a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Speed</label></td>
<td><?php echo $row['11b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">Neatness of execution</label></td>
<td><?php echo $row['11c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">Trustworthyness in confidential and secret matters.</label></td>
<td><?php echo $row['11d']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">12</label></td>
<td><label for="exampleFormControlInput1">IN CASE OF DRAWING OFFICE STAFF <br> <label> whether the employee can design/is a neat tracer/Draftsman/is an accurate calculator<label></label></td>
<td><?php echo $row['12']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">13</label></td>
<td><label for="exampleFormControlInput1">IN CASE OF MINISTERIAL STAFF ONLY </label>  <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Is his/her hand writing neat ? </label></td>
<td><?php echo $row['13a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">Does he/she mentais his/her office files neatly ?</label></td>
<td><?php echo $row['13b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">Does he/she mentain his/her rule books,codes,Diary and Reminder Memo book etc. ? </label></td>
<td><?php echo $row['13c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label></td>
<td><label for="exampleFormControlInput1">Does he/she promptly produce papers when required ? </label></td>
<td><?php echo $row['13d']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label></td>
<td><label for="exampleFormControlInput1">Is his/her disposal prompt ? </label></td>
<td><?php echo $row['13e']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label></td>
<td><label for="exampleFormControlInput1">Is he/she capable of putting up papers independently ?</label></td>
<td><?php echo $row['13f']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">14</label></td>
<td><label for="exampleFormControlInput1">IN CASE OF WORKSHOP STAFF AND TECHNICAL FIELD STAFF LIKE EBGINEER/SHOP SUPDTT.DY SHOP SUPDIT./BRIDGE INSPECTORS, ETC. ONLY  </label>  <br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">Technical abilities</label></td>
<td><?php echo $row['14a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">15</label></td>
<td><label for="exampleFormControlInput1">Has his/her work been satisfactory ? If not in what respect he/she has failed ?</label></td>
<td><?php echo $row['15']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">16</label></td>
<td><label for="exampleFormControlInput1">whether the employee was booked for the prscribed refresher course. if so ;- </label></td>
<td><?php echo $row['16']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label></td>
<td><label for="exampleFormControlInput1">whether he or she attended the refresher course on being release and </label></td>
<td><?php echo $row['16a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label></td>
<td><label for="exampleFormControlInput1">whether he or she passed/failed in the said refresher course ?</label></td>
<td><?php echo $row['16b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label></td>
<td><label for="exampleFormControlInput1">whether he or she is fit for posting as trainer in training institute ? </label></td>
<td><?php echo $row['16c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">17</label></td>
<td><label for="exampleFormControlInput1">Has the employee been reprimanded for in sifferent work or for other causes during  the period under report ? If so, Please give brief particulars </label></td>
<td><?php echo $row['17']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">18</label></td>
<td><label for="exampleFormControlInput1">Has the employee done any outstanding or notable work meriting commendation ? If so, Please give brief particulars.</label></td>
<td><?php echo $row['18']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">19</label></td>
<td><label for="exampleFormControlInput1">Gradings</label></td>
<td>  <?php echo $row['19']; ?> </td>
<br>
</tr>
</tbody>
</table>
<table>
<tbody>

<tr>

<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><?php echo $row['signReportOfficer']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><?php echo $row['name']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Designation</label></td>
<td> <?php echo $row['designation']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><?php echo $row['dateReport']; ?></td>
</tr>




</tbody>
</table>
<br><br>
 <button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab4" class=" tab-pane fade"><br>
<table class="table table-bordered">
<thead>
<h3 style="text-align:center">Part-IV Remarks by The Reviewing Officer</h3>
</thead>
<tbody>
  
<tr>
<td><label for="exampleFormControlInput1">1</label>
<label for="exampleFormControlInput1">Length of Service under the Reviewing Officer.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="1" id="1"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">2</label>
<label for="exampleFormControlInput1">Is the reviewing officer satisfied that the reporting officer has made his/her report with due care and attention & after taking into account all the relevent materials ?</label> </td>
<td><select required class="form-control" id="2" name="2"  >
			<option value=""> </option>
			<option  value="Yes ">Yes </option>
			<option value="No">No</option>
				
			</select></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label>
<label for="exampleFormControlInput1">Do you agree with the assesment of the officer given by the Reporting Officer? (In case of disagreement, Please specify the reason. Is there anything yu wih to modify or add ? ) ?</label></td>
<script type="text/javascript">
		function changetext()
{
    if (document.getElementById("3").value == "Not") {
        document.getElementById("3ai").disabled=false;
    } else {
       document.getElementById("3ai").disabled=true;
		document.getElementById("3ai").value=null;

    }
}
</script>
<td><select required class="form-control" id="3" name="3"  onChange="changetext()">
			<option value=""> </option>
			<option  value="Yes ">Yes </option>
			<option value="Not">No</option>
				
			</select><br>
			
			<textarea disabled  class="form-control"  name="3ai" id="3ai"></textarea>
			</td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label>
<label for="exampleFormControlInput1">If the officer reported upon is a member of scheduled caste/secheduled tribe,please indicate specifically wheteher the attitude of the reporting officer in assessing the performance of the SC/ST officer has been fair and just.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput2" name="4" id="4"><br></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label>
<label for="exampleFormControlInput1">Gneral remarks with the specific comments about the general marks given by the reporting officer and remarks about the meritorious work of the officer including the grading</label></td>
<script type="text/javascript">

		function changebox()
{
    if (document.getElementById("5").value == "No") {
        document.getElementById("5ai").disabled=false;
    } else {
        document.getElementById("5ai").disabled=true;
				document.getElementById("5ai").value=null;

    }
}
</script>
<td><select required class="form-control" id="5" name="5"  onChange="changebox()">
			<option value=""> </option>
			<option  value="Agreed">Agreed </option>
			<option value="No">DisAgreed</option>
				
			</select><br>
			
			<textarea disabled  class="form-control"  name="5ai" id="5ai"></textarea>
			</td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label>
<label for="exampleFormControlInput1">Has the officer any special characteristics, and/or any abilities which would justify his/her selection for special assignment or/out of turn promotion? If so,specify</label></td>
<script type="text/javascript">
		function changetextbox()
	{
    if (document.getElementById("6").value == "No") {
        document.getElementById("6ai").disabled=false;
    } else {
        document.getElementById("6ai").disabled=true;
				document.getElementById("6ai").value=null;

    }
}
</script>
<td><select required class="form-control" id="6" name="6"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Yes ">Yes </option>
			<option value="No">No</option>
				
			</select><br>
			
			<textarea disabled  class="form-control"  name="6ai" id="6ai"></textarea>
			</td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="signReviewOfficer" id="signReviewOfficer"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><input type="text" readonly  name="name" id="name" value="<?php echo $fname;  ?>"></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Designation during the period of report</label></td>
<td><input type="text" readonly  name="designation" id="designation" value="<?php echo $designation;  ?>"></td>
</tr>



<tr>

<td><label for="exampleFormControlInput1">Place</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="placeReview" id="placeReview"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><input required type="text" readonly name="dateReview" id="dateReview"value="<?php
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

