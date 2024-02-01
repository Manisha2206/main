<?php
// $b = 10;
// $a = array(1,2,3,4);
// $vehicleArray = array('car', 'bus');
// $ages = array("Jon"=>26, "Arya"=>20, "Sansa"=>24);
// $familyArray = array(
// 	'Eddard'=>array('Rob' => array('sci' => 23,'maths' => 45), 'Jon', 'Arya'),
// 	'Lannister'=>array('Jammie', 'Tyrion', 'Cerse')
// );

// // $student_marks = 23;
// // echo $b;
// // print_r($a);
// // print_r($student_marks);
// // print_r($vehicleArray);
// // print_r("<br>");
// // print_r($ages);
// // print_r("<br>");
// echo "<pre>";
// print_r($familyArray);
// echo "</pre>";
// print_r($familyArray['Eddard']['Rob']['sci']);

// $str1 = "hello";
// $str2 = "world";
// echo $str1." ".$str2;

// $mark = 6;

// if($mark >= 5 && $mark < 10)
// {
// 	if($mark == 5)
// 	{
// 		echo "mark is 5";
// 	}
// 	else
// 	{
// 		echo "mark greater";
// 	}
// }
// else
// {
// 	echo "mark less";
// }

// $answer = ($mark >= 5 && $mark < 10) ? ($mark == 5) ? "mark is 5" : "mark greater...." : "mark less....";
// echo "<pre>";
// print_r($answer);
// echo "</pre>";
// exit();

$students = array(array("name" => "shiv", "rollno" => 21),array("name" => "harsh", "rollno" => 22));
echo "<pre>";
print_r($students);
echo "</pre>";
exit();
$arr = array("jaynesh" => 1,"vinit" => 2,"vini" => 3,"nuha" => 4,"harsh" => 5,"shiv" => 6);
array_push($arr, 7);
for ($i=0; $i < 6; $i++) { 
	echo "<pre>";
	print_r($arr[$i]);
	echo "</pre>";
}

foreach ($arr as $key => $value) {
	echo "<pre>";
	print_r($key."-".$value);
	echo "</pre>";
	eXit();
}
?>