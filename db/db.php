<?php
function db($sql){
	//Check for connection variable already set
	if(!isset($conn)){
	//Database Connectivity
	$conn = new mysqli(".............................");
	}

	//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$result = mysqli_query($conn, $sql);
	return($result);
}
function rowcount($sql){
	//Check for connection variable already set
	if(!isset($conn)){
	//Database Connectivity
	$conn = new mysqli("...............................");
	}

	//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = $conn->prepare($sql);
	$query->execute();
	$query->store_result();
	$rows = $query->num_rows;
	return ($rows);
}
?>