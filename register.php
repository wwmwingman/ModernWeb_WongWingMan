<?php
include "connect.php";

$db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.
$email=$_POST['email1'];
$password= ($_POST['password1']); // Password Encryption, If you like you can also leave sha1. ($password= sha1($_POST['password1']);)
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email";
}else{
$result = mysql_query("SELECT * FROM registration WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into registration(name, email, password) values ('$name', '$email', '$password')"); // Insert query
if($query){
echo "Signup successfully";
}else
{
echo "Error";
}
}else{
echo "This email is already registered.";
}
}
mysql_close ($connection);
?>