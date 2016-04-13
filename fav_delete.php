<?php
ob_start();
include('connect.php');


$db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("UPDATE hiv_test SET bookmark='0' WHERE id='$id'");

	if($update)
  {
	  $msg="Successfully delete from favourite list!!";
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
	
?>

