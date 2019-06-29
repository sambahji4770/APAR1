<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//setcookie('fname', $users["fname"] ,0 );
$ayear=$_COOKIE['ayear'];
$grade=$_COOKIE['grade'];

$uid=$_COOKIE['uid'];


	 if ($grade==1800) {
		$table = 'reporting1800';
		$href = 'Review1800.php';
		
		$username = explode('-', $_COOKIE['grade']);
	}
	
	else if ($grade==1900) {
		$table = 'reporting1900';
		$href = 'Review1900.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	else if ($grade==5) {
		$table = 'reporting_anx_v';
		$href = 'ReviewAnx-5.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	
	else if ($grade==1) {
		$table = 'reviewing_anx_i';
		$href = 'Review_Anx_1.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	else if ($grade==2) {
		$table = 'reviewing_anx_ii';
		$href = 'Review_Anx_2.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	else if ($grade==3) {
		$table = 'reviewing_anx_iii';
		$href = 'Review_Anx_3.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	else if ($grade==4) {
		$table = 'reviewing_anx_iv';
		$href = 'Review_Anx_4.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	
	//$username = $username[0];


if ($table == 'reviewing_anx_i') {
	
	$query = "select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from reporting_anx_i s JOIN user1 u on u.uid=s.uid
	where u.reviewing=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from reporting_anx_i s JOIN user1 u JOIN     $table r on u.uid=s.uid and r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade";
}
else if ($table == 'reviewing_anx_ii') {
	
	$query = "
	select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from reporting_anx_ii s JOIN user1 u on u.uid=s.uid
	where u.reviewing=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from reporting_anx_ii s JOIN user1 u JOIN    $table r on u.uid=s.uid and r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade";
	
	

}
else if ($table == 'reviewing_anx_iii') {
	
	$query = "select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from reporting_anx_iii s JOIN user1 u on u.uid=s.uid
	where u.reviewing=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from reporting_anx_iii s JOIN user1 u JOIN   $table r on u.uid=s.uid and r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade";
	
	

}
else if ($table == 'reviewing_anx_iv') {
	
	$query = "select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from reporting_anx_iv s JOIN user1 u on u.uid=s.uid
	where u.reviewing=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from reporting_anx_iv s JOIN user1 u JOIN    $table r on u.uid=s.uid and r.uid=u.uid
	where u.reviewing=$uid AND r.ayear=$ayear AND u.grade=$grade";
}
else {

	$query = "
	SELECT u2.uid,u2.fullname,u2.designation,u2.dob,'SUBMITTED' AS Status
	FROM $table r LEFT OUTER JOIN user1 u2 ON r.uid = u2.uid
	WHERE r.ayear = $ayear AND u2.grade = $grade 
		and r.reportingname is not null
		and r.reviewingname is not null
	AND u2.uid IN(
    SELECT u1.uid
    FROM user1 u INNER JOIN user1 u1 ON u.uid = u1.reviewing
    WHERE u1.reviewing = $uid )
	UNION	
	SELECT u1.uid, u1.fullname, u1.designation, u1.dob,'PENDING' AS Status
	FROM user1 u INNER JOIN user1 u1 ON u.uid = u1.reviewing
	WHERE
    u1.reviewing = $uid AND u1.grade = $grade 
    AND u1.uid IN(SELECT u2.uid
    FROM $table r LEFT OUTER JOIN user1 u2 ON r.uid = u2.uid
    WHERE r.ayear = $ayear AND u2.grade = $grade 
		and r.reportingname is not null
		and r.reviewingname is null 
    AND u2.uid IN(SELECT u1.uid
    FROM user1 u INNER JOIN user1 u1 ON u.uid = u1.reviewing
    WHERE u1.reviewing = $uid
    ))";

}

$stmt = $conn->prepare($query); 
$stmt->execute();
 
//echo '<pre>errorCode:'; print_r($stmt->errorCode());  echo "</pre>";
//echo '<pre>errorInfo:'; print_r($stmt->errorInfo());  echo "</pre>";


$viewLists = array();

while ($row =$stmt->fetch(PDO::FETCH_ASSOC)){
	$viewLists[] = $row;
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
    <div class="container" style="padding-top: 40px">
	
    <div style="margin-bottom: 50px;">
	<a type="button" style="float:left;" href="Reviewer.php" class="btn btn-info">Back</a><a href="/APAR1" style="float:right;" class="btn btn-info">Logout</a><br><br /><br /><br />
    <!--<h4 style="float:left;">APARL1GP1900</h4>-->
    <!--<a type="button" style="float:right;" href="APARL1GP1900.php" class="btn btn-info">Add New</a>-->
    </div>
<table class="table table-striped responsive">
  <thead>
    <tr>
      <th scope="col">PF No.</th>
     
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
  <?php	foreach ($viewLists as $viewList) { ?>
		<tr>
		  <td><?php echo $viewList['uid'] ?></td>
		  <td><?php echo $viewList['fullname'] ?></td>
		  <td><?php echo $viewList['designation'] ?></td>
		  <td><?php echo $viewList['dob'] ?></td>
		  <td><?php echo $viewList['Status'] ?></td>
		  <?php if (isset($_COOKIE['cookie1819'])) { ?>
			<td>&nbsp;</td>
		  <?php } else if (strtolower($viewList['Status']) == 'pending') { ?>
			<td><a href="<?php echo $href; ?>?uid=<?php echo $viewList['uid'] ?>" type="button" class="btn btn-info">View</a>
			</td>
			
		  <?php } ?>
		</tr>
			
	<?php } ?>
  </tbody>
</table>

<?php if (isset($_COOKIE['cookie1819'])) { ?>
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
       
        var options = {
          title: 'APAR Status',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>

<?php } ?>

</div>
<?php include 'footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>