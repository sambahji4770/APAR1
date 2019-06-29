  <?php
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apar";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if($conn)
		{
			echo"conn ok";
		}
		else
		{
			echo " no";
		}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
setcookie('ayear','',time()-3600);
$grade = $_COOKIE['grade'];
$uid = $_COOKIE['uid'];
echo $grade;
echo $uid;

	if(isset($_POST['submit']))
	{
		
			
			
			 if($grade ==1800)
			{	
				setcookie('uid', $_COOKIE['uid'] ,0 );
				setcookie('ayear',$_POST['ayear'],0);
				
				header('Location: Self1800.php');
			}
			else if($grade == $_POST['grade'] && $_POST['grade']==1900)
			{
				//header('Location: viewlist.php');
			}
			else if($grade == $_POST['grade'] && $_POST['grade']== '5')
			{
				//header('Location: viewlist.php');
			}
			else if($grade=='1')
			{
				$ayear=$_POST['ayear'];
				$query1="select * from self_anx_i where uid='$uid' and ayear='$ayear'";
				$stmt = $conn->prepare($query1);
				$stmt->execute(array(":uid" => $uid,":ayear" => $ayear)); 
				$count=$stmt->rowCount();
				
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					
				}
				if($count==1){
					echo '<script language="javascript">';
						echo 'alert
						if (confirm("alredy feel your APAR"))
						{
						self.location = "self.php";
						}';
						echo '</script>';
						
						exit;
							}
				else{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					header('Location: Self_Anx_1.php');
				
				}
			}
			else if($grade == '2')
			{	
				$ayear=$_POST['ayear'];
				$query1="select * from self_anx_ii where uid='$uid' and ayear='$ayear'";
				$stmt = $conn->prepare($query1);
				$stmt->execute(array(":uid" => $uid,":ayear" => $ayear)); 
				$count=$stmt->rowCount();
				
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					
				}
				if($count==1){
					echo '<script language="javascript">';
						echo 'alert
						if (confirm("alredy feel your APAR"))
						{
						self.location = "self.php";
						}';
						echo '</script>';
						
						exit;
							}
				else{
					setcookie('ayear',$_POST['ayear'],0);
				setcookie('uid', $_COOKIE['uid'] ,0 );
				header('Location: Self_Anx_2.php');
				
				}
				
			}
			else if($grade == '3')
			{
				$ayear=$_POST['ayear'];
				$query1="select * from self_anx_iii where uid='$uid' and ayear='$ayear'";
				$stmt = $conn->prepare($query1);
				$stmt->execute(array(":uid" => $uid,":ayear" => $ayear)); 
				$count=$stmt->rowCount();
				
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					
				}
				if($count==1){
					echo '<script language="javascript">';
						echo 'alert
						if (confirm("alredy feel your APAR"))
						{
						self.location = "self.php";
						}';
						echo '</script>';
						
						exit;
							}
				else{
					setcookie('ayear',$_POST['ayear'],0);
				setcookie('uid', $_COOKIE['uid'] ,0 );
				header('Location: Self_Anx_3.php');
				
				}
				
			}
			else if($grade == '4')
			{	
				$ayear=$_POST['ayear'];
				$query1="select * from self_anx_iv where uid='$uid' and ayear='$ayear'";
				$stmt = $conn->prepare($query1);
				$stmt->execute(array(":uid" => $uid,":ayear" => $ayear)); 
				$count=$stmt->rowCount();
				
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					
				}
				if($count==1){
					echo '<script language="javascript">';
						echo 'alert
						if (confirm("alredy feel your APAR"))
						{
						self.location = "self.php";
						}';
						echo '</script>';
						
						exit;
							}
				else{
					setcookie('ayear',$_POST['ayear'],0);
				setcookie('uid', $_COOKIE['uid'] ,0 );
				header('Location: Self_Anx_4.php');
				
				}
		
				
			} 
			
			
		
			/* else
			{
				echo"wrong pass";
			} */
		
		
	} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Login - RailKarmik </title>
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

 
 
		<title>Login </title>
		<link rel="stylesheet" type="text/css" href="Css/Style.css">
</head>
<body>
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
		
		
		<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-8">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-mb-6 ">
			<div class="container1 border"style="margin-top:20px">
				<h1>Select Gread Pay </h1>
					<form action="" method="post">
					
						<label for="ayear">Select Year:</label>		
						<select class="form-control" style="width:300px" required  id="ayear" name='ayear'>
							<option value=""></option>
							<option value="201819">2018-2019</option>
							<option value="201920">2019-2020</option>
							<option value="202021">2020-2021</option>
							<option value="202122">2021-2022</option>
								</select><br>
								<input type="submit" name="submit" value="Submit">
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>
</html>