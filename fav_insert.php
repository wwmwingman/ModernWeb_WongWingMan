<?php
 ob_start();
  include("connect.php");
  
  $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
  
  if(isset($_POST['send'])!="")
  {
  $item=mysql_real_escape_string($_POST['item']);
  $code=mysql_real_escape_string($_POST['code']);
  $update=mysql_query("INSERT INTO hiv_test(item,code,price)VALUES('$item','$comment','$price'");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "alert('$msg');";
	  header('Location:fav_index.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "alert('$errormsg');";
	  header('Location:fav_index.php');
  }
  }
 ob_end_flush();
?>