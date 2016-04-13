<?php
include "connect.php";

$json1=array();
$results = array();

$type = @$_GET['type'];

mysql_select_db("peakwongwingman_db",$connection) or die("Could not select database");

if($type == "submit"){
	$name = $_POST['name'];
	$enquiry = $_POST['enquiry'];
	$result = mysql_query("INSERT INTO enquiry (name, enquiry) VALUES ('$name','$enquiry')") or die("Could not issue MySQL query");

	$json['result'] = true;
	echo json_encode($json);
}else{
	
	$show_result = mysql_query("select * from enquiry");
		
	while($row = mysql_fetch_array($show_result)){
		$tempObj = array();
		$tempObj['name'] = $row['name'];
		$tempObj['enquiry'] = $row['enquiry'];
		$json[] = $tempObj;
	}	
	
	echo json_encode($json);
}

?>