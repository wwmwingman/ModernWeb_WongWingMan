<?php
include "connect.php";

$db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.
$password= ($_POST['password1']); // Password Encryption, If you like you can also leave sha1.

// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT * FROM registration WHERE name='$name' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
echo "Login successfully";
}else{
echo "Incorrect username or password ";
}

mysql_close ($connection); // Connection Closed.
?>