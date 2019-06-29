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
$uid = $_COOKIE['uid'];
echo $uid;

// $fname=$_COOKIE['fullname'];

echo $ayear;
if (isset($_POST['submit'])) 
{
	$uid=$_POST['uid'];
	$ayear= $_POST['ayear'];
	$a =$_POST['1'];
	$b = $_POST['2'];
	$poepy=$_POST['poepy'];
	$Aduty=$_POST['Aduty'];
	
	$query1 = 
	"INSERT INTO `self_anx_iv`( `ayear`,`1`, `2`,`poepy`,`Aduty`, `createdDate`, `uid`) VALUES ('$ayear','$a','$b','$poepy','$Aduty',now(),'$uid')";
		
	
		
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":ayear", $ayear, PDO::PARAM_STR);
		$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
		$stmt->bindParam(":1", $a, PDO::PARAM_STR);
		$stmt->bindParam(":2", $b, PDO::PARAM_STR);
		$stmt->bindParam(":poepy", $poepy, PDO::PARAM_STR);
		$stmt->bindParam(":Aduty", $Aduty, PDO::PARAM_STR);
			
		// execute the query
		$stmt->execute();
		
	if($stmt->rowCount()) 
	{
		header('Location: Self.php');
	} 
	else 
	{
		echo 'Data not updated';
	}
	 
}	 

	$query = $sql = "select * from user1  WHERE uid = $uid";
		
			
	$stmt = $conn->prepare($query);


	$uid = htmlspecialchars(strip_tags($uid));
	
	$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
	

	$stmt->execute();

	//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
	//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";


	//$viewLists = array();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);



?> 
<html lang="en">

<head>
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
	
	
    <form name="Anx-4" method="post">
    <h4 style="text-align:center">CONFIDENTIAL REPORT YEAR ENDING 31-3</h4><br>

    <h4 style="text-align:center">Confidential Report for Group 'C'Staff including Workshop Staff (except PWIs,APWIs<br> Signal Inspectors Asstt.Signal Inspectors and Teacher/Instructors)for the year ending 31-3 <?php echo $ayear; ?><div > <input type="hidden" readonly class="form-control" id="exampleFormControlInput1" name="ayear"  value=" <?php echo $ayear; ?>"></div>
	</h4>
	<ul class="nav nav-tabs">
    <li class="nav-item "><a class="nav-link active" href="#tab1" data-toggle="tab">Part-I</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Part-II</a></li>
	 
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
   <td><textarea required type="text" class="form-control" id="exampleFormControlInput1" name="poepy" id="poepy"></textarea></td>
</tr>
  </div>
  
   <div class="form-group">
  <tr>
  <td width="50px"><label for="exampleFormControlInput1">11</label></td>
    <td><label for="exampleFormControlInput1">Actual duty of which employee(subject & Classes taught)</label></td>
   <td><textarea required type="text" class="form-control" id="exampleFormControlInput1" name="Aduty" id="Aduty"></textarea></td>
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
    <script>
$(document).ready(function(){
$('.btnNext').click(function(){
   $('.nav-tabs > .nav-item >  .active').parent().next('li').find('a').trigger('click');

});
$('.previous').click(function () {
    $('.nav-tabs > .nav-item > .active').parent().prev('li').find('a').trigger('click');
});
});  
</script>
    <a type="button" style="float:left;" href="Self.php" class="btn btn-info">Back</a>
<button class="btn btn-info next" style="float:right;">Next</button>
</div>
 <div id="tab2" class="tab-pane fade"><br>

<table class="table table-bordered">
<h3> Part-II Self Appraisal </h3>
<thead>


</thead>
<tbody>

   
<tr>
<td ><label for="exampleFormControlInput1">1</label></td>
<td><label for="exampleFormControlInput1">Brief description of duties</label></td>
<td><textarea required type="text" class="form-control" id="exampleFormControlInput1" name="1" id="1"></textarea></td>
</tr>
<tr>
<td ><label for="exampleFormControlInput1">2</label></td>
<td><label for="exampleFormControlInput1">Brief resume of the work done by you during the year /period from  <?php echo $ayear ?><br>
   bringing out any special acheivements during the year/period. In the event<br> of shortfall in achievement , furnished reasons. (The resume is to be <br>furnished within the space provided , limited to 100 words and is required to be signed) </label> </td>
<td><textarea required type="text" class="form-control" id="exampleFormControlInput2" name="2" id="2"></textarea><br></td>
</tr>
</tbody>
</table>
<button class="btn btn-info previous " style="float:right;">Previous</button>
		<button type="submit" style="margin-bottom: 50px; float:right" class="btn btn-info" name="submit" value="submit">Save</button>
		</form>
		</div>
</div>
</div>
</body>
</html>