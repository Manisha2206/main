<?php
$con = mysqli_connect("localhost","root","","test_interns");
// hostname,username,password,databasename
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else{
	$sqlTotal = "SELECT * FROM countries";
	$result = $con->query($sqlTotal);
	$json = array();
	while($row = $result->fetch_assoc()){
		array_push($json,$row);
		// echo "<pre>";
		// print_r($row);
		// echo "</pre>";
	}
	// exit();
	echo json_encode($json);
}
?>