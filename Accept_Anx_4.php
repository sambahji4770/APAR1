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
	$railway= $_POST['railway'];
	$department = $_POST['department']; 
	$name= $_POST['name'];
	$designation= $_POST['designation'];
	$a1	= $_POST['1'];
	$ai1	= $_POST['1ai'];
	$a2 = $_POST['2a']; 
	$b2= $_POST['2b'];
	$c2 = $_POST['2c'];
	$d2= $_POST['2d'];
	$e2	= $_POST['2e'];
	$remarkByReview	= $_POST['remarkByReview'];
	$stationReview	= $_POST['stationReview'];
	$designationReview	= $_POST['designationReview'];
	$dateReview	= $_POST['dateReview'];
	$remarkByHod= $_POST['remarkByHod'];
	$stationHod = $_POST['stationHod'];
	$designationHod= $_POST['designationHod'];
	$dateHod = $_POST['dateHod'];
	$isArmy= $_POST['isArmy'];

	
	$query1 = 
	"INSERT INTO `accept_anx_iv`(`ayear`, `railway`, `department`, `name`, `designation`, `1`, `1ai`,`2a`, `2b`, `2c`, `2d`, `2e`, `remarkByReview`, `stationReview`, `designationReview`, `dateReview`, `remarkByHod`, `stationHod`, `designationHod`, `dateHod`, `isArmy`, `createdDate`, `uid`) VALUES   ('$ayear','$railway','$department','$name','$designation','$a1','$ai1','$a2' ,'$b2','$c2' ,'$d2', '$e2', '$remarkByReview','$stationReview','$designationReview','$dateReview',' $remarkByHod','$stationHod' ,'$designationHod', '$dateHod' , '$isArmy', now(), '$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":1",$a1, PDO::PARAM_STR);	
		$stmt->bindParam(":1ai",$ai1, PDO::PARAM_STR);	
		$stmt->bindParam(":2a",$a2, PDO::PARAM_STR);	
		$stmt->bindParam(":2b", $b2, PDO::PARAM_STR);
		$stmt->bindParam(":$2c",$c2, PDO::PARAM_STR);
		$stmt->bindParam(":2d",$d2, PDO::PARAM_STR);
		$stmt->bindParam(":2e",$e2, PDO::PARAM_STR);
		$stmt->bindParam(":remarkByReview",$remarkByReview, PDO::PARAM_STR);
		$stmt->bindParam(":stationReview",$stationReview, PDO::PARAM_STR);
		$stmt->bindParam(":designationReview",$designationReview, PDO::PARAM_STR);
		$stmt->bindParam(":dateReview",$dateReview, PDO::PARAM_STR);
		$stmt->bindParam(":remarkByHod",$remarkByHod, PDO::PARAM_STR);
		$stmt->bindParam(":stationHod",$stationHod, PDO::PARAM_STR);
		$stmt->bindParam(":designationHod",$designationHod, PDO::PARAM_STR);
		$stmt->bindParam(":dateHod",$dateHod, PDO::PARAM_STR);
		$stmt->bindParam(":isArmy",$isArmy, PDO::PARAM_STR);
			
		// execute the query
		$stmt->execute();
		
	if($stmt->rowCount()) 
	{
		header('Location: view_accept.php');
	} 
	else 
	{
		echo 'Data not updated';
	}
	 
}	 
if (!empty($_GET['uid'])) {
	
	$uid = $_GET['uid'];
	$query = "select * from user1 u1 INNER JOIN self_anx_iv r join reporting_anx_iv s JOIN reviewing_anx_iv q on u1.uid=r.uid and u1.uid=s.uid and u1.uid=q.uid WHERE u1.uid = $uid AND r.ayear=$ayear AND s.ayear=$ayear AND q.ayear=$ayear ";
		
			
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
	
    <form name="Anx-1" method="post">
    <h4 style="text-align:center ">CONFIDENTIAL REPORT YEAR ENDING 31-3</h4><br>

    <h4 style="text-align:center ">Confidential Report for Group 'C'Staff including Workshop Staff (except PWIs,APWIs Signal Inspectors Asstt.Signal Inspectors and Teacher/Instructors)for the year ending 31-3<div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>"></div>
	</h4>
	<ul class="nav nav-tabs">
    <li class="nav-item "><a class="nav-link active" href="#tab1" data-toggle="tab">Part-I</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Part-II</a></li>
	<li class="nav-item "><a class="nav-link active" href="#tab3" data-toggle="tab">Part-III</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab">Part-IV</a></li>
	<li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab">Part-V</a></li>
</ul><div class="tab-content">
    <div id="tab1" class=" tab-pane active"><br>
<table class="table table-bordered">
	<thead>
	
	<thead>
    </thead>
	<tbody>
	<tr>
	<td colspan="3"><label for="exampleFormControlInput1">Name of School/Institution:</label>
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
<a type="button" style="float:left;" href="view_accept.php" class="btn btn-info">Back</a>
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
<button class="btn btn-info previous " style="float:left;">Previous</button>
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
<td><?php echo $row['2a']; ?></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Relations with fellow teachers</label></td>
<td><?php echo $row['2b']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Integrity</label></td>
<td><?php echo $row['2c']; ?>
<?php echo $row['integrity1']; ?></td></tr>


<tr>
<td><label for="exampleFormControlInput1">(d) (i)</label>
<label for="exampleFormControlInput1">Regularity & Punctuality</label></td>
<td><?php echo $row['2di']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Leave taken during the scholl session in the year</label></td>
<td><?php echo $row['2dii']; ?></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">Health</label></td>
<td><?php echo $row['2e']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Whether he/she gets good example in (a) neatness (b) cleanliness & (c) Obedience of orders</label></td>
<td><?php echo $row['2f']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label>
<label for="exampleFormControlInput1">Departmental abilities </label></td>
<td><?php echo $row['3']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Initiative </label></td>
<td><?php echo $row['3a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Intelligence</label></td>
<td><?php echo $row['3b']; ?></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Keenness/Promptness and efficiency</label></td>
<td><?php echo $row['3c']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Profeciency in day-to-day teaching</label></td>
<td><?php echo $row['3d']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label>
<label for="exampleFormControlInput1">Coomunication skill including remark on commendable work done in Raj Bhasha </label></td>
<td><?php echo $row['3di']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Power of expression</label></td>
<td><?php echo $row['3dii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iii)</label>
<label for="exampleFormControlInput1">Supervision of written work of scholars</label></td>
<td><?php echo $row['3diii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iv)</label>
<label for="exampleFormControlInput1">Maintenence of records</label></td>
<td><?php echo $row['3div']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">organising ability</label></td>
<td><?php echo $row['3e']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(f)</label>
<label for="exampleFormControlInput1">Ability to maintain discipline</label></td>
<td><?php echo $row['3f']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(i)</label>
<label for="exampleFormControlInput1">In the class</label></td>
<td><?php echo $row['3fi']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(ii)</label>
<label for="exampleFormControlInput1">Outside the class</label></td>
<td><?php echo $row['3fii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(iii)</label>
<label for="exampleFormControlInput1">Control of servants</label></td>
<td><?php echo $row['3fiii']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(g)</label>
<label for="exampleFormControlInput1">Proficiency in educating the backward students of the class</label></td>
<td><?php echo $row['3g']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(h)</label>
<label for="exampleFormControlInput1">Examination results of the subjects taught by the teacher in different classes </label> </td>
<td><?php echo $row['3h']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">i)</label>
<label for="exampleFormControlInput1">Qualities of leadership </label></td>
<td><?php echo $row['3i']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label>
<label for="exampleFormControlInput1">Physical disability,If any, for outdoor work or posting to a particular area</label></td>
<td><?php echo $row['4']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label>
<label for="exampleFormControlInput1">Aptitude for developing (i)Character (ii) Sportsmanship & developing extra curricular activities such as (a) Games & Sports (b) Music (c) Debating socities 9d) Managing clubs etc. amongst the students</label></td>
<td><?php echo $row['5']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label>
<label for="exampleFormControlInput1">Whether the teacher was booked for the prescribed rfresher course, if so</label></td>
<td><?php echo $row['6']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Whether he/she attended the course on being released; and</label></td>
<td><?php echo $row['6a']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Whether he/she passed/failed in the said course</label></td>
<td><?php echo $row['6b']; ?></td>
<tr>

<tr>
<td><label for="exampleFormControlInput1">7</label>
<label for="exampleFormControlInput1">Has he/she been reprimanded for indifferent work or for any other causes during the period under report ? If so, give brief particulars</label></td>
<td><?php echo $row['7']; ?></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">8</label>
<label for="exampleFormControlInput1">Has he/se done any outstanding or notable work meriting commendation? If so, give brief particulars</label></td>
<td><?php echo $row['8']; ?></td>
</tr>


<tr>
<td><label for="exampleFormControlInput1">9</label>
<label for="exampleFormControlInput1">Gradings</label></td>
<td><?php echo $row['9']; ?></td>
<br>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>

<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><?php echo $row['SignReportOfficer']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><?php echo $row['name']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Designation</label></td>
<td><?php echo $row['designation']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><?php echo $row['dateReport']; ?></td>
</tr>
</tbody>
</table>
<button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab4" class=" tab-pane fade"><br>
<table class="table table-bordered">
<thead>
<h3>Part-IV Remarks by The Reviewing Officer</h3>
</thead>
<tbody>
  
<tr>
<td><label for="exampleFormControlInput1">1</label>
<label for="exampleFormControlInput1">Length of Service under the Reviewing Officer.</label></td>
<td><?php echo $row['1']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">2</label>
<label for="exampleFormControlInput1">Is the reviewing officer satisfied that the reporting officer has made his/her report with due care and attention & after taking into account all the relevent materials ?</label> </td>
<td><?php echo $row['2']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">3</label>
<label for="exampleFormControlInput1">Do you agree with the assesment of the officer given by the Reporting Officer? (In case of disagreement, Please specify the reason. Is there anything yu wih to modify or add ? ) ?</label></td>
<td><?php echo $row['3']; ?><br>
<?php echo $row['3ai']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">4</label>
<label for="exampleFormControlInput1">If the officer reported upon is a member of scheduled caste/secheduled tribe,please indicate specifically wheteher the attitude of the reporting officer in assessing the performance of the SC/ST officer has been fair and just.</label></td>
<td><?php echo $row['4']; ?></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">5</label>
<label for="exampleFormControlInput1">Gneral remarks with the specific comments about the general marks given by the reporting officer and remarks about the meritorious work of the officer including the grading</label></td>
<td><?php echo $row['5']; ?><br><?php echo $row['5ai']; ?></td>

</tr>

<tr>
<td><label for="exampleFormControlInput1">6</label>
<label for="exampleFormControlInput1">Has the officer any special characteristics, and/or any abilities which would justify his/her selection for special assignment or/out of turn promotion? If so,specify</label></td>
<td><?php echo $row['6']; ?><br><?php echo $row['6ai']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Signature of the reporting officer</label></td>
<td><?php echo $row['signReviewOfficer']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Name in block letters</label></td>
<td><?php echo $row['name']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Designation during the period of report</label></td>
<td><?php echo $row['designation']; ?></td>
</tr>



<tr>

<td><label for="exampleFormControlInput1">Place</label></td>
<td><?php echo $row['placeReview']; ?></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><?php echo $row['dateReview']; ?></td>
</tr>
</tbody>
</table>
<button class="btn btn-info previous " style="float:left;">Previous</button>
<button class="btn btn-info  next" style="float:right;">Next</button>
</div>
 <div id="tab5" class=" tab-pane fade"><br>
<table class="table table-bordered">
<thead>
<h3> SECTION-II </h3>
<h4>[ SECTION-II of the C.R. form For Rly.employess in Grade Rs. 5500-9000 (RSRP) & above likely to be considered for promotion to Group 'B' Services ] </h4>
  
</thead>
<tbody>
 
<tr>
<td><label for="exampleFormControlInput1">Railway</label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="railway" value="<?php echo $row['office']; ?>"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">Department </label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="department" value="<?php echo $row['department']; ?>"></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">Name </label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $row['fullname']; ?>"></td>
</tr>

<tr>
<td>
<label for="exampleFormControlInput1">Designation </label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="designation" value="<?php echo $row['designation']; ?>"></td>
</tr>

<tr>
<td>
<label for="exampleFormControlInput1">1</label>
<label for="exampleFormControlInput1">Integrity</label></td>
<script type="text/javascript">
		function changetextbox()
{
    if (document.getElementById("1").value == "doubt") {
        document.getElementById("1ai").disabled=false;
    } else {
        document.getElementById("1ai").disabled=true;
		document.getElementById("1ai").value=null;
    }
}
</script>
<td><select required class="form-control" id="1" name="1"  onChange="changetextbox()">
			<option value=""> </option>
			<option  value="Beyond doubt">Beyond doubt</option>
			<option value="doubt">doubt</option>
				
			</select><br>
			
			<textarea disabled required class="form-control"  name="1ai" id="1ai"></textarea></tr>

<tr>
</tr>

<tr>
<td><label for="exampleFormControlInput1">2</label>
<label for="exampleFormControlInput1">Special Attributes</label></td>
<td></td>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(a)</label>
<label for="exampleFormControlInput1">Qualities of Leadership</label></td>
<td>  <select name="2a">
 <option value=""></option>
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
<br>
</tr>



<tr>
<td><label for="exampleFormControlInput1">(b)</label>
<label for="exampleFormControlInput1">Capacity to take decisions on matters within his/her competence</label></td>
<td>  <select name="2b">
 <option value=""></option>
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
<br>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(c)</label>
<label for="exampleFormControlInput1">Willingness to shoulder higher responsibility</label></td>
<td>  <select name="2c">
	 <option value=""></option>
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
<br>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(d)</label>
<label for="exampleFormControlInput1">Ability to inspire confidenc guide, motivate & obtain the bestout of the staff</label></td>
<td>  <select name="2d">
 <option value=""></option>
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
<br>
</tr>

<tr>
<td><label for="exampleFormControlInput1">(e)</label>
<label for="exampleFormControlInput1">Ability to enforce discipline</label></td>
 <td> <select name="2e">
	 <option value=""></option>
    <option value="Outstanding">Outstanding</option>
    <option value="verygood">Very good</option>
    <option value="good">Good</option>
    <option value="average">Average</option>
<option value="belowaverage">Below Average</option>
  </select></td>
<br>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Signature & designation of reporting officer</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="remarkByReview" id="remarkByReview"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Remarks by the reviewing officer(DRM/DY.HOD)</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="stationReview" id="stationReview"><br></td>
</tr>
<tr>

<td><label for="exampleFormControlInput1">Designation</label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="designationReview" value="<?php echo $row['designation']; ?>">><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Station</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="stationReview" id="stationReview"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><input required type="text" readonly class="form-control" id="exampleFormControlInput1" name="dateReview" value="<?php echo $row['dateReview']; ?>"><br></td>
</tr>

<tr>

<td><label for="exampleFormControlInput1">Remarks by Head of Department</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="remarkByHod" id="remarkByHod"><br></td>
</tr>
<tr>

<td><label for="exampleFormControlInput1">Designation</label></td>
<td><input type="text" readonly  name="designationHod" id="designationHod" value="<?php echo $designation;  ?>"></td>
</tr>
<tr>

<td><label for="exampleFormControlInput1">Station</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="stationHod" id="stationHod"><br></td>
</tr>
<tr>

<td><label for="exampleFormControlInput1">Date</label></td>
<td><input required type="text" readonly name="dateHod" id="dateHod"value="<?php
			$dt = new DateTime();
			echo $dt->format('Y-m-d');
			?>"></td>
</tr>

<tr>
<td>
<label for="exampleFormControlInput1">In case of territorial Army Personnal their T. A. rank should also be indicated.</label></td>
<td><input required type="text" class="form-control" id="exampleFormControlInput1" name="isArmy" id="isArmy"><br></td>
</tr>
</tbody>
</table>

<a type="button" style="float:left;" href="view_Review.php" class="btn btn-info">Back</a>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		</form>
		</div>

		</div>
		</div>
</body>
</html>
</body>
</html>