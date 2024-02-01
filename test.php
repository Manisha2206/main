<?php

$con = mysqli_connect("localhost","root","","test_interns");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else
{
	$sqlTotal = "SELECT * FROM departments";
	$result = $con->query($sqlTotal);
	
	$json = array();
	while($row = $result->fetch_assoc()){
		array_push($json,$row);
	}

	// $data['data'] = $json;
	
	echo json_encode($json);
	return json_encode($json);
}
?>