<?php
 ob_start();
  include("connect.php");
  
  $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
  
  if(isset($_POST['send'])!="")
  {
  $name=mysql_real_escape_string($_POST['name']);
  $comment=mysql_real_escape_string($_POST['comment']);
  $update=mysql_query("INSERT INTO comments(name,comment,dt)VALUES
									  ('$name','$comment', now())");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "alert('$msg');";
	  header('Location:comment_index.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "alert('$errormsg');";
	  header('Location:comment_index.php');
  }
  }
 ob_end_flush();
?>