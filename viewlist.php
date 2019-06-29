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
echo $ayear;

$uid=$_COOKIE['uid'];


	 if ($grade==1800) {
		$table = 'reporting1800';
		$href = 'APARL1GP1800.php';
		
		$username = explode('-', $_COOKIE['grade']);
	}
	
	else if ($grade==1900) {
		$table = 'reporting1900';
		$href = 'APARL1GP1900.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	else if ($grade==5) {
		$table = 'reporting_anx_v';
		$href = 'confidentialreport.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
		
		//$condition = ' WHERE uid = "'.$username.'"';
	}
	
	else if ($grade==1) {
		$table = 'reporting_anx_i';
		$href = 'Report_Anx_1.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
	}
	else if ($grade==2) {
		$table = 'reporting_anx_ii';
		$href = 'Report_Anx_2.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
	}
	else if ($grade==3) {
		$table = 'reporting_anx_iii';
		$href = 'Report_Anx_3.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
	}
	else if ($grade==4) {
		$table = 'reporting_anx_iv';
		$href = 'Report_Anx_4.php';
		$username = explode('-', $_COOKIE['grade']);
		$username = $username[0];
	}
	
	//$username = $username[0];


if ($table =='reporting_anx_i') 
{
	$query = "
	select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from self_anx_i s JOIN user1 u on u.uid=s.uid
	where u.reporting=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from self_anx_i s JOIN user1 u join $table r on u.uid=s.uid and r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade";

}
else if ($table =='reporting_anx_ii') 
{
	$query = "
	select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from self_anx_ii s JOIN user1 u on u.uid=s.uid
	where u.reporting=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from self_anx_ii s JOIN user1 u join $table r on u.uid=s.uid and r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade";

}
else if ($table =='reporting_anx_iii') 
{
	$query = "
	select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from self_anx_iii s JOIN user1 u on u.uid=s.uid
	where u.reporting=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from self_anx_iii s JOIN user1 u join $table r on u.uid=s.uid and r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade";

}	
else if ($table =='reporting_anx_iv') 
{
	$query = "
	select u.uid,u.fullname,u.designation,u.dob,'PENDING' AS Status from self_anx_iv s JOIN user1 u on u.uid=s.uid
	where u.reporting=$uid AND s.ayear=$ayear AND u.grade=$grade
	and u.uid not in (select u.uid from user1 u join $table r on r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade)
	UNION
	select u.uid,u.fullname,u.designation,u.dob,'SUBMITTED' AS Status from self_anx_iv s JOIN user1 u join $table r on u.uid=s.uid and r.uid=u.uid
	where u.reporting=$uid AND r.ayear=$ayear AND u.grade=$grade";

}	

else {

	$query = "
	
		select u2.uid, u2.fullname,u2.designation,u2.dob, 'SUBMITTED' as Status
		from $table r left outer join user1 u2
		on r.uid=u2.uid
		where r.ayear=$ayear and u2.grade=$grade and u2.uid in (
		select u1.uid
		from user1 u inner join user1 u1
		on u.uid=u1.reporting
		where u1.reporting=$uid)
		union
		select u1.uid,u1.fullname,u1.designation,u1.dob, 'PENDING' as Status
		from user1 u inner join user1 u1
		on u.uid=u1.reporting
		where u1.reporting=$uid  and u1.grade=$grade and u1.uid not in (
		select u2.uid from $table r left outer join user1 u2
		on r.uid=u2.uid
		where r.ayear=$ayear and  u2.grade=$grade and u2.uid in (
		select u1.uid
		from user1 u inner join user1 u1
		on u.uid=u1.reporting
		where u1.reporting=$uid))";

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
<nav class="navbar navbar-inverse fixed-top" style="background-color:#D6EAF8;" >
	
    <div class="navbar-header">
		<img src="images/Rail_Logo.png"   alt="Indian Railways" height="60px">
	</div>
	
      <a class="nav-link btn btn-info" style="font-size:18px;" href="/APAR1" >Logout</a>
	
	
	</nav>
    <div class="container ">
	<a type="button" style="float:left;" href="Reporter.php" class="btn btn-info">Back</a><br >
	
    <div style="margin-bottom: 50px;">
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