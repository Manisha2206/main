<?php
$con = mysqli_connect("localhost","root","","test_interns");
// hostname,username,password,databasename
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else{

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit();
	$sqlTotal = "INSERT INTO departments(department_id, department_name) VALUES (".$_POST['department_id'].",'".$_POST['department_name']."')";
	$result = $con->query($sqlTotal);
	
	echo json_encode("Data submitted success");
}
?>