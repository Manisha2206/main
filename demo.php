<?php

$con = mysqli_connect("localhost","root","","test_interns");
// hostname,username,password,databasename
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else{
	if(isset($_GET['process']) && $_GET['process']== 'listing')
	{
		$sqlTotal = "SELECT * FROM departments";
		$result = $con->query($sqlTotal);
		$json = array();
		while($row = $result->fetch_assoc()){
			array_push($json,$row);
		}
		echo json_encode($json);
	}
	else if(isset($_POST['process']) && $_POST['process'] == 'create_update')
	{
		$sqlTotal = "SELECT * FROM departments where department_id =".$_POST['department_id'];
		$result = $con->query($sqlTotal);
		
		if($result->num_rows == 0)
		{
			$sqlTotal = "INSERT INTO departments(department_id, department_name) VALUES (".$_POST['department_id'].",'".$_POST['department_name']."')";
			$result = $con->query($sqlTotal);
				
			echo json_encode("Data submitted success");
		}
		else
		{
			$sqlQuery = "UPDATE departments SET department_name='".$_POST['department_name']."' WHERE department_id = ".$_POST['department_id'];
			$result = $con->query($sqlQuery);
				
			echo json_encode("Data update success");
		}
	}
	else if(isset($_POST['process']) && $_POST['process']== 'delete')
	{
		$sqlTotal = "DELETE FROM departments where department_id=".$_POST['department_id'];
		$result = $con->query($sqlTotal);
		
		echo json_encode('Record deleted success');
	}
}
?>