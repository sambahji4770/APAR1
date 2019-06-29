<?php
//error_reporting(0);

// get the database connection
function getConnection(){
	
	// specify database credentials
	$host = "localhost";
	$db_name = "apartest";
	$username = "root";
	$password = '';
	
	try {
		$conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("set names utf8");
		if($conn)
		{
			echo"conn ok";
		}
		else
		{
			echo " ";
		}
		
	} catch(PDOException $exception) {
		echo "Connection error: " . $exception->getMessage();
	}
	
}
?>

