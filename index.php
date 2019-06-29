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

// remove all cookies
setcookie('cookie1800', '', time()-3600);
setcookie('cookie1900', '', time()-3600);
setcookie('cookie1819', '', time()-3600);
setcookie('username', '', time()-3600);
setcookie('users', '', time()-3600);
setcookie('uid', '', time()-3600);
setcookie('designation', '', time()-3600);
setcookie('department', '', time()-3600);
setcookie('office', '', time()-3600);
	if(isset($_POST['submit']))
	{
		$un=$_POST['username'];
		$pw=$_POST['password'];
		$ro=$_POST['role'];
		
		$query1="select * from user1 where username='$un'and password='$pw'";
		$stmt = $conn->prepare($query1);
		$stmt->bindParam(":username", $un, PDO::PARAM_STR);
		$stmt->bindParam(":password", $pw, PDO::PARAM_STR);
		$stmt->bindParam(":role", $ro, PDO::PARAM_STR);
		
		$stmt->execute(array(":username" => $un,":password" => $pw,":role" => $ro)); 
		
		$count=$stmt->rowCount();
		
		$users = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$users = $row;
		}
		if($un=='12345'&& $pw=='12345' )
			{	setcookie('fullname', $users["fullname"] ,0 );
				header('Location: Admin.php');
			} 
		else if($count==1)
		{	
			 if($users['role']=='6')
			{
				setcookie('fullname', $users["fullname"] ,0 );
				setcookie('designation', $users["designation"] ,0 );
				setcookie('department', $users["department"] ,0 );
				setcookie('office', $users["office"] ,0 );
				setcookie('uid', $users["uid"] ,0 );
				header('Location: Subadmin.php'); 
			}
			else if($users['role']=='2')
			{		
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					
					if($users['grade']=='1')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					
					header('Location: Self.php');
					}
					else if($users['grade']=='2')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					
					header('Location: Self.php');
					}
					else if($users['grade']=='3')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Self.php');
					}
					else if($users['grade']=='4')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Self.php');
					}
					else if($users['grade']=='5')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Self.php');
					}
					else if($users['grade']=='1800')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Self.php');
					}
					else if($users['grade']=='1900')
					{
					setcookie('ayear',$_POST['ayear'],0);
					setcookie('uid', $_COOKIE['uid'] ,0 );
					setcookie('grade', $users["grade"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Self.php');
					}
			}
			else  if($users['role']=='3')	
			{	
					setcookie('fullname', $users["fullname"] ,0 );
					setcookie('designation', $users["designation"] ,0 );
					setcookie('department', $users["department"] ,0 );
					setcookie('office', $users["office"] ,0 );
					setcookie('uid', $users["uid"] ,0 );
					header('Location: Reporter.php');
			}
			 else  if($users['role']=='4')
			{
				setcookie('fullname', $users["fullname"] ,0 );
				setcookie('designation', $users["designation"] ,0 );
				setcookie('department', $users["department"] ,0 );
				setcookie('office', $users["office"] ,0 );
				setcookie('uid', $users["uid"] ,0 );
				header('Location: Reviewer.php'); 
			}
			else  if($users['role']=='5')
			{
				setcookie('fullname', $users["fullname"] ,0 );
				setcookie('designation', $users["designation"] ,0 );
				setcookie('department', $users["department"] ,0 );
				setcookie('office', $users["office"] ,0 );
				setcookie('uid', $users["uid"] ,0 );
				header('Location: accept.php'); 
			}
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert
			if (confirm("wrong password"))
			{
			self.location = "index.php";
			}';
			echo '</script>';
			
			exit;
			
			
		}
		$stmt.close();
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
	
		<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top" style="background-color:#EBF5FB">
		<img src="images/Rail_Logo.png" alt="Indian Railways" height="60px"> 
		</nav> 

	
		<div id="main" role="main"><!-- MAIN CONTENT --> 
	

			<div class="row pt-5 m-4">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
					<h1 class="txt-color-red login-header-big"style="background-color:#EBF5FB">Karmik APAR Portal</h1>
					<div class="hero  m-4">
						<div class="pull-left login-desc-box-l">
							<h5 class="paragraph-header">Now Experience the simplicity of KarmiKSeva, everywhere you go!</h5>
							<div class="login-app-icons">
								<a href="https://railkarmikseva.in" class="btn btn-danger btn-sm">Home Page</a>
							</div>
						</div>
						<img src="https://railkarmikseva.in/karmikportal/img/kpmobile.jpg" class="pull-right display-image" alt="" style="width:210px">
					</div>
					<div class="row pt-5">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
							<h5 class="about-heading">About Portal</h5>
							<p>
								Easily manage Leave and View Pay Details and IncomeTax Archived Information.
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h5 class="about-heading">Platform Supports!</h5>
							<p>
								Better User Interface supported for Desktop and Mobile.
							</p>
						</div>
					</div>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-mb-6 ">
					<div class="container1 border">
						<h1 style="background-color:#EBF5FB">Sign In APAR module</h1>
						<form action="" method="post">
							<label for="username">User ID:</label><br>
							<input type="text" id="username" name="username" required>
							<label for="password">Password:</label>
							<input type="password" id="password" name="password" required><br>
							
							<span class="psw"><a href="https://railkarmikseva.in/karmikportal/forgotpassword.php">Forgot password?</a></span>
							<div id="lower">
								<input type="checkbox"><label class="check" for="checkbox" required>Keep me logged in</label>
								<input type="submit" name="submit" value="Login">
							</div>
						</form>
					</div>
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