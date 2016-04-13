<?php
 ob_start();
  include("connect.php");
  
  $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
  
  if(isset($_POST['send'])!="")
  {
  $name=mysql_real_escape_string($_POST['name']);
  $enquiry=mysql_real_escape_string($_POST['enquiry']);
  $update=mysql_query("INSERT INTO enquiry(name,enquiry,date)VALUES
									  ('$name','$enquiry', now())");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "alert('$msg');";
	  header('Location:enquiry_index.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "alert('$errormsg');";
	  header('Location:enquiry_index.php');
  }
  }
 ob_end_flush();
?>