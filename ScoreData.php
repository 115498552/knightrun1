<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "scoreboard";
	
	//make connection_aborted
	$conn = new mysqli($servername, $username, $password, $dbName);
	//check connection
	if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}
	
	$sql = "SELECT ID, Name, Points FROM scores";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		//show data for each row, the following line will become an array
		while($row = mysqli_fetch_assoc($result)){
			echo "ID:".$row['ID'] . "|Name:".$row['Name']. "|Points:".$row['Points']. ";";	
		}
	}
?>