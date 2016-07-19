<?php
session_start();
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Health Centre: Logging in 2 seconds</title>
<h1 align="center"> Logging in 2 seconds... </h1>
</head>

<body>
<?php

//Database Connectivity
$conn = new mysqli("50.62.209.121:3306", "saurabh", "Hydatabase9119$@","saurabh1233");

//Check Connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//statement define and execution
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
$i= FALSE;
if($result->num_rows > 0){
	
	while($row = $result->fetch_assoc()){
		if($row['username'] == $_POST['username'] && $row['password'] == $_POST['pass']){
			header("Location: ./home.php");
			$_SESSION['priority'] = $row['priority'];
			$i = TRUE;
			break;
		}
	}
}if(!$i){
	header("Location: ./index.php?p=1");
}
	
mysqli_close($conn);
exit();
?>
</body>
</html>
