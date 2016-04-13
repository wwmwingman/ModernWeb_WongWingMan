<?php
  ob_start();
  include("connect.php");
  $db = mysql_select_db("peakwongwingman_db", $connection); // Selecting Database.
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM comments WHERE id='$delete'");
  if($delete)
  {
	  header("Location:comment_index.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>