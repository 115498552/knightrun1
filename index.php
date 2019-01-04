<?php
//connection variables
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "scoreboard";
	
	$name = $_POST["playernamePost"];//"inesrted name";
	$points =$_POST["playerscorePost"]; //"inserted value";
	
	//make connection_aborted
	$conn = new mysqli($servername, $username, $password, $dbName);
	//check connection
	if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}
		
	$sql = "INSERT INTO scores (Name, Points)
			VALUES ('".$name."','".$points."')";
	$result = mysqli_query($conn, $sql);
	
	if(!result) echo "Error";
	else echo "Success";
?>