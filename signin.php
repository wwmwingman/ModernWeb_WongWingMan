<?php
$hostname = "localhost";
$username = "peakwongwingman";
$password ="wongwingman";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

$name = trim($_POST["name"]);
$password = trim($_POST["password"]);

//echo "name = $name";
mysql_select_db("peakwongwingman_db",$connection) or die("Could not select database");

$sql = "select * from registration where name = '$name' and password = '$password'";
//echo $sql;
$result = mysql_query($sql);

//mysql_query("insert into registration () values ()");
if (mysql_num_rows($result) == 0) {
	echo "Acount is not exist";
} else {
	echo "OK";

}
//echo "aasda = "+$result["count(*)"];